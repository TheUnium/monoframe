<?php namespace MonoLib\Lib\Router;
// namespace MonoLib\Router;

// use MonoLib\Lib\Logger;

// class Router
// {
//     public static function init($req) {
//         match ($req) {
//             '/' => require dirname(__DIR__, 1) . '/views/index.php',
//             '/about' => require dirname(__DIR__, 1) . '/views/about.php',
//             default => http_response_code(404) . dirname(__DIR__, 1) . '/Error/notFound.php',
//         };
//     }
// }

use MonoLib\Lib\Router\RouteHandler;

class Router {
    public static function get($route, $path_to_include) {
        if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ RouteHandler::route($route, $path_to_include); }  
    }

    public static function post($route, $path_to_include) {
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ RouteHandler::route($route, $path_to_include); }    
    }

    public static function put($route, $path_to_include) {
        if( $_SERVER['REQUEST_METHOD'] == 'PUT' ){ RouteHandler::route($route, $path_to_include); }    
    }

    public static function patch($route, $path_to_include) {
        if( $_SERVER['REQUEST_METHOD'] == 'PATCH' ){ RouteHandler::route($route, $path_to_include); }    
    }

    public static function delete($route, $path_to_include) {
        if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ RouteHandler::route($route, $path_to_include); }    
    }

    public static function any($route, $path_to_include) { 
        RouteHandler::route($route, $path_to_include); 
    }
}