<?php
    require "../blocks/connect.php";
    $ID_clients = $_POST['ID_clients'];
    $FIO = $_POST['FIO'];
    $dataR = $_POST['dataR'];
    $MestoProjiv = $_POST['MestoProjiv'];
    $Passport = $_POST['Passport'];
    $Num = $_POST['Num'];
    $ID_strahovanie = $_POST['ID_strahovanie'];
    $ID_podrazdel = $_POST['ID_podrazdel'];
    $stoimost = $_POST['stoimost'];
    $Data_strahovan = $_POST['Data_strahovan'];
    $Sroc_strahovan = $_POST['Sroc_strahovan'];
    $Strahovan_Dop = $_POST['Strahovan_Dop'];
    $Daty_Puteshestvii = $_POST['Daty_Puteshestvii'];
    $Strana_Putesh = $_POST['Strana_Putesh'];
    $Viplaty = $_POST['Viplaty'];

    mysqli_query($mysql, "UPDATE `clients` SET `FIO` = '$FIO', `dataR` = '$dataR', `MestoProjiv` = '$MestoProjiv', `Passport` = '$Passport', `Num` = '$Num', `ID_strahovanie` = '$ID_strahovanie', `ID_podrazdel` = '$ID_podrazdel', `stoimost` = '$stoimost', `Data_strahovan` = '$Data_strahovan', `Sroc_strahovan` = '$Sroc_strahovan', `Strahovan_Dop` = '$Strahovan_Dop', `Daty_Puteshestvii` = '$Daty_Puteshestvii', `Strana_Putesh` = '$Strana_Putesh', `Viplaty` = '$Viplaty' WHERE `clients`.`ID_clients` = '$ID_clients'");
    header('location: ../puteshestviya.php');
?>