<?php
require_once dirname(__FILE__).'/../../config.php';

class StartCtrl {
    public function goShow() {
        $smarty = getSmarty();
        $smarty->assign('page_title', 'Witamy w systemie kalkulatorów');
        $smarty->display('start.tpl');
    }
}

