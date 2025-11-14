<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/app/security/check.php';
checkRole(['user','admin']);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class CalcCtrl {
    private $x;
    private $y;
    private $op;
    private $messages = [];
    private $result = null;

    function getParams() {
        $this->x = $_POST['x'] ?? null;
        $this->y = $_POST['y'] ?? null;
        $this->op = $_POST['op'] ?? null;
    }

    function validate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->x === '') $this->messages[] = 'Nie podano liczby 1';
            if ($this->y === '') $this->messages[] = 'Nie podano liczby 2';

            if (empty($this->messages)) {
                if (!is_numeric($this->x)) $this->messages[] = 'Pierwsza wartość nie jest liczbą';
                if (!is_numeric($this->y)) $this->messages[] = 'Druga wartość nie jest liczbą';
            }
        }
    }

    function process() {
        if (empty($this->messages) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $a = floatval($this->x);
            $b = floatval($this->y);
            switch ($this->op) {
                case 'minus': $this->result = $a - $b; break;
                case 'times': $this->result = $a * $b; break;
                case 'div':
                    if ($b == 0) $this->messages[] = 'Nie wolno dzielić przez zero!';
                    else $this->result = $a / $b;
                    break;
                case 'plus':
                default: $this->result = $a + $b; break;
            }
        }
    }

    function generateView() {
        $smarty = getSmarty();
        $smarty->assign('x', $this->x);
        $smarty->assign('y', $this->y);
        $smarty->assign('op', $this->op);
        $smarty->assign('messages', $this->messages);
        $smarty->assign('result', $this->result);
        $smarty->display('calc.tpl');
    }

    function run() {
        $this->getParams();
        $this->validate();
        $this->process();
        $this->generateView();
    }
}

// wywołanie
$ctrl = new CalcCtrl();
$ctrl->run();
