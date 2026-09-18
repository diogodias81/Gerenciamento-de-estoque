<?php
    // echo'<pre>';print_r($_SERVER);die;
    // echo'<pre>';print_r($_SERVER['REQUEST_URI']);die;

    $url = $_SERVER['REQUEST_URI'];

    $routes = [
        '/index' => 'views/index.php',
    ];

    if(array_key_exists($url, $routes)) {
        include($routes[$url]);
    } else {
        include('views/404.php');
    }

?>