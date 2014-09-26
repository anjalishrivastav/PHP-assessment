<?php
require_once __DIR__ . "/../boot.php";

class basicTest extends PHPUnit_Framework_TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\interview\configDatabase');
    }

    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\interview\Logging', new \interview\Logging);
    }

    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\interview\Database', new \interview\Database);
    }
}