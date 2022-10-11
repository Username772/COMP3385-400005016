<?php

class LoginController extends AbstractController
{

    public function run()
    {
        $v = new View();
        $v->setTemplate(TPL_DIR . '/login.tpl.php');

        $this->setModel(new LoginModel());
        $this->setView($v);

        if(emailPwd_verify() == true)
        {
            $v->setTemplate(TPL_DIR . '/profile.tpl.php');
            $this->model->attach($this->view);

            $data = $this->model->getAll();

            $this->model->updateThechangeData($data);

            $this->model->notify();

        }

    }

}