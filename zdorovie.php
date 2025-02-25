<?php
	if ($_COOKIE['user'] == ''):
?>

<?php else:?>
	<? 
	require "blocks/connect.php";
	$result = mysqli_query($mysql, "SELECT * FROM `zdorovie`"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Страхование здоровья</title>
	<link rel="stylesheet" href="MainStyle.css">
<body id="mainWin">
<header class="topmain">
	<a href = "main.php" class = "logo">
		<img src = "pic/fss.svg" alt = "фсс" width="156" height="143" title="Главное меню">
	</a>
	
	<div class = "buttonWin">    
		<a class= "table" href= "avto.php"> Авто </a>
        <a class= "table" href= "imushestvo.php"> Имущество </a>
        <a class= "table" href= "pensiya.php"> Пенсия </a>
        <a class= "table" href= "puteshestviya.php"> Путешествия </a>
        <a class= "table" href= "zdorovie.php"> Здоровье </a><br>
	</div>
	<script>
                var warning = document.addEventListener('click', function (e) {
                var id = document.getElementById('exit');
                    if (e.target.closest('#exit') !== null) {
                    alert ('Вы выходите из сайта');    
                    }
                    
                });
                </script>
        <p id="hello" class= "hello"> <?=$_COOKIE['user']?>  <a href="validationform/exit.php" class ="exitbutton" id="exit">Выход</a></p>
		
</header>
	<hr></hr>
	<h1>Страхование здоровья</h1>

	<form method = "post"> <input type = "text" name = "search" class = "search"><input type = "submit" name = "submit" class = "submit" value = "Поиск"></form>
		<div class = "searchtext">
		<table>
		<tr>	
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
						<th class = "invth"></th>
					</tr>
		<?php 
			if (isset($_POST['submit'])){
				$search = $_POST['search'];
				$query = mysqli_query($mysql, "SELECT `FIO`, `dataR`, `MestoProjiv`, `Passport`, `Num`, `stoimost`, `Data_strahovan`, `Sroc_strahovan`, `Strahovan_Dop`, `Viplaty` FROM `clients` WHERE `FIO` LIKE '%$search%' OR 
				`dataR` LIKE '%$search%' OR `MestoProjiv` LIKE '%$search%' OR `Passport` LIKE '%$search%' OR `Num` LIKE '%$search%' OR `stoimost` LIKE '%$search%' OR `Data_strahovan` LIKE '%$search%' OR `Sroc_strahovan` LIKE '%$search%' OR `Strahovan_Dop` LIKE '%$search%' OR `Viplaty` LIKE '%$search%'");
				while ($row = mysqli_fetch_assoc($query)) echo "<tr><td>".$row ['FIO']."</td><td>".$row ['dataR']."</td><td>".$row ['MestoProjiv']."</td><td>".$row ['Passport']."</td><td>".$row ['Num']."</td><td>".$row ['stoimost']."</td><td>".$row ['Data_strahovan']."</td><td>".$row ['Sroc_strahovan']."</td><td>".$row ['Strahovan_Dop']."</td><td>".$row ['Viplaty']."</td></tr>";
			}
		?>
		</table>
		</div>

	<div id = "scrolltop"></div>
	<a href ="#scrollbottom" class = "scrollbottom" title = "Вниз">↓</a>

	<div class = "tablebox">
	<table>
					<tr>
						<th> ID </th>
						<th> Страхование </th>
						<th> ID Страхования - 5</th>
					</tr>
		<?php 
			$zdorovie = mysqli_query($mysql, "SELECT * FROM `zdorovie`");
			$zdorovie = mysqli_fetch_all($zdorovie);
			foreach ($zdorovie as $zdorovie) {
			?>

					<tr>
						<td><?= $zdorovie[0] ?></td>
						<td><?= $zdorovie[1] ?></td>
					</tr>
					
			<?php
			}
		?>
	</div>
	<div class = "tablebox">
				</table>
				<table>
					<tr>
						<th>  </th>
						<th>  </th>
						<th> ID </th>
						<th> ФИО </th>
						<th> Страхование </th>
						<th> Дата рождения </th>
						<th> Адрес проживания </th>
						<th> Данные паспорта </th>
						<th> Телефон </th>
						<th> Стоимость </th>
						<th> Дата страхования </th>
						<th> Срок страхования </th>
						<th> Дополнительное страхование </th>
						<th> Выплаты </th>
						
					</tr>
		<?php
			require "blocks/connect.php";
			$zdorovie = mysqli_query($mysql, "SELECT `clients`.`ID_clients`, `clients`.`FIO`, `zdorovie`.`zdorovie`, `clients`.`dataR`, `clients`.`MestoProjiv`, `clients`.`Passport`, `clients`.`Num`, `clients`.`stoimost`, `clients`.`Data_strahovan`, `clients`.`Sroc_strahovan`, `clients`.`Strahovan_Dop`, `clients`.`Viplaty` FROM `zdorovie` JOIN `clients` WHERE `ID_strahovanie` = 5 AND `ID_podrazdel` = `ID_zdorovie`");
			$zdorovie = mysqli_fetch_all($zdorovie);
			foreach ($zdorovie as $zdorovie) {
			?>
				<td><a href = "update/zdorovieupdate.php?ID_clients=<?= $zdorovie[0] ?>"><img src = "pic/update.png" alt = "обновление" title="обновить" width="32" height="32"></td>
				<td><a href = "update/zdoroviedelete.php?ID_clients=<?= $zdorovie[0] ?>"><img src = "pic/delete.png" alt = "удалить" title="удалить" width="32" height="32"></td>
				<td><?= $zdorovie[0] ?></td>
				<td><?= $zdorovie[1] ?></td>
				<td><?= $zdorovie[2] ?></td>
				<td><?= $zdorovie[3] ?></td>
				<td><?= $zdorovie[4] ?></td>
				<td><?= $zdorovie[5] ?></td>
				<td><?= $zdorovie[6] ?></td>
				<td><?= $zdorovie[7] ?></td>
				<td><?= $zdorovie[8] ?></td>
				<td><?= $zdorovie[9] ?></td>
				<td><?= $zdorovie[10] ?></td>
				<td><?= $zdorovie[11] ?></td>

				</tr>
				
			<?php
			}
		?>
				</table>
	</div>

	<div id = "scrollbottom"></div>
	<a href ="#scrolltop" class = "scrolltop" title = "Вверх">↑</a>

	<div class = "tablebox">
		<div class = "tablebox">
		</div>
		<form action = "update/zdoroviecreate.php" method = "post">
		<p class = "formtext">ФИО</p>
		<input type = "text" name = "FIO" class = "input" placeholder="Фамилия Имя Отчество">
		<p class = "formtext">Дата рождения</p>
		<input type = "date" name = "dataR" class = "input">
		<p class = "formtext">Адрес проживания</p>
		<input type = "text" name = "MestoProjiv" class = "input" placeholder="Район, Область, Улица, Дом, Почтовый индекс">
		<p class = "formtext">Данные паспорта</p>
		<input type = "text" name = "Passport" class = "input" placeholder="_ _ _ _    _ _ _ _ _ _ Выдан: 0000-00-00">
		<p class = "formtext">Телефон</p>
		<input type = "text" name = "Num" class = "input" placeholder="+7 (_ _ _) _ _ _ - _ _ - _ _">
		<p class = "formtext">ID страхования</p>
		<input type = "text" name = "ID_strahovanie" class = "input" placeholder="ID страхования здоровья - 5">
		<p class = "formtext">ID подраздела</p>
		<input type = "text" name = "ID_podrazdel" class = "input" placeholder="От несчастного случая - 1 | ДМС - 2 | ОМС - 3 | ПВН - 4 | ПБиР - 5 | ПУзР - 6">
		<p class = "formtext">Стоимость</p>
		<input type = "text" name = "stoimost" class = "input" placeholder="0 Руб.">
		<p class = "formtext">Дата страхования</p>
		<input type = "date" name = "Data_strahovan" class = "input">
		<p class = "formtext">Срок страхования</p>
		<input type = "text" name = "Sroc_strahovan" class = "input" placeholder="Срок страхования">
		<p class = "formtext">Дополнительное страхование</p>
		<input type = "text" name = "Strahovan_Dop" class = "input" placeholder="Дополнительное страхование">
		<p class = "formtext">Выплаты</p>
		<input type = "text" name = "Viplaty" class = "input" placeholder="0 Руб."><br>
		<button type = "submit" class="button" >Добавить</button>

		</form>
		</div>
		<div>		
	<hr></hr>
	<footer class = "footer">
    	<p class = "footerLogo">© ФСС РФ 2001 — 2022</p>
        <div > 
            <p class = "footerNum"> 8-800-6-000-000 </p>
            <p class = "footerData"> ЕДИНЫЙ КОНТАКТ-ЦЕНТР </p>
            <p class = "footerData"> ВЗАИМОДЕЙСТВИЯ С ГРАЖДАНАМИ </p>
            </div>
	<div class = "footerlink">
		<a href="https://vk.com/club187231695">
		<img src = "pic/vk.png" alt = "вк" width="48" height="48">
		</a>
		<a href="https://ok.ru/group/68862029004852">
		<img src = "pic/ok.png" alt = "одноклассники" width="48" height="48">
		</a>
		<a href="https://t.me/ro71fss">
		<img src = "pic/tg.png" alt = "телеграм" width="48" height="48">
		</a>
		</div>

	</footer>
</div>
</body>
<script>
const anchors = document.querySelectorAll('a[href^="#"]')

// Цикл по всем ссылкам
for(let anchor of anchors) {
  		anchor.addEventListener("click", function(e) {
    	e.preventDefault()
    	const goto = anchor.hasAttribute('href') ? anchor.getAttribute('href') : 'body'
    	document.querySelector(goto).scrollIntoView({
      	behavior: "smooth",
      	block: "start"
    	})
  		})
		}
		</script>	
</html>

<?php endif;?>