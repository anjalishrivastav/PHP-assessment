<?php
namespace interview;

class configDatabase
{

    private $credentials = array(
        'host'     => 'localhost',
        'port'     => '',
        'database' => 'interview',
        'user'     => 'dbuser',
        'pass'     => 'iopl123'
    );

    public function getHost()
    {
        return $this->credentials['host'];
    }
    //--------------------------------------------------------------------------
	
	public function getPort(){
        return $this->credentials['port'];
    }
    //--------------------------------------------------------------------------


    public function getDatabase()
    {
        return $this->credentials['database'];
    }
    //--------------------------------------------------------------------------


    public function getUser()
    {
        return $this->credentials['user'];
    }
    //--------------------------------------------------------------------------


    public function getPass()
    {
        return $this->credentials['pass'];
    }
    //--------------------------------------------------------------------------
}
