<?php

require __DIR__ . '/models/photo.php';

if (!empty($_POST)) {

    $data = [];

    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }

    if (isset($data['title'])) {
        Photo_delete($data);
        header('Location: /');
        die;
    }
}

$items = Photo_getAll();

include __DIR__ . '/views/del.php';