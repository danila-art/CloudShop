<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
    <span style="color: red"><?php
                                if (!empty($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                }
                                ?></span>
    <form action="../php/reg.php" method="post">
        <label for="">
            Введите логин<br>
            <input type="text" name="login" id="login">
        </label><br>
        <label for="">
            Введите пароль<br>
            <input type="password" name="password" id="password">
        </label><br>
        <input type="submit" value="Авторизироваться">
    </form>
    <a href="./reg.php">Регистрация</a>
</body>

</html>