<html>
<head>
	<title>DIAMANT jewerlyshop</title>
	<script src="Controllers/CEnter.js "></script>
	<script src="Controllers/CIndex.js "></script>
	<link rel = "stylesheet" href="Styles/SIndex.css">
	<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
</head>
<body onload = "user_table()">
	<div class ="Header">
		<a href="index.php" style="grid-area: a; justify-self: center"> <img src="IMG/Каталог/Logo.svg"> </a>
		<div style ="grid-area: b;" class = "gorizontal">
			<a href="catalog.php"> Каталог</a> 
			<a href="catalog.php"> Акции</a>
			<a href="brand.php"> О Бренде</a>
			<a href="franchise.php"> Франшиза</a>
		</div>
		<div id="ac_form" style="grid-area: c; display: none;">
			<table cellpadding="3" cellspacing="5">
				<tr>
					<td colspan="2"><input class="in" type="text" name="usemail" value="nekitsev2002@gmail.com"></td>
				</tr>
				<tr>
					<td colspan="2"><input class="in" type="password" name="passw" value="1234a"></td>
				</tr>
				<tr>
					<td align="left"><button onclick="enter(1)" class="B">Вход</button> </td>
					<td align="right"><a class="buttom" style="width: 80px; background: #FF4B4B; color: aliceblue;"
							href="registration.php">Регистрация</a> </td>
				</tr>
			</table>
		</div>
		<div id="circle_ac_table" class="AC_Circle" style="grid-area: c;  display: none">
			<img onclick="enter(2)" width="120px" style="cursor: pointer; pointer-events: auto; grid-area: b"
				src="IMG/🦆 icon _User Circle_.svg">
			<img style="margin: 0px; grid-area: a; align-self: end;" src="IMG/🦆 icon _shopping basket_.svg">
			<div id = "input_con" style = "grid-area: c; align-self: start;"></div>
			<img onclick="exit()" style="grid-area: d; align-self: center; cursor: pointer; pointer-events: auto;" src="IMG/exit.svg">
		</div>
	</div>
<table border="0" width = "100%" cellpadding="0" style="font-family: Arial;">
<tr>
	<td class = "posters" width="190">
		<img width = "300" style = "box-shadow: none; left: -150px; top: 150px; position: absolute;" src="IMG/Reg/🦆 2 icon _diamond_.svg">
		<img width = "300" style = "box-shadow: none; left: -125px; top: 950px; position: absolute; z-index: 0;" src="IMG/Trash/shop.svg">
	</td>
	<td class = "MainInfo">
		<BR><BR>
		<img width = "500px"src="IMG/Trash/Diamant.svg">
		<div style = "width: 95%; border-radius: 10px; padding: 10px; font-size: 20px; line-height: 1.5;">
			<h1>Добро пожаловать в мир истинной роскоши и вечной красоты – мир Diamant.</h1>
            <p style="letter-spacing: 2px;">Мы приглашаем вас в уникальное путешествие, где каждый драгоценный камень, каждое украшение и каждый дизайн созданы с любовью и мастерством, чтобы подчеркнуть вашу неповторимость.</p>
        </div>
		</div>

		<H1 align="left" style = "margin-left: 5px; font-size: 52px;">Наши магазины</H1>

		<div id ="map" align = "center" style=" width: 800px; padding: 20px; border: 10px solid #FF4B4B; margin-left: auto; margin-right: auto;">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aea4839e7ac32bda0fa9930f63c59e7b995b89fff085ffa64264059a6a92c5308&amp;width=800&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
		<br><br>


	<div style="display: grid; position: relative; width: 100%; height: auto; margin: 20 0 20 0;">
        <div id = "Franchise" style="justify-self: center;">
            <div style="text-align: center; grid-area: Text" class = "text">
                <p style="font-size: 40px; font-weight: bold; color: #FF4B4B">Остались вопросы? Напишите нам:</p>
            </div>
            <div style="justify-self: center; align-self: start; margin: 0 10px 0 0; grid-area: Inputs1">
                <div class = "input">
                    <div> Имя*:</div> 
                    <input class = "in2" type="text" name = "username" value = "">
                </div>
                <div class = "input">
                    <div>  Телефон:</div> 
                    <input class = "in2" type="tel" name = "useremail" value = "">
                </div>
                <div class = "input" style="margin-bottom: 10px;">
                    <div>  Email*:</div> 
                    <input class = "in2" type="email" name = "usertel" value = "">
                </div>
                <div class = "inputcheck">
                    <input id = "checkbox" type="checkbox" name = "approved" value = "">
                    <label class = "text" for="approved" style="font-size: 16px; font-weight: bold; margin-top: 10px;">Даю согласие на обработку персональных данных</label>
                </div>
            </div>
			<div style="justify-self: center; align-self: start; grid-area: Inputs2">
				<div class = "input" style="height: 360px; align-items: start; flex-direction: column;">
                    <div style="margin: 15 0 10 0;"> Ваш вопрос:</div> 
                    <textarea class = "in2" type="text" value = ""></textarea>
                </div>
			</div>
			<div style="justify-self: center; grid-area: buttom;">
                <button onclick="review()" class = "B2">Отправить</button>
            </div>
        </div>
        <img  src="IMG/Фончик 3.png" style="border-radius: 10px; justify-self: center; box-shadow: 0px 0px 3px 3px rgba(0, 0, 0, 0.25);  ">
    </div>


	<br><br>
		<div style = "margin: 20px; width: 600px; border: 2px solid black; border-radius: 10px; padding: 10px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); font-size: 18px; margin-left: auto; margin-right: auto;">
			<table cellpadding="15" cellspacing="0" style="font-family: Arial; font-size: 18px; margin: 0 auto;">
				<tr style="font-weight: bold;">
					<td>Номера кол-центров</td>
					<td><a href="#">Покупателям</a></td>
					<td><a href="#">О Компании</a></td>
				</tr>
				<tr>
					<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
					<td><a href="#">Возврат и обмен</a></td>
					<td><a href="franchise.php">Франшиза</a></td>
				</tr>
				<tr>
					<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
					<td><a href="#">Проверка подлинности</a></td>
					<td><a href="brand.html">О бренде</a></td>
				</tr>
				<tr>
					<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
					<td><a href="#">Доставка и оплата</a></td>
					<td><a href="#">Наши магазины</a></td>
				</tr>
			</table>
			<img width = "200" style = "box-shadow: none;position: absolute; margin-left: -300px; margin-top: -200px; z-index: 0;" src="IMG/Trash/🦆 icon _contacts_.svg">
		</div>
	</td>
	<td class = "Posters" width="230px" style="vertical-align:top;">
		<div class = "Poster">
			<img width="200px" src="IMG/Trash/благовест.jpeg" style="border-radius: 10px;">
			<a href="catalog.php">Благовест</a>
		</div>
		<div class = "Poster">
			<img width="200px" src="IMG/Trash/главная-меню.jpeg" style="border-radius: 10px;">
			<a href="catalog.php">Sokolov</a>
		</div>
		<div class = "Poster">
			<img width="200px" src="IMG/Trash/главная-меню--арт-изменённая.jpeg" style="border-radius: 10px;">
			<a href="catalog.php">Art</a>
		</div>
		<div class = "Poster" style="height: 90px;">
			<a href="catalog.php" class="buttom" style = "padding: 10 20 10 20; background-color: black;color: aliceblue;">Смотреть украшения</a>
		</div>
	</td>
</tr>
</table>
<div align = "center" style="line-height: 50px;height: 50px; width: 100%; background-color: #FF4B4B; color: aliceblue; font-family: Arial; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">© Все права защищены</div>
</body>
</html>