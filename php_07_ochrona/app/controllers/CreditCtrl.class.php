<?php

class CreditCtrl {

    private CreditForm $form;

    public function __construct() {
        $this->form = new CreditForm();
    }

    public function action_credit(): void {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->form->load();

            if ($this->form->validate()) {

                $result = $this->form->calculate();

                View::render('credit.tpl', [
                    'form' => $this->form,
                    'result' => $result,
                    'messages' => Messages::getAll()
                ]);

                return;
            }
        }

        View::render('credit.tpl', [
            'form' => $this->form,
            'result' => null,
            'messages' => Messages::getAll()
        ]);
    }
}


