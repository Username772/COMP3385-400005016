<?php

class SignupController extends AbstractController
{
    public function run()
    {
        $v = new View();
        $v->setTemplate(TPL_DIR . '/signup.tpl.php');

         $this->setModel(new SignupModel());
         $this->setView($v);

        $valid = new Validation();

            $name = $valid->name_verify(); ///----------------------CHANGE
            $email = $valid->email_verify();
            $pwd = $valid->password_verify();

            
           if($name == true && $email == true && $pwd == true)
           {
               $this->model->addData();
               $v->setTemplate(TPL_DIR . '/login.tpl.php');
               $v->display();

               echo "Sign Up Successful. Please login below";

               $data = $this->model->getAll();

               $this->model->updateTheChangeData($data);

               $this->model->notify();

           } 


    }
}//SignupController 