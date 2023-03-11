<?php namespace MonoLib\Lib\Router;

class RouteHandler {
    public static function route($route, $path_to_include){
        $callback = $path_to_include;
        if( !is_callable($callback) ){
            if(!strpos($path_to_include, '.mono.php')){
                $path_to_include.='.mono.php';
            }
        }    
        if($route == "/404"){
            include_once dirname(__DIR__, 3) . "/resources/views/$path_to_include";
            exit();
        }

        $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        $request_url = rtrim($request_url, '/');
        $request_url = strtok($request_url, '?');
        $route_parts = explode('/', $route);
        $request_url_parts = explode('/', $request_url);
        array_shift($route_parts);
        array_shift($request_url_parts);

        if( $route_parts[0] == '' && count($request_url_parts) == 0 ){
            if( is_callable($callback) ){
                call_user_func_array($callback, []);
                exit();
            }
            include_once dirname(__DIR__, 3) . "/resources/views/$path_to_include";
            exit();
        }

        if( count($route_parts) != count($request_url_parts) ){ return; }  

        $parameters = [];
        for( $__i__ = 0; $__i__ < count($route_parts); $__i__++ ){
            $route_part = $route_parts[$__i__];
            if( preg_match("/^[$]/", $route_part) ){
                $route_part = ltrim($route_part, '$');
                array_push($parameters, $request_url_parts[$__i__]);
                $$route_part=$request_url_parts[$__i__];
            }
            else if( $route_parts[$__i__] != $request_url_parts[$__i__] ){
                return;
            } 
        }

        if( is_callable($callback) ){
            call_user_func_array($callback, $parameters);
            exit();
        }    

        include_once dirname(__DIR__, 3) . "/resources/views/$path_to_include";
        exit();
  }
}