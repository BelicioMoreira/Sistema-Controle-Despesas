<?php
    require_once "../config/app.php";
    require_once "../vendor/autoload.php";
    require_once "../app/views/inc/head.php";
    require_once "../app/views/inc/session_start.php";

    $path = rtrim($_SERVER['PATH_INFO'], '/');

    if ($path == '/dashboard') {
        require_once "../app/views/content/dashboard-view.php";
    } elseif ($path == '/new') {
        require_once "../app/views/content/new-view.php";
    } elseif ($path == '/login') {
        require_once "../app/views/content/login-view.php";
    } else {
        require_once "../app/views/content/404-view.php";
    }

?>
