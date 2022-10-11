<?php 

class SessionClass
{
    protected $access = ['profile'=>'testuser', 'Sam', 'Timmy'];

        public function create()
        {
            session_start();
        }

        public function destory()
        {
            /*Destory cookie*/
            if(isset($_COOKIE['id']))
            {
                unset($_COOKIE['id']);
                setcookies('id', null, -1, '/');
            }

            session_destory(); //destory a session.
        }

        public function add($name, $value)
        {
            /**Check for a valid variable name */
            if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-xff]*$/', $name) == 0)
            {
                trigger_error('Invalid variable name used', E_USER_ERROR);
            }

            $_SESSION[$name] = $value; //Assign value to Session 

        }

        public function remove(string $name)
        {
             if(isset($_SESSION[$name]))
             {
                unset($_SESSION[$name]); //remove session    
             }

        }

        public function accessible($user, $page)
        {
            /*The function searches the access array to 
                see if the user is associated with this page*/
            if(in_array($user, $this->$access[$page]))
            {
                return true;
            }

            return false;
        }


        /*--------------------Added Get method ----------------------*/
        public function see($name)
        {
            if(isset($_SESSION[$name]))
            {
                return $_SESSION[$name]; 
            }
            
            return null;
        }

    }