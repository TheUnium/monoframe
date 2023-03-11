<?php
use MonoLib\Lib\Router\Router;

// Files should be in /resources/views
// Files must end in .mono.php (eg : hello.mono.php)
Router::get('/', 'hello');

/*
    ----------------------------------------------------------
                        404 - Not found
    ----------------------------------------------------------
    Throws out an error when a request is made but not handeled.
    Usually means that page does not exist, so 404 it is!
*/
Router::any('/404','errors/404');