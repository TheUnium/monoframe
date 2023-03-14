<?php
use MonoLib\Lib\Router\Router;
use MonoLib\Lib\Config;
use MonoLib\Lib\App\App;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/*
    ----------------------------------------------------------
                      Template engine
    ----------------------------------------------------------
    MonoFrame uses twig. Twig is a template engine my the symfony
    team (of course) but yeah, very powerful engine, should use
    it in every project. Not sponsored. https://twig.symfony.com/
*/

$loader = new FilesystemLoader(Config::get('TEMPLATE_DIR'));
$twig = new Environment($loader);


// Files should be in /resources/views
// Files must end in .mono.php (eg : hello.mono.php)
Router::get('/', function() {
    global $twig;
    echo $twig->render("hello.mono.php", 
        ['mono' => [
            'project_name' => Config::get("PROJECT_NAME"),
            'version' => Config::get("VERSION"),
            'php' => phpversion()
        ]]);
});

/*
    ----------------------------------------------------------
                        404 - Not found
    ----------------------------------------------------------
    Throws out an error when a request is made but not handeled.
    Usually means that page does not exist, so 404 it is!
*/
Router::any('/404','errors/404');