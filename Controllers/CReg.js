function what(){
    document.getElementById('ErrorTable').style.display = 'none';
}
function reg(){
    const inputs = document.querySelectorAll('.in');
    var email = inputs[0].value;
    var password = inputs[1].value;
    var repeatpassword = inputs[2].value;
    var page = document.getElementById("ErrorTable");

    if(password != repeatpassword) 
    {
        page.innerHTML ='';
        page.innerHTML +=
        '<div style = "font-size: 28; color: #FF4B4B; font-weight: bold;" > Ошибка  </div>'
        +
        '<div style = "font-size: 19; color: black; font-weight: bold;" > пароли не совпадают </div>  <br>'
        +
        '<div style = "font-size: 16; color: grey; font-weight: regular;" > (для закрытия - кликните по предупреждению) </div>';
        document.getElementById('ErrorTable').style.display = 'block';
        return 0;
    }
    if(!email || !password || !repeatpassword)
    {
        page.innerHTML ='';
        page.innerHTML +=
        '<div style = "font-size: 28; color: #FF4B4B; font-weight: bold;" > Ошибка  </div>'
        +
        '<div style = "font-size: 19; color: black; font-weight: bold;" > Данные введены не полностью </div>  <br>'
        +
        '<div style = "font-size: 16; color: grey; font-weight: regular;" > (для закрытия - кликните по предупреждению) </div>';
        document.getElementById('ErrorTable').style.display = 'block';
        return 0;
    } 
    else
    {
        fetch("../myweb/Managers/MReg.php",{
            method:"POST",
            body: JSON.stringify({
                email: email,
                password: password,
            }),
            headers: {"Content-Type": "application/json"},
        })
            .then(response => response.json())
            .then(data => {
                if (data.success){
                    sessionStorage.id = data.User;
                    window.location.href ="account.php"
                }
                else{
                    console.log("error");
                }
            });
    }
}