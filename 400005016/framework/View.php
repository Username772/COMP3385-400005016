<?php

class View 
{
    private $data = []; 
    private $tpl = ' ';

        public function setTemplate(string $filename)
        {
            if(empty($filename))
            {
                trigger_error('<b>View error:</b> No template the filE given', E_USER_ERROR);
            }

            if(!file_exist($filename))
            {
                trigger_error('<b> View error : </b> File ' . $this->tpl . 'does not exist .
                cannot bind the template ', E_USER_ERROR);
            }
            
                    $this->tpl = $filename;

        } 

        public function display()
        {
            extract($this->data); //Create two array variables called popular and recomendtheation include the tpl files. 
            require $this->tpl;
        }     

        public function addVar($name, $value)
        {
                if (preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name == 0))
                {
                    trigger_error('Invalid variable name used', E_USER_ERROR);
                }

            $this->data[$name] = $value;
        }

}