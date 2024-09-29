<?php
    require_once "../config/app.php";
    require_once "../vendor/autoload.php";
    require_once "../app/views/inc/session_start.php";

    $path = rtrim($_SERVER['PATH_INFO'], '/');

    if ($path == '/dashboard') {
        return require_once "../app/views/content/dashboard-view.php";
    } elseif ($path == '/login') {
        return require_once "../app/views/content/login-view.php";
    } else {
        require_once "../app/views/content/404-view.php";
    }

?>
