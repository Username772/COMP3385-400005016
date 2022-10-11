<?php

class Validation
{

    //Properties
    private $userName;
    private $userEmail;
    private $userPwd;

        public function _contructor($name, $email, $pwd)
        {
             $this->userName = $name;
             $this->userEmail = $email;
             $this->userPwd =$pwd;
        }

        public function name_verify() : bool
        {

                if(empty($this->userName))
                {
                        echo '<font color="red"><b>Please filled out the name field</b></front>';
                }
                else if(!empty($this->userName) && !preg_match('^[a-zA-Z_\x80-\xff][a-zA-Z0-9]'))
                {
                         echo '<font color="red"><b>Error, invalid name format</b></front>';   
                         return false; 
                }

            return true;

        }
        
        public function email_verify(): bool
        {

             if(empty($this->userEmail))
             {
                    echo '<font color = "red"><b>Please enter you email';
                    return false;
             }
             else if(!empty($this->userEmail) && !filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)) 
             {
                     echo '<font color="red"><b>Error, invalid email format</b></front>';
                     return false;
             }
             
                    return true;

        }

        public function password_verify() : bool
        {

                if(empty($this->userPwd))
                {
                        echo '<font color ="red"><b>Please filled out the password field </b></front>';
                }
                else if(!empty($this->userPwd) && !strlen($this->userPwd) >= 10)
                {
                        echo '<font color ="red"><b> Password must be atleast 10 characters long. </b></front>';
           
                }
                else if(!empty($this->userPwd) && !preg_match('/[A-Z]/', $this->userPwd))  
                {
                        echo '<font color="red"><b>Password must have atleast one upper case letter</b></font>';
                }
        
                else if(!empty($this->userPwd) && !preg_match('/\d/', $this->userPwd) == 1)
                {
                        echo '<font><b>Password must atleast contain one number</b></font>';
                }

                else if(!empty($this->userPwd) && strlen($this->userPwd >=10) && preg_match('/[A-Z]/', $this->userPwd) && preg_match('/\d/', $this->userPwd) == 1)
                {
                    return true; 
                }

                    return false;
                    
        }


        public function emailPwd_verify() : bool
        {
                if(email_verify () != true && password_verify() != true)
                {
                        echo '<font><b>Invalid email/password</b></font>';
                        return false;
                }

                return true;
        }

}//Validation

