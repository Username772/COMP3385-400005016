<?php

class IndexController extends AbstractController
{
        public function run()
        {
            //Create the view object 
             $v = new View();
             $v ->setTemplate(TPL_DIR . '/index.tpl.php');

             //Set the Model and View.
             $this->setModel(new IndexModel());
             $this->setView($v);

             $this->model->attach($this->view); //always done in the controller.

             //Dependig on what is required.
             $data = $this->model->getAll();


             //Notify the model to update the change data.
             $this->model->updateThechangedData($data);


             //Notify the model to contact its observers.
              $this->model->notify();
        }
    
}