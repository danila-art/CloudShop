<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <span style="color: red"><?php
                                if (!empty($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                }
                                ?></span>
    <form action="../php/reg.php" method="post">
        <label for="">
            Введите ФИО<br>
            <input type="text" name="fio" id="fio">
        </label><br>
        <label for="">
            Введите логин<br>
            <input type="text" name="login" id="login">
        </label><br>
        <label for="">
            Введите пароль<br>
            <input type="password" name="password" id="password">
        </label><br>
        <input type="submit" value="Зарегестрироваться">
    </form>
    <a href="./login.php">Авторизация</a>
</body>

</html>