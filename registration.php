<html>
<head>
	<title>Регистрация</title>
    <meta charset="UTF-8">
	<link rel = "stylesheet" href="Styles/SReg.css"> 
    <script src="Controllers/CReg.js"></script>
</head>
<body>
    <div  style = "width: 241;height: 241px; left: 884px; top: 525px;" class = "circle"> </div>
    <div  style = "width: 293px;height: 293px; left: 390px; top: 88px;" class = "circle"> </div>
    <div  style = "width: 130px;height: 130px; left: 1086px; top: 444px;" class = "circle"> <img src ="IMG/Reg/🦆 2 icon _diamond_.svg"/> </div>
    <!-- <div> <img src = "https://pngimg.com/uploads/rice/rice_PNG5.png"/></div> -->
   <div style="position: absolute; inset: 0; margin: auto; width: 565px; height: 559px;">
    <div class = "RegTable">
        <div style="grid-area: Middle; justify-self: center; align-self: center; margin-top: 30px">
            <div class = "input">
                <div> Ваш Email:</div> 
                <input class = "in" type="text" name = "username" value = "">
            </div>
            <div class = "input">
                <div>  Пароль:</div> 
                <input class = "in" type="password" name = "useremail" value = "">
            </div>
            <div class = "input">
                <div>  Повтор пароля:</div> 
                <input class = "in" type="password" name = "usertel" value = "">
            </div>
        </div>
        <div class = "PP" style="grid-area: Top; align-self: center"> Регистрация </div>
        <div style="grid-area: Buttom; justify-self: center">
			<button onclick="reg()" class = "B" style="color:white;">Зарегистрироваться</button>
		</div>
        <div onclick="what()" id="ErrorTable" style="display:none; grid-area: Buttom; font-family: Arial;"> 
            <div style = "font-size: 28; color: #FF4B4B; font-weight: bold;" > Ошибка  </div> 
            <div style = "font-size: 19; color: black; font-weight: bold;" > пароли не совпадают </div>  <br>
            <div style = "font-size: 16; color: grey; font-weight: regular;" > (для закрытия - кликните по предупреждению) </div>
        </div>
    </div>
        <a href = index.php class = "back"> 
            <svg width="50" height="79" viewBox="0 0 122 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class = "shit" d="M39.4243 5L5.01849 39.4302L39.4304 73.8542" stroke="#D9D9D9" stroke-width="8.60428" stroke-linecap="round" stroke-linejoin="round"/>
                <path class = "shit" d="M116.867 39.4424H5.01123" stroke="#D9D9D9" stroke-width="8.60428" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
        </a> 
    </div>
</body>  
</html>