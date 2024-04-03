<html>
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="Styles/SAccount.css">
	<script src="Controllers/CAccount.js "></script>
	<title>Аккаунт</title>
	<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
</head>
<body onload = "update_user()">
	<div class = "AC_greed">
		<div style="grid-area: a; display: flex; align-items: center; justify-content: center;">
			<img src = "IMG/🦆 icon _medal star_.svg">
		</div>
		<div class="two" style="grid-area: b; height: 280px; width: 435px; border-radius: 0px 0px 20px 20px; background: #FF4B4B; display: grid;">
			<img src="IMG/AC.svg" style="align-self: center; justify-self: center;">
			<a href="index.php" class="back" style="position: absolute; align-self: start;">
				<svg width="25" height="27" viewBox="0 0 28 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="shit" d="M25 47L3 25L25 3" stroke="white" stroke-width="5.08" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</a>
		</div>
		<div style="grid-area: c; display: flex; align-items: center; justify-content: center;">
				<img src = "IMG/Vector.svg">
		</div>
	</div>
	<div class ="Main">
		<div style="grid-area: b2; padding-top: 10px;">
			<div class="UserCard">
				<div id = "NikName" style="grid-area: NikName;
					color: black;
					text-align: center;
					font-family: Arial;
					font-size: 52px; 
					font-weight: 700; align-self: center;">
				</div>
				<form  id = "forma" action="" style="grid-area: Card; justify-self: center;">
					<div class = "input">
						<div> Ваше имя:</div> 
						<input class = "in" type="text" name = "username" value = "" readonly>
					</div>
					<div id = "redcode" class = "input">
						<div>  Email:</div> 
						<input class = "in" type="email" name = "useremail" value = "" readonly>
					</div>
					<div class = "input">
						<div>  Телефон:</div> 
						<input class = "in" type="tel" name = "usertel" value = "" readonly>
					</div>
					<div class = "input">
						<div>  Дата рождения:</div> 
						<input class = "in" type="date" name = "userbtdate" value = "" readonly>
					</div>
				</form>
				<div id = "edit_b" onclick="edit()" style="grid-area: Bottom;justify-self: center; display: block;">
					<div style="grid-area: Bottom;"><button class = "B" style="color:white; background-color: black;">Редактировать</button> </div>
				</div>
				<div id = "save_b" onclick="save()" style="grid-area: Bottom;justify-self: center; display: none;">
					<div style="grid-area: Bottom;"><button class = "B" style="color:white; background-color: black;">Сохранить</button> </div>
				</div>
			</div>
		</div>

		<div id = "cost_and_payment" style = "margin-left: 20px; justify-self: start; grid-area: c2; position: sticky; z-index: 3; top: 91%; width: 100%; height: 60px; background-color: black;
		display: flex; justify-content: start; align-items: center; border-radius: 10px 0px 0px 10px;">
				<div class = "text" style = "margin: 0 70px 0 20px;">Общая стоимость: 20000 ₽</div>
				<button class="B" style="left: 5px; width: 120px; margin: 0;">Оплатить</button>
		</div>
		<div class = "container" style = "grid-area: c2;" id = 'basket'></div>
	</div>

	<div class="Hooter">
		<table cellpadding="15" cellspacing="0" style="grid-area: a; font-family: Arial; font-size: 18px;">
			<tr style="font-weight: bold;">
				<td>Номера кол-центров</td>
				<td><a href="#">Покупателям</a></td>
				<td><a href="#">О Компании</a></td>
			</tr>
			<tr>
				<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
				<td><a href="#">Возврат и обмен</a></td>
				<td><a href="franchise.html">Франшиза</a></td>
			</tr>
			<tr>
				<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
				<td><a href="#">Проверка подлинности</a></td>
				<td><a href="brand.html">О бренде</a></td>
			</tr>
			<tr>
				<td><a href="tel:+72342342343">+7 (234) 234 23 43</a></td>
				<td><a href="#">Доставка и оплата</a></td>
				<td><a
						href="http://127.0.0.1:5500/index.php#:~:text=%D0%BF%D0%BE%20%D0%BE%D1%81%D0%BE%D0%B1%D0%BE%D0%BC%D1%83%20%D1%81%D0%BB%D1%83%D1%87%D0%B0%D1%8E.-,%D0%9D%D0%B0%D1%88%D0%B8%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D1%8B,-%D0%9D%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%20%D0%BA%D0%BE%D0%BB%2D%D1%86%D0%B5%D0%BD%D1%82%D1%80%D0%BE%D0%B2">Наши
						магазины</a></td>
			</tr>
		</table>
	</div>
	<div align="center"
		style="grid-area: b; line-height: 50px;height: 50px; width: 100%; background-color: #FF4B4B; color: aliceblue; font-family: Arial; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
		© Все права защищены</div>
</body>	
</html>