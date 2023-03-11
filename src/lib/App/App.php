<?php namespace MonoLib\Lib\App;

use MonoLib\Lib\Logger;

class App
{
    public static function init()
    {
        session_start();
        Logger::enableSystemLogs();
        $log = Logger::getInstance();
    }
}