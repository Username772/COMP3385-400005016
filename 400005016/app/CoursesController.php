<?php 

class CoursesController extends AbstractController
{
    public function run()
    {

         SessionClass::class();

         $sess = new SessionClass();

        $v = new View();
        $v ->setTemplate(TPL_DIR . '/courses.tpl.php');

        $this->setModel(new CourseModel());
        $this->setView ($v);

        $this->model->attach($this->view);

        
        if($sess->see('user') != null)//Checks if user has login
        {
            $data = $this->model->getAll();

            //Notify the model to update the changes
            $this->model->updateTheChangeData();

            $this->model->notify();
        }
        else {
            
            $v->setTemplate(TPL_DIR . '/login.tpl.php');
            $v->display();
        }
      
    }

}