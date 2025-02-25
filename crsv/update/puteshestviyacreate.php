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
$Strahovan_Dop = $_POST['Strahovan_Dop'];
$Daty_Puteshestvii = $_POST['Daty_Puteshestvii'];
$Strana_Putesh = $_POST['Strana_Putesh'];
$Viplaty = $_POST['Viplaty'];

mysqli_query($mysql, "INSERT INTO `clients` (`ID_clients`, `FIO`, `dataR`, `MestoProjiv`, `Passport`, `Num`, `ID_strahovanie`, `ID_podrazdel`, `stoimost`, `Data_strahovan`, `Sroc_strahovan`, `Strahovan_Dop`, `Daty_Puteshestvii`, `Strana_Putesh`, `Viplaty`, `Auto_M_M_Y`, `GosNomerAvto`, `Voditel_Udostv`, `Ploshad_GodPostr`, `Kreditor_Kredit`) VALUES (NULL, '$FIO', '$dataR', '$MestoProjiv', '$Passport', '$Num', '$ID_strahovanie', '$ID_podrazdel', '$stoimost', '$Data_strahovan', '$Sroc_strahovan', '$Strahovan_Dop', '$Daty_Puteshestvii', '$Strana_Putesh', '$Viplaty', '', '', '', '', '')");
header('location: ../puteshestviya.php');
?>