<?php
    if ($_COOKIE['user'] ==  ''):
?>
<?php else:?>
    <!DOCTYPE html>
    <html>
<head>
    <meta charset="UTF-8">
    <title>Информация</title>
     <link rel="stylesheet" href="MainStyle.css">
</head>
<body id= "mainWin">
<header class="topmain">
	<a href = "main.php" class = "logo">
		<img src = "pic/fss.svg" alt = "фсс" width="156" height="143">
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
        <p id="hello" class= "hello"> <?=$_COOKIE['user']?><a href="validationform/exit.php" class ="exitbutton" id="exit">Выход</a></p>
		
</header>
	<hr></hr>
<div class = "dopMainText">

    <div class = "maintext">
        <div class = "tablebox">
        </div>
    <p>ГРАФИК РАБОТЫ     ПН-ЧТ 8.30-17.30; ПТ 8.30-16.30; Перерыв 12.00-12.48</p>
    <p>ГОРЯЧАЯ ЛИНИЯ:<br>
    <br>
    - по вопросам назначения пособий по временной нетрудоспособности и в связи с материнством – (4752) 577-010<br>
    - по вопросам обеспечения ТСР и ПОИ – (4752) 577-011<br>
    - по вопросам обеспечения санаторно-курортным лечением – (4752) 577-019<br>
    - по вопросам предоставления государственных услуг – (4752) 577-020<br>
    <br>
    ТЕЛЕФОНЫ ДЛЯ СПРАВОК:<br>
    <br>
    - по вопросам назначения пособий по временной нетрудоспособности и в связи с материнством – (4752) 577-026<br>
    (4752) 577-035<br>
    (4752) 577-045<br>
    - по вопросам компенсации за самостоятельно приобретенные ТСР и ПОИ – (4752) 577-022<br>
    - приемная – (4752) 577-020</p>
    </div>
</div>
    <div class = "dopMainText">
        <div>
        <a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn"><img src = "pic/icon.svg" alt = "приложение" width="90" height="90" class = "icon"></a>
        </div>
        <div>
            <p class = "dopMainApp1">Мобильное приложение</p>
            <p class = "dopMainApp2"><a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn">Социальный навигатор</a></p>  
        </div>   
        <!--<div class = "adpicbox">
        <a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn"><img src = "pic/adapp1.webp" alt = "Приложение 1" width="267" height="578" class = "apppic"></a>
        <a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn"><img src = "pic/adapp2.webp" alt = "Приложение 2" width="267" height="578" class = "apppic"></a>
        <a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn"><img src = "pic/adapp3.webp" alt = "Приложение 3" width="267" height="578" class = "apppic"></a>
        <a href= "https://play.google.com/store/apps/details?id=org.devlee.android.csn"><img src = "pic/adapp4.webp" alt = "Приложение 4" width="267" height="578" class = "apppic"></a>
        </div>-->
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
</html>
<?php endif;?>