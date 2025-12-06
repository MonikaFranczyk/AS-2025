<?php

class CalcCtrl {

    private CalcForm $form;

    public function __construct() {
        $this->form = new CalcForm();
    }

    public function action_calc(): void {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->form->load();

            if ($this->form->validate()) {

                $result = $this->form->calculate();

                View::render('calc.tpl', [
                    'form' => $this->form,
                    'result' => $result,
                    'messages' => Messages::getAll()
                ]);

                return;
            }

            View::render('calc.tpl', [
                'form' => $this->form,
                'result' => null,
                'messages' => Messages::getAll()
            ]);

            return;
        }

        View::render('calc.tpl', [
            'form' => $this->form,
            'result' => null,
            'messages' => Messages::getAll() 
        ]);
    }
}
