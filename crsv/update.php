<?php
    require "blocks/connect.php";
    
    $ID_clients = $_GET['ID_clients'];
    $client = mysqli_query($mysql, "SELECT * FROM `clients` WHERE `ID_clients` = '$ID_clients'");
    $client = mysqli_fetch_assoc($client);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>обновление строки</title>
	<link rel="stylesheet" href="MainStyle.css">
<body id="mainWin">
<div class = "tablebox">
    <div class = "tablebox">
    </div>
		<form action = "updatescript.php" method = "post">
        <input type = "hidden" name = "ID_clients" value = "<?= $client['ID_clients']?>">
		<p class = "formtext">ФИО</p>
		<input type = "text" name = "FIO" class = "input" value = "<?= $client['FIO']?>">
		<p class = "formtext">Дата рождения</p>
		<input type = "date" name = "dataR" class = "input" value = "<?= $client['dataR']?>">
		<p class = "formtext">Адрес проживания</p>
		<input type = "text" name = "MestoProjiv" class = "input" value = "<?= $client['MestoProjiv']?>">
		<p class = "formtext">Номер паспорта</p>
		<input type = "text" name = "Passport" class = "input" value = "<?= $client['Passport']?>">
		<p class = "formtext">Телефон</p>
		<input type = "text" name = "Num" class = "input" value = "<?= $client['Num']?>">
		<p class = "formtext">ID страхования</p>
		<input type = "text" name = "ID_strahovanie" class = "input" value = "<?= $client['ID_strahovanie']?>">
		<p class = "formtext">ID подраздела</p>
		<input type = "text" name = "ID_podrazdel" class = "input" value = "<?= $client['ID_podrazdel']?>">
		<p class = "formtext">Стоимость</p>
		<input type = "text" name = "stoimost" class = "input" value = "<?= $client['stoimost']?>">
		<p class = "formtext">Дата страхования</p>
		<input type = "date" name = "Data_strahovan" class = "input" value = "<?= $client['Data_strahovan']?>">
		<p class = "formtext">Срок страхования</p>
		<input type = "text" name = "Sroc_strahovan" class = "input" value = "<?= $client['Sroc_strahovan']?>">
		<p class = "formtext">Марка Модель Год</p>
		<input type = "text" name = "Auto_M_M_Y" class = "input" value = "<?= $client['Auto_M_M_Y']?>">
		<p class = "formtext">Госномер авто</p>
		<input type = "text" name = "GosNomerAvto" class = "input" value = "<?= $client['GosNomerAvto']?>">
		<p class = "formtext">Водительское удостоверение</p>
		<input type = "text" name = "Voditel_Udostv" class = "input" value = "<?= $client['Voditel_Udostv']?>">
		<p class = "formtext">Выплаты</p>
		<input type = "text" name = "Viplaty" class = "input" value = "<?= $client['Viplaty']?>"><br>
		<button type = "submit" class="button" >Обновить</button>

		</form>
		</div>
</body>
			
</html>