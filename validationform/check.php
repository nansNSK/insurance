<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    if(mb_strlen($name) < 2 || mb_strlen($name) > 16){
        echo "<script>alert(\"Недопустимая длина имени\");</script>";
        exit();
        
    }
    else if (mb_strlen($login) < 4 || mb_strlen($login) > 16){
        echo "<script>alert(\"Недопустимая длина логина\");</script>";
        exit();
        
    }
    else if (mb_strlen($password) < 4 || mb_strlen($password) > 20){
        echo "<script>alert(\"Недопустимая длина пароля\");</script>";
        exit();
        
    }
    $password = md5($password. "moon");
    require "../blocks/connect.php";
    $mysql->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES('$name', '$login', '$password')");
    $mysql->close();
    header('Location: /crsv/');
?>