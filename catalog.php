<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Styles/SCatalog.css">
	<script src="Controllers/CEnter.js "></script>
	<script src="Controllers/CCatalog.js "></script>
	<title>Каталог</title>
</head>

<body onload="user_table()">

	<div class="product_open" id="product_js">
		<div class="two" style="position: fixed; inset: 0; margin: auto; width: 780px; height: 616px;">
			<div class="product_card" id="product_card">
				<img width="350" src="IMG/Каталог/к-з 2 гранат.jpeg">
				<div class="text" style="grid-area: s;position: absolute; align-self: start; font-size: 20px;">Выбор размера:</div>
				<div style="grid-area:s; display: flex; flex-wrap: wrap; margin-top: 30px;">
					<div onclick="size_select(this)" class="size">16</div>
					<div onclick="size_select(this)" class="size">16.5</div>
					<div onclick="size_select(this)" class="size">17</div>
					<div onclick="size_select(this)" class="size">17.5</div>
					<div onclick="size_select(this)" class="size">18</div>
					<div onclick="size_select(this)" class="size">18.5</div>
					<div onclick="size_select(this)" class="size">19</div>
					<div onclick="size_select(this)" class="size">20</div>
					<div onclick="size_select(this)" class="size">20.5</div>
					<div onclick="size_select(this)" class="size">21</div>
					<div onclick="size_select(this)" class="size">22</div>
				</div>
				<div style="grid-area: t1; align-self: center; justify-self: start; font-size: 14px;">
					<p style="margin: 0; font-weight: bold; font-size: 30px;">Кольцо из золота с гранатом<br></p>
				</div>
				<p style="grid-area: sl; letter-spacing: 2px; align-self: center; margin: 0; font-weight: regular; font-size: 20px;">Изысканное золотое кольцо 585 пробы с красным гранатом. <br> Вес - 1.4 г. Элегантность и стиль в каждой детали.  Подчеркните свою <br> утонченность с этим уникальным украшением. <br> #ювелир #стиль #красноезолото</p>
				<p style="grid-area: t2; margin: 0; font-weight: bold; font-size: 30px;">Цена: 8990 ₽</p>
				<button class="B" style="margin-left: 95px; grid-area: b; width: 250px; color:aliceblue; background-color: black;">Добавитьв корзину</button>
				<buttom id="favorite_id" onclick="favorite()" class="B" style="width: 70px; display: flex; justify-content: center; align-items: center; justify-self: start; grid-area: b;background-color: black;">
					<svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="path"
							d="M46.6173 39.8365L42.6265 40.7798C41.7315 40.9975 41.0301 41.6747 40.8366 42.5697L39.9901 46.1252C39.5305 48.0601 37.0634 48.6648 35.7815 47.141L28.5496 38.8207C27.9691 38.1434 28.2835 37.0792 29.1542 36.8615C33.4354 35.8215 37.2811 33.4269 40.111 30.0166C40.5706 29.4603 41.3929 29.3877 41.9008 29.8956L47.2704 35.2652C49.1086 37.1034 48.4556 39.4012 46.6173 39.8365Z"
							fill="white" />
						<path class="path"
							d="M1.74782 39.8365L5.73869 40.7798C6.63362 40.9975 7.33504 41.6747 7.52854 42.5697L8.37509 46.1252C8.83464 48.0601 11.3017 48.6648 12.5836 47.141L19.8156 38.8207C20.3961 38.1434 20.0817 37.0792 19.2109 36.8615C14.9298 35.8215 11.084 33.4269 8.25415 30.0166C7.7946 29.4603 6.97223 29.3877 6.4643 29.8956L1.09477 35.2652C-0.743454 37.1034 -0.0904024 39.4012 1.74782 39.8365Z"
							fill="white" />
						<path class="path"
							d="M24.244 0C14.8836 0 7.31299 7.57057 7.31299 16.931C7.31299 20.4381 8.35303 23.655 10.1429 26.3398C12.7551 30.2097 16.8911 32.9428 21.7043 33.6443C22.5267 33.7894 23.3732 33.862 24.244 33.862C25.1147 33.862 25.9613 33.7894 26.7836 33.6443C31.5968 32.9428 35.7328 30.2097 38.345 26.3398C40.1349 23.655 41.1749 20.4381 41.1749 16.931C41.1749 7.57057 33.6044 0 24.244 0ZM31.6452 16.3989L29.6377 18.4064C29.2991 18.745 29.1056 19.3981 29.2265 19.8818L29.807 22.3731C30.2666 24.3322 29.2265 25.1062 27.485 24.0662L25.0663 22.6391C24.631 22.3731 23.9053 22.3731 23.47 22.6391L21.0513 24.0662C19.3098 25.082 18.2697 24.3322 18.7293 22.3731L19.3098 19.8818C19.4065 19.4222 19.2372 18.745 18.8986 18.4064L16.8427 16.3989C15.6575 15.2137 16.0445 14.0285 17.6893 13.7625L20.2773 13.3271C20.7126 13.2545 21.2206 12.8675 21.4141 12.4805L22.8411 9.62647C23.6151 8.07849 24.8728 8.07849 25.6468 9.62647L27.0739 12.4805C27.2674 12.8675 27.7753 13.2545 28.2348 13.3271L30.8229 13.7625C32.4434 14.0285 32.8304 15.2137 31.6452 16.3989Z"
							fill="white" />
					</svg>
				</buttom>
			</div>

			<a onclick="Catalog_back()" class="back">
				<svg width="25" height="40" viewBox="0 0 28 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="shit" d="M25 47L3 25L25 3" stroke="black" stroke-width="5.08" stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</a>
		</div>
	</div>



	<div class="Header">
		<a href="index.php" style="grid-area: a; justify-self: center"> <img src="IMG/Каталог/Logo.svg"> </a>
		<div style="grid-area: b;" class="gorizontal">
			<a href="catalog.php" style="background-color: #FF4B4B; color: aliceblue;"> Каталог</a>
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
				<td align="left"><a class = "buttom" style="width: 20px; background: #D9D9D9;" onclick="enter(1)">Вход</a> </td>					
				<td align="right"><a class="buttom" style="width: 80px; background: #FF4B4B; color: aliceblue;"
							href="registration.php">Регистрация</a> </td>
				</tr>
			</table>
		</div>
		<div id="circle_ac_table" class="AC_Circle" style="grid-area: c;">
			<img onclick="enter(2)" width="120px" style="cursor: pointer; pointer-events: auto; grid-area: b"
				src="IMG/🦆 icon _User Circle_.svg">
			<img style="margin: 0px; grid-area: a; align-self: end;" src="IMG/🦆 icon _shopping basket_.svg">
			<div id = "input_con" style = " align-self: start;"></div>
			<img onclick="exit()" style="grid-area: d; align-self: center; cursor: pointer; pointer-events: auto;" src="IMG/exit.svg">
		</div>
	</div>
	<div class="Table">
		<div style="grid-area: d;">
			<div id="filter_js"
				style="position: sticky; top: 86.5%; width: 250px; height: 120px; background-color: #ffffff;">
				<button class="B" style="left: 5px; color: aliceblue; background-color: black;">Применить
					фильтр</button>
				<button class="B" style="left: 5px;">Сбросить фильтр</button>
			</div>
		</div>
		<div
			style="grid-area: d; width: 100px; height: 98%;background-color: #FF4B4B; align-self: start; justify-self: start; margin-top: 7px;">
		</div>



		<div id="search_bar" class="search_bar" style="grid-area: f;">
			<input id="search" placeholder="Поиск" style="height: 45px; border: 1px solid black; width: 80%">
			<button onclick="Search_by_name()" class="B"
				style="margin-top: 0px; width: 80px; border: 1px solid grey;">Найти</button>
		</div>


		<div style="grid-area: f; height: 50px; align-self: start; justify-self: start; padding: 20px;">
			<select
				style="margin: 10px; width: 225px; height: 45px; border-radius: 10px; font-family: Arial; font-weight: bold; font-size: 20px; text-align: center;">
				<option style="border-radius: 10px;">По популярности</option>
				<option style="border-radius: 10px;">По возрастанию цены</option>
				<option style="border-radius: 10px;">По убыванию цены</option>
			</select>
		</div>
		<div id="container" class="container" style="grid-area: e;">
			<?php
			$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
			if (!$conn) {
				die("Ошибка: " . mysqli_connect_error());
			}
			$sql = "SELECT * FROM Product";
			if ($result = mysqli_query($conn, $sql)) {
				foreach ($result as $row) {
					echo "<div class='product'>";
					echo "<div onclick='Open_product(" . $row["id"] . ")' style='cursor: pointer; grid-area: a;'>";
					echo "<img width='200' src='IMG/Каталог/" . $row["img"] . "'>";
					echo "</div>";
					echo "<div onclick='Open_product(" . $row["id"] . ")' style='cursor: pointer; grid-area: c; align-self: start; justify-self: start; margin: 15px; font-size: 14px;'>";
					echo "<p style='font-weight: bold;'>" . $row["label"] . "<br></p>";
					echo "<p style='color:#555555;'>" . $row["description"] . "</p>";
					echo "</div>";
					echo "<div style='grid-area: b;'>" . $row["price"] . " ₽" . "</div>";
					echo "<button onclick = 'AddToBasket(" . $row["id"] . ")' class='B' style='grid-area: d; margin: 0px; width: 85%; color:aliceblue; background-color: black;'>";
					echo "Добавить в корзину";
					echo "</button>";
					echo "</div>";
				}
				mysqli_free_result($result);
			} else {
				echo "Ошибка: " . mysqli_error($conn);
			}
			mysqli_close($conn);
			?>
		</div>
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