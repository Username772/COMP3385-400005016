<?php

namespace package\test;
use PHPUnit\Framework\TestCase;


Class ModelTest extends TestCase
{

    protected Model $model;
    protected View $view;

    public function setUp()
    {
        $this->model = new Model();
    } 
    public function testModelObject(Model $model)
    {
          $this->assertEquals(get_class($this->view), 'View', 'Creation of the View object has failed');      
    }
    
    public function  testGetAll()
    {
           

    }

} 