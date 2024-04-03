<html>
<head>
    <meta charset="UTF-8">
	<title>О Бренде</title>
    <link rel = "stylesheet" href="Styles/SBrand.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Controllers/CEnter.js "></script>
</head>
<body onload ="user_table()">
    <div class ="Header">
		<a href="index.php" style="grid-area: a; justify-self: center"> <img src="IMG/Каталог/Logo.svg"> </a>
		<div style ="grid-area: b;" class = "gorizontal">
			<a href="catalog.php"> Каталог</a> 
			<a href="catalog.php"> Акции</a>
			<a href="brand.php" style = "background-color: #FF4B4B; color: aliceblue;"> О Бренде</a>
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
		<div id="circle_ac_table" class="AC_Circle" style="grid-area: c;  display: none">
			<img onclick="enter(2)" width="120px" style="cursor: pointer; pointer-events: auto; grid-area: b"
				src="IMG/🦆 icon _User Circle_.svg">
			<img style="margin: 0px; grid-area: a; align-self: end;" src="IMG/🦆 icon _shopping basket_.svg">
			<div id = "input_con" style = " align-self: start;"></div>
            <img onclick="exit()" style="grid-area: d; align-self: center; cursor: pointer; pointer-events: auto;" src="IMG/exit.svg">
		</div>
    </div>
    <br><br>
  

     <div class="my-swiper swiper">
        <div class="my-swiper-wrapper swiper-wrapper" id = "slides">
            <?php
                $conn = mysqli_connect("localhost", "root", "", "Diamant_db");
                if (!$conn) {
                    die("Ошибка: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM Slider";
                if ($result = mysqli_query($conn, $sql)) {
                    foreach ($result as $row) {
                        echo "<div class='my-swiper-slide-specials swiper-slide'>";
                            echo "<div class = 'my-swiper-image' style='width: 100%; height: 500px; align-content: center; justify-content: center; display: grid;'>";
                               echo  "<img width = '900px' src='IMG/" . $row["img"] . "'>";
                            echo "</div>";
                        echo"</div>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo "Ошибка: " . mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    <script src="Controllers/CBrand.js "></script>

   
    <div class = "BrendTable" style="background-color: white; font-size: 20px;">
        <div style="grid-area: a;"> <img width="400px" src="IMG/brend/develop.jpeg"> </div>
        <div style="grid-area: b;"> 
            <h1 style="font-size: 75px;font-weight: bold;">Производство</h1>
            <p>Все украшения бренда изготавливаются на собственном производстве — одном <br> из крупнейших в России ювелирном заводе «Ювелит». В основе каждой модели<br> Diamant заключены проверенные годами методы и технологии производства.</p>
        </div>
    </div>
    <div class = "BrendTable" style="background-color:#D9D9D9; font-size: 20px;">
        <div style="grid-area: b;"> <img width="400px" src="IMG/brend/251.png"> </div>
        <div style="grid-area: a;"> 
            <h1 style="font-size: 75px;font-weight: bold;">Дизайн</h1>
            <p>Классика — основной ориентир бренда. Именно сдержанные, лаконичные<br> модели покоряют своей универсальностью и актуальностью вне времени.<br> В линейках Diamant собраны все самые элегантные украшения, <br>которые станут драгоценным знаком внимания по особому случаю</p>
        </div>
    </div>
    <div class = "BrendTable" style="background-color: white; font-size: 20px;">
        <div style="grid-area: a;"> <img width="400px" src="IMG/Reg/🦆 2 icon _diamond_.svg"> </div>
        <div style="grid-area: b;"> 
            <h1 style="font-size: 75px;font-weight: bold;">Качество</h1>
        <p>Качество выпускаемой продукции — главный приоритет бренда Diamant</p>
        </div>
    </div>
    <div class = "BrendTable" style="background-color:#D9D9D9; font-size: 20px;">
        <div style="grid-area: b;"> <img width="400px" src="IMG/Reg/🦆 2 icon _diamond_.svg"> </div>
        <div style="grid-area: a;"> 
            <h1 style="font-size: 75px;font-weight: bold;">Цена</h1>
        <p>Покупка украшений высокого качества по доступной цене — удача<br> и редкость. Diamant дарит такую возможность и предлагает безупречные<br> ювелирные изделия по привлекательной стоимости. А регулярные скидки,<br> акции и спецпредложения сделают покупки ещё более выгодными.</p>
        </div>
    </div>
    <div class = "BrendTable" style="background-color: white; font-size: 20px;">
        <div style="grid-area: a;"> <img width="400px" src="IMG/brend/bbb.jpg"> </div>
        <div style="grid-area: b;"> 
            <h1 style="font-size: 75px;font-weight: bold;">Ассортимент</h1>
            <p style="letter-spacing: 2px;">Основываясь на многочисленных исследованиях и пожеланиях наших<br> покупательниц, мы регулярно добавляем в ассортимент только те модели,<br> которые действительно соответствуют ожиданиям и будут оценены, как<br> драгоценный подарок.</p>
        </div>
    </div>
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
                <td><a href="http://127.0.0.1:5500/index.php#:~:text=%D0%BF%D0%BE%20%D0%BE%D1%81%D0%BE%D0%B1%D0%BE%D0%BC%D1%83%20%D1%81%D0%BB%D1%83%D1%87%D0%B0%D1%8E.-,%D0%9D%D0%B0%D1%88%D0%B8%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D1%8B,-%D0%9D%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%20%D0%BA%D0%BE%D0%BB%2D%D1%86%D0%B5%D0%BD%D1%82%D1%80%D0%BE%D0%B2">Наши магазины</a></td>
            </tr>
        </table>
    </div>
    <div align = "center" style="line-height: 50px;height: 50px; background-color: #FF4B4B; color: aliceblue; font-family: Arial; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">© Все права защищены</div>

</body>
</html>