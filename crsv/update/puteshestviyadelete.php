<?php
    require "../blocks/connect.php";

    $ID_clients = $_GET['ID_clients'];
    mysqli_query($mysql, "DELETE FROM `clients` WHERE `clients`.`ID_clients` = '$ID_clients'");
    header('location: ../puteshestviya.php');
?>