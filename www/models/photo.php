<?php

require_once __DIR__ . '/../functions/sql.php';

function Photo_getAll()
{
    Sql_connect();

    $sql = 'SELECT * FROM images';
    return Sql_query($sql);
}

function Photo_insert($data)
{
    $sql = "
        INSERT INTO images
        (title, path)
        VALUES
        ('" . $data['title'] . "', '" . $data['image'] . "')
    ";
    Sql_exec($sql);
}

function Photo_delete($data)
{
    $sql = "
        DELETE FROM images
        WHERE
        title = '" . $data['title'] . "'
    ";
    Sql_exec($sql);
}