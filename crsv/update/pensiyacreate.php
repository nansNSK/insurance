<?php
require "../blocks/connect.php";
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
$Viplaty = $_POST['Viplaty'];

mysqli_query($mysql, "INSERT INTO `clients` (`ID_clients`, `FIO`, `dataR`, `MestoProjiv`, `Passport`, `Num`, `ID_strahovanie`, `ID_podrazdel`, `stoimost`, `Data_strahovan`, `Sroc_strahovan`, `Viplaty`, `Auto_M_M_Y`, `GosNomerAvto`, `Voditel_Udostv`, `Ploshad_GodPostr`, `Strahovan_Dop`, `Kreditor_Kredit`, `Daty_Puteshestvii`, `Strana_Putesh`) VALUES (NULL, '$FIO', '$dataR', '$MestoProjiv', '$Passport', '$Num', '$ID_strahovanie', '$ID_podrazdel', '$stoimost', '$Data_strahovan', '$Sroc_strahovan', '$Viplaty', '', '', '', '', '', '', '', '')");
header('location: ../pensiya.php');
?>