<?php 

namespace package\test;
use PHPUnit\Framework\TestCase;


class ControllerTest extends TestCase
{
 
    protected $model = null;
    protected $view = null;

        public function setUp()
        {
             $this->c = new Controller();       
             $this->m = new Model();
             $this->v = new View();
        }

        public function testControllerObject()
        {
               
            $this->assertEquals(get_class($this->c), 'Controller', 'The creation of the Controller object has failed'); 
        }
        
        public function testModelObject()
        {

              $this->assertEquals(get_class($this->m), 'Model', 'The creation of the Model object has failed');
              $this->assertEquals($this->m->model, null);
        }

        public function testViewObject()
        {

            $this->asserEquals(get_class($this->v), 'View', 'The creation of View object has failed');
            $this->assertEquals($this->$v->view, null);
        }



}