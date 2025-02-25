<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
     <link rel="stylesheet" href="style.css">
</head>
    <body id= "loginWin">
        <blockquote class login>
            <div class= "log">
                <h2>Регистрация</h2>
            </div>
            <div class= "loginform">
                <form name= "firstpage" method= "post" action= "validationform/check.php">
                <p>Имя <br> <input type= "name" name= "name" id= "name" class="enter" placeholder="Введите Имя"></p>
                <p>Логин <br> <input type="text" name= "login" id="login" class="enter" placeholder="Введите Логин"></p>
                <p>Пароль <br> <input type= "password" name= "password" id= "password" class="enter" placeholder="Введите Пароль"></p>
                <p>Пароль <br> <input type= "password" name= "password_confirm" id= "password_confirm" class="enter" placeholder="Подтвердите Пароль"></p>
                <p ><input type= "submit" value="Зарегистрироваться" class="reg"></p>
                <p class = "msg"><?= $_SESSION['message']?></p>
                </form>
            </div>
        </blockquote>
        <blockquote class="navbutton">
            <a id= "registerbutton" href="register.html">Регистрация</a>
            <a id= "loginbutton" href="index.html">Авторизация</a>
        </blockquote>
    </body>
</html>