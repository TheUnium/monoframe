<?php namespace MonoLib\Lib\App;

use MonoLib\Lib\Logger;
use MonoLib\Lib\Config;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class App
{
    public static function init() {
        session_start();
        Logger::enableSystemLogs();
    }

    public static function twig($file) {
        $loader = new FilesystemLoader(Config::get('TEMPLATE_DIR'));
        $twig = new Environment($loader);
        echo $twig->render("$file.mono.php");
    }
}