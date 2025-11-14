<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/app/security/check.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

checkRole('admin');

class AdminPanelCtrl {
    public function run() {
        $smarty = getSmarty();
        $smarty->assign('page_title', 'Panel administratora');
        $smarty->display('admin_panel.tpl');
    }
}

$ctrl = new AdminPanelCtrl();
$ctrl->run();
