<?php

function User_checkLoginPassword($login, $password){
    $users = ['anton' => '123', 'liberman' => 'qwerty'];
    return isset($users[$login]) && $password == $users[$login];
}

function User_login($login){
    setcookie('auth', $login, time()+86400);
}

function User_isUser(){
    return isset($_COOKIE['auth']);
}

function User_getUsers(){
    return $_COOKIE['auth'];
}