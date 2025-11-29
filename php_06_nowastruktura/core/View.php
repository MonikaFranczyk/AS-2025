<?php
// core/View.php
class View {

    /**
     * Renderuje szablon Smarty
     * @param string $template (np. 'start.tpl')
     * @param array $data
     */
    public static function render(string $template, array $data = []): void {
        // init.php już uruchomiony, getSmarty() dostępne
        $smarty = getSmarty();

        // przypisz dane
        foreach ($data as $k => $v) {
            $smarty->assign($k, $v);
        }

        $smarty->display($template);
    }
}
