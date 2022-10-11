<?php

class SessionTest
{

    protected $_SESSION = array();
    
    public function setUp()
    {
        $this->$session = new Session();
    }

    public function tearDown()
    {}

    public function testSessionObject()
    {
        $this->assertEquals(get_class($this->session), 'Session', 'The creation of object has failed' );
    }

    public function testAccessible()
    {

        $this->session->create();
        $this->session->destory();

        $this->session->add("user_session", 8);
        $this->session->remove("user_session");

        assertEquals($this->session->accessible("Test User", header('Location: login.tpl.php')), true);

    }
        

}

