<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h1>Hello, <?php echo User_getUsers(); ?>!</h1>
<a href="/logout.php">Exit</a>
<br><br>

<table border="1">
    <tr>
        <th>Название</th>
        <th>Фото</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><img src="<?php echo $item['path']; ?>" style="max-width: 200px;"></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="/add.php">Добавить фото</a>
<br>
<a href="/del.php">Удалить фото</a>


</body>
</html>