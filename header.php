<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $login = 'Root';
    $pass = 'Toor';
    
    if(($_SERVER['PHP_AUTH_PW']!==$pass || $_SERVER['PHP_AUTH_USER'] !==$login)|| !$_SERVER['PHP_AUTH_USER'])
    {
        header('WWW-Authenticate: Basic realm="Test auth"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Auth failed';
        exit;
    }