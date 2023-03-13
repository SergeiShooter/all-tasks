<?php
class MySingleton
{
    private static $_instance;
    public $_dbConnection;
    private function __construct ()
    {

    }
    static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return _self::$_instance

    }
}

$s = MySingleton::getInstance(); //vizov classa
$s->_dbConnection; //vizov svoistva iz classa