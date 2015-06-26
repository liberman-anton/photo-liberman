<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
if (!empty($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<form action="/login.php" method="post">
    Ваше имя:
    <input type="text" name="login">
    <br><br>
    Ваш пароль:
    <input type="password" name="password">
    <br><br>
    <input type="submit">
</form>

</body>
</html>