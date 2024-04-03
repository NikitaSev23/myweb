<html>
<head>
    <meta charset="UTF-8">
	<title>Франшиза</title>
    <script src="Controllers/CFranchise.js "></script>
    <script src="Controllers/CEnter.js "></script>
    <link rel = "stylesheet" href="Styles/SFranchise.css">
</head>
<body onload="user_table()">
    <div class ="Header">
		<a href="index.php" style="grid-area: a; justify-self: center"> <img src="IMG/Каталог/Logo.svg"> </a>
		<div style ="grid-area: b;" class = "gorizontal">
			<a href="catalog.php"> Каталог</a> 
			<a href="catalog.php"> Акции</a>
			<a href="brand.php"> О Бренде</a>
			<a href="franchise.php" style = "background-color: #FF4B4B; color: aliceblue;"> Франшиза</a>
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

    <p align = "center" style="font-size: 75px; font-family: Arial;">Много инфы о том как же круто открыть у нас франшизу</p>
    <div style="display: grid; position: relative; width: 100%; height: auto; margin: 20 0 20 0;">
        <div class = "Franchise" style="justify-self: center;">
            <div style="text-align: center;" class = "text">
                <p style="font-size: 40px; font-weight: bold;">Хотите стать партнёром?</p>
                <p style="font-size: 20px;"> Свяжитесь с нами по номеру <strong>+7 (800) 555 01 10</strong> или 
                    <br>оставьте свои контактные данные, с вами свяжется менеджер.</p>
            </div>
            <div style="justify-self: center; align-self: center; margin-top: 20px">
                <div class = "input">
                    <div> Имя:</div> 
                    <input class = "in" type="text" name = "username" value = "">
                </div>
                <div class = "input">
                    <div>  Телефон:</div> 
                    <input class = "in" type="tel" name = "useremail" value = "">
                </div>
                <div class = "input" style="margin-bottom: 10px;">
                    <div>  Email:</div> 
                    <input class = "in" type="email" name = "usertel" value = "">
                </div>
                <div class = "inputcheck">
                    <input id = "checkbox" type="checkbox" name = "approved" value = "">
                    <label class = "text" for="approved" style="font-size: 16px; font-weight: bold; margin-top: 10px;">Даю согласие на обработку персональных данных</label>
                </div>
            </div>
            <div style="justify-self: center;">
                <button onclick="newpartner()" class = "B" style="color: rgb(52, 50, 50);">Отправить</button>
            </div>
        </div>
        <img  src="IMG/Фончик 2.png" style="border-radius: 10px; justify-self: center; ">
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