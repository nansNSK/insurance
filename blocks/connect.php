<?php
    $mysql = new mysqli('localhost', 'root', 'root', 'fondssrf');
    if ($mysql == false) {
        echo "Ошибка подключения, попробуйте заново";
    }
?>