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
    $Ploshad_GodPostr = $_POST['Ploshad_GodPostr'];
    $Strahovan_Dop = $_POST['Strahovan_Dop'];
    $Kreditor_Kredit = $_POST['Kreditor_Kredit'];
    $Viplaty = $_POST['Viplaty'];

    mysqli_query($mysql, "UPDATE `clients` SET `FIO` = '$FIO', `dataR` = '$dataR', `MestoProjiv` = '$MestoProjiv', `Passport` = '$Passport', `Num` = '$Num', `ID_strahovanie` = '$ID_strahovanie', `ID_podrazdel` = '$ID_podrazdel', `stoimost` = '$stoimost', `Data_strahovan` = '$Data_strahovan', `Sroc_strahovan` = '$Sroc_strahovan', `Ploshad_GodPostr` = '$Ploshad_GodPostr', `Strahovan_Dop` = '$Strahovan_Dop', `Kreditor_Kredit` = '$Kreditor_Kredit', `Viplaty` = '$Viplaty' WHERE `clients`.`ID_clients` = '$ID_clients'");
    header('location: ../imushestvo.php');
?>