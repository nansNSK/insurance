<?php
	if ($_COOKIE['user'] == ''):
?>

<?php else:?>
	<? 
	require "blocks/connect.php";
	$result = mysqli_query($mysql, "SELECT * FROM `avto`"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Страхование авто</title>
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
	
		<h1>Страхование авто</h1>

		<form method = "post"> <input type = "text" name = "search" class = "search"><input type = "submit" name = "submit" class = "submit" value = "Поиск" id = "submit" onclick="viewDiv()"></form>
		<!--<div class = "hideth" id = "hideth">-->
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
						<th class = "invth"></th>
						<th class = "invth"></th>
					</tr>
		<!--</div>	-->
		
		<?php 
			if (isset($_POST['submit'])){
				$search = $_POST['search'];
				$query = mysqli_query($mysql, "SELECT `FIO`, `dataR`, `MestoProjiv`, `Passport`, `Num`, `stoimost`, `Data_strahovan`, `Sroc_strahovan`, `Auto_M_M_Y`, `GosNomerAvto`, `Voditel_Udostv`, `Viplaty` FROM `clients` WHERE `FIO` LIKE '%$search%' OR 
				`dataR` LIKE '%$search%' OR `MestoProjiv` LIKE '%$search%' OR `Passport` LIKE '%$search%' OR `Num` LIKE '%$search%' OR `stoimost` LIKE '%$search%' OR `Data_strahovan` LIKE '%$search%' OR `Sroc_strahovan` LIKE '%$search%' OR `Auto_M_M_Y` LIKE '%$search%' OR `GosNomerAvto` LIKE '%$search%' OR `Voditel_Udostv` LIKE '%$search%' OR `Viplaty` LIKE '%$search%'");
				while ($row = mysqli_fetch_assoc($query)) echo "<tr><td>".$row ['FIO']."</td><td>".$row ['dataR']."</td><td>".$row ['MestoProjiv']."</td><td>".$row ['Passport']."</td><td>".$row ['Num']."</td><td>".$row ['stoimost']."</td><td>".$row ['Data_strahovan']."</td><td>".$row ['Sroc_strahovan']."</td><td>".$row ['Auto_M_M_Y']."</td><td>".$row ['GosNomerAvto']."</td><td>".$row ['Voditel_Udostv']."</td><td>".$row ['Viplaty']."</td></tr>";
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
						<th> ID Страхования - 1</th>
					</tr>
		<?php 
			$avto = mysqli_query($mysql, "SELECT * FROM `avto`");
			$avto = mysqli_fetch_all($avto);
			foreach ($avto as $avto) {
			?>

					<tr>
						<td><?= $avto[0] ?></td>
						<td><?= $avto[1] ?></td>
					</tr>
					
			<?php
			}
		?>
	</div>
	<div class = "tablebox">
				</table>
				<table>
					<thead>
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
						<th> Марка\Модель\Год </th>
						<th> Госномер авто </th>
						<th> Водительское удостоверение </th>
						<th> Выплаты </th>
						
					</tr>
		</thead>
		<?php
			/* https://www.youtube.com/watch?v=GDVWdYZLM7w&ab_channel=AreaWeb-%D0%B2%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%D0%B4%D0%BB%D1%8F%D0%B1%D0%BB%D0%BE%D0%BD%D0%B4%D0%B8%D0%BD%D0%BE%D0%BA */
			require "blocks/connect.php";
			$avto = mysqli_query($mysql, "SELECT `clients`.`ID_clients`, `clients`.`FIO`, `avto`.`avto`, `clients`.`dataR`, `clients`.`MestoProjiv`, `clients`.`Passport`, `clients`.`Num`, `clients`.`stoimost`, `clients`.`Data_strahovan`, `clients`.`Sroc_strahovan`, `clients`.`Auto_M_M_Y`, `clients`.`GosNomerAvto`, `clients`.`Voditel_Udostv`, `clients`.`Viplaty` FROM `avto` JOIN `clients` WHERE `ID_strahovanie` = 1 AND `ID_podrazdel` = `ID_avto`");
			$avto = mysqli_fetch_all($avto);
			foreach ($avto as $avto) {
			?>
				<td><a href = "update.php?ID_clients=<?= $avto[0] ?>"><img src = "pic/update.png" alt = "обновление" title="обновить" width="32" height="32"></td>
				<td><a href = "delete.php?ID_clients=<?= $avto[0] ?>"><img src = "pic/delete.png" alt = "удалить" title="удалить" width="32" height="32"></td>
				<td><?= $avto[0] ?></td>
				<td><?= $avto[1] ?></td>
				<td><?= $avto[2] ?></td>
				<td><?= $avto[3] ?></td>
				<td><?= $avto[4] ?></td>
				<td><?= $avto[5] ?></td>
				<td><?= $avto[6] ?></td>
				<td><?= $avto[7] ?></td>
				<td><?= $avto[8] ?></td>
				<td><?= $avto[9] ?></td>
				<td><?= $avto[10] ?></td>
				<td><?= $avto[11] ?></td>
				<td><?= $avto[12] ?></td>
				<td><?= $avto[13] ?></td>

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
		<form action = "create.php" method = "post">
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
		<input type = "text" name = "ID_strahovanie" class = "input" placeholder="ID страхования авто - 1">
		<p class = "formtext">ID подраздела</p>
		<input type = "text" name = "ID_podrazdel" class = "input" placeholder="ОСАГО - 1 | КАСКО - 2 | Зеленая карта - 3">
		<p class = "formtext">Стоимость</p>
		<input type = "text" name = "stoimost" class = "input" placeholder="0 Руб.">
		<p class = "formtext">Дата страхования</p>
		<input type = "date" name = "Data_strahovan" class = "input">
		<p class = "formtext">Срок страхования</p>
		<input type = "text" name = "Sroc_strahovan" class = "input" placeholder="Срок страхования">
		<p class = "formtext">Марка\Модель\Год</p>
		<input type = "text" name = "Auto_M_M_Y" class = "input" placeholder="Марка Модель Год">
		<p class = "formtext">Госномер авто</p>
		<input type = "text" name = "GosNomerAvto" class = "input" placeholder="A 000 AA 00">
		<p class = "formtext">Водительское удостоверение</p>
		<input type = "text" name = "Voditel_Udostv" class = "input" placeholder="_ _ _ _    _ _ _ _ _ _  0000-00-00">
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
<!--		<script>

		function viewDiv(){
  		
			document.getElementById("hideth").style.display = "block";
		};
		</script>	-->

</html>

<?php endif;?>