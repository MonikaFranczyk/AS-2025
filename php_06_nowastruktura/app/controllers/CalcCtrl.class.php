<?php
class CalcCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        // dostęp tylko dla zalogowanych user/admin
        if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], ['user','admin'])) {
            header("Location: " . _APP_URL . "/index.php?action=loginShow");
            exit();
        }
    }

    public function action_calc(): void {
        $form = new CalcForm();
        $form->load($_POST);

        $result = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($form->validate()) {
                $a = floatval($form->x);
                $b = floatval($form->y);
                switch ($form->op) {
                    case 'minus': $res = $a - $b; break;
                    case 'times': $res = $a * $b; break;
                    case 'div': if ($b == 0) { $form->messages[] = 'Nie wolno dzielić przez zero!'; $res = null; } else $res = $a / $b; break;
                    case 'plus':
                    default: $res = $a + $b;
                }
                if ($res !== null) $result = new CalcResult($res);
            }
        }

        View::render('calc.tpl', [
            'form' => $form,
            'result' => $result ? $result->getValue() : null
        ]);
    }
}