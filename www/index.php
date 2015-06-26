<?php

require __DIR__ . '/models/photo.php';
require __DIR__ . '/models/user.php';

if(!User_isUser()) {
    header('Location: /views/form_auth.php');
    exit;
}

$items = Photo_getAll();

include __DIR__ . '/views/index.php';