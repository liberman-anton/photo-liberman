<?php

session_start();

require __DIR__ . '/models/user.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($_POST['login']) || empty($_POST['password'])) {
    $_SESSION['error'] = 'Login or password - empty';
    header('Location: /views/form_auth.php');
    exit;
}

if (!User_checkLoginPassword($login, $password)) {
    $_SESSION['error'] = 'Login or password - wrong';
    header('Location: /views/form_auth.php');
    exit;
}

User_login($login);
header('Location: /index.php');
exit;