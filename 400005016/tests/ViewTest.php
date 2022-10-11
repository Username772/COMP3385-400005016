<?php

//namespace package\tests;
use PHPUnit\Framework\TestCase;


class ViewTest extends TestCase{

      //properties 
   private $tpl;

     public function setUp(){
         
        $this->view = new View();
     }

         //Methods
      public function testViewObject(){

         $this->assertEquals(get_call($this->view), 'View', 'View object creation failed');

      }

      public function testDisplay(){
 
         $this->view->setTemplate(TEMPLATE_DIR . '/index.tpl.php');
         assertEquals($this->tpl, '/index.tpl.php');
     
         is_string($this->tpl); //check if tpl is a string. 

         $this->addVar("Test User", 8);
      }


}