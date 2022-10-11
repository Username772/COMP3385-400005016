<?php

spl_autoloader_register(function($class_name)
{
    
    if(file_exists('app/' . $class_name . '.php'))
    {
         require 'app/' . $class_name . '.php';
    }
    else if(file_exists('tpl/' . $class_name . '.php'))
    {
         require 'tpl/' . $class_name . '.php';
    }
    else if(file_exists('framework/' . $class_name . '.php'))
    {
         require 'framework/' . $class_name . '.php';
    }
    else if(file_exists('data/' . $class_name . '.php'))
    {
         require 'data/' . $class_name . '.php';
    }
    else if(file_exists('tests/' . $class_name . '.php'))
    {
         require 'tests/' . $class_name . '.php';
    }

});