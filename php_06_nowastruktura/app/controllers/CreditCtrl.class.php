<?php
// app/controllers/CreditCtrl.class.php
require_once __DIR__ . '/../../core/View.php';
require_once __DIR__ . '/../forms/CreditForm.class.php';
require_once __DIR__ . '/../results/CreditResult.class.php';

class CreditCtrl {

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_credit(): void {
        // dostęp tylko dla admina
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            $_SESSION['error'] = "Brak dostępu do kalkulatora kredytowego!";
            header("Location: " . _APP_URL . "/index.php?action=menu");
            exit();
        }

        $form = new CreditForm();
        $result = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form->load($_POST);

            if ($form->validate()) {
                // obliczenie raty
                $kwota = floatval($form->kwota);
                $oprocentowanie = floatval($form->oprocentowanie);
                $miesiace = intval($form->miesiace);

                $r = ($oprocentowanie / 100) / 12;
                if ($r > 0) {
                    $monthly = ($kwota * $r) / (1 - pow(1 + $r, -$miesiace));
                } else {
                    $monthly = $kwota / $miesiace;
                }

                $result = new CreditResult($monthly);
            }
        }

        // renderujemy formularz z danymi i ewentualnym wynikiem
        View::render('credit.tpl', [
            'form' => $form,
            'result' => $result ? $result->getMonthlyRate() : null
        ]);
    }
}

