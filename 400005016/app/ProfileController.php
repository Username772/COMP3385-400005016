<?php

class ProfileController extends AbstractController
{
        public function run()
        {
            SessionClass::create();

            $sess = new SessionClass();

            //Create the View object 
            $v = new View();
            $v->setTemplate(TPL_DIR . '/profile.tpl.php');

            //Set the model & view
            $this->setModel(new ProfileModel());
            $this->setView($v);

            $this->model->attach($this->view);

            //Checks to see if the user can access the page.
            $user = $sess->see('user');


                if($sess->accessible($user, 'profile'))
                {
                    
                    $data = $this->model->getAll();

                    //Notify the model to update the change data.
                    $this->model->updateThechangeData($data);

                    //Notify the model to contact its observers.
                    $this->model->notify();
                }
                else{//Redirect to login page (access not granted).
                    $v->setTemplate(TPL_DIR . '/login.tpl.php');
                    $v->display();
                }

        }

}