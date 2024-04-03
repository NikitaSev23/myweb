document.addEventListener('DOMContentLoaded', function() {
    let formData =  {};
    const form = document.querySelector('form');
    const LS = sessionStorage;

    //получение данных всех input
    form.addEventListener('input', function(event) {
        formData[event.target.name] = event.target.value;
        console.log(formData);
        LS.setItem('formData', JSON.stringify(formData));
    });
    //Извлечение данных всех input из localStorage
    if(LS.getItem('formData')){
        formData = JSON.parse(LS.getItem('formData'));
    }
    for (let name in formData){
        form.elements[name].value = formData[name];
    }
});
function edit() {
    const inputs = document.querySelectorAll('.in');
    red = document.getElementById('redcode');
    for ( let input of inputs) // const input
    {
        if(input.name === "useremail")
        {
           red.style.background = '#ff7c7c';
           input.style.background = '#ff7c7c';
        }
        else input.removeAttribute('readonly');
    }
    ///inputs.forEach(function(input) {
       // input.setAttribute('readonly', true);
    //});
    document.getElementById('edit_b').style.display = 'none'
    document.getElementById('save_b').style.display = 'block'
}
function save(){
    const inputs = document.querySelectorAll('.in');
    for ( let input of inputs) // const input
    {
        if(input.name === "useremail")
        {
           red.style.background = 'none';
           input.style.background = 'none';
        }
        else input.setAttribute('readonly', true);
    }
    document.getElementById('edit_b').style.display = 'block'
    document.getElementById('save_b').style.display = 'none'

    var name = inputs[0].value;
    var phone = inputs[2].value;
    var birthdate = inputs[3].value;
    var id = sessionStorage.id;
    fetch("../myweb/Managers/MSaveDataUser.php",{
        method:"POST",
        body: JSON.stringify({
            id: id,
            name: name,
            phone: phone,
            birthdate: birthdate,
        }),
        headers: {"Content-Type": "application/json"},
    })
        .then(response => response.json())
        .then(data => {
            if (data.success){
                console.log("Данные пользователя успешно обновлены")
                update_user();
            }
            else{
                console.log("error");
            }
        });

}
function update_user(){ 
    
    if(sessionStorage.id === '0') window.location.href ="registration.php";
    Userid = sessionStorage.id; 
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function () { 
        if (xhr.readyState === 4 && xhr.status === 200) { 
        User = JSON.parse(xhr.responseText);//ответ сервака 

        var page = document.getElementById("forma");
        page.innerHTML ='';

        page.innerHTML +=
        '<div class = "input">'
        +
		'<div> Ваше имя:</div>'
        +
		'<input class = "in" type="text" name = "username" value ="'+ User.name +'"readonly>'
        +
		'</div>'
        +
		'<div id = "redcode" class = "input">'
        +
		'<div>  Email:</div> '
        +
	    '<input class = "in" type="email" name = "useremail" value = "'+ User.email +'" readonly>'
        +
		'</div>'
        +
		'<div class = "input">'
        +
		'<div>  Телефон:</div>'
        +
		'<input class = "in" type="tel" name = "usertel" value = "'+ User.phone +'" readonly>'
        +
		'</div>'
        +
		'<div class = "input">'
        +
		'<div>  Дата рождения:</div>'
        +
		'<input class = "in" type="date" name = "userbtdate" value = "'+ User.birthdate +'" readonly>'
        +
		'</div>';
        
        var translate = Translate(User.name);
        document.getElementById('NikName').innerHTML = translate;
        
    } 
     }; 
        xhr.open('GET', '../myweb/Managers/MUser.php?id=' + Userid, true); 
        xhr.send();

    Userid = sessionStorage.id; 
    var key = 1;
    var xhr2 = new XMLHttpRequest(); 
    xhr2.onreadystatechange = function () { 
        if (xhr2.readyState === 4 && xhr2.status === 200) {
            
            var Basket = JSON.parse(xhr2.responseText);//ответ сервакаs
            var cost = 0;
            var page = document.getElementById("basket");
            page.innerHTML ='';
            
            for(var element of Basket){
                cost += parseFloat(element.price.replace(/[^\d.]/g, '')) * parseFloat(element.amount);
                page.innerHTML +=
                '<div class = "product">'
                +
                '<img width = "123px" src = "IMG/Каталог/'+ element.img +'">'
                +
                '<p style="font-weight: bold;"> '+ element.price +' ₽</p>'
                +
                '<div class = "pin" id = "1">'
                +
                '<img onclick="pm('+ element.product_id +', 1)" src = "IMG/pin/plus.svg" style = "cursor: pointer;">'
                +
                '<input value= "'+ element.amount +'" class = "centered-input" readonly>'
                +
                '<img onclick="pm('+ element.product_id +', 2)" src = "IMG/pin/minus.svg" style = "cursor: pointer;">'
                +
                '</div>'
                +
                '<img onclick = "DeleteFromBasket('+ element.product_id +')" src= "IMG/pin/trash.svg" style = "cursor: pointer;">'
                +
                '</div>';
            }
            page = document.getElementById("cost_and_payment");
            page.innerHTML ='';
            page.innerHTML +=
            '<div class = "text" style = "margin: 0 70px 0 20px;">Общая стоимость: '+ cost +' ₽</div>'
			+
            '<button class="B" style="left: 5px; width: 120px; margin: 0;">Оплатить</button>';
        } 
    };
    xhr2.open('GET', '../myweb/Managers/MUserBasket.php?id=' + Userid + '&key=' + key, true);
    xhr2.send();
}
function DeleteFromBasket(product_id){
    user_id = sessionStorage.id;
    key = 3;
    fetch("../myweb/Managers/MUserBasket.php",{
        method:"POST",
        body: JSON.stringify({
            product_id: product_id,
            user_id: user_id,
            key: key,
        }),
        headers: {"Content-Type": "application/json"},
    })
        .then(response => response.json())
        .then(data => {
            if (data.success){
                console.log("Товар успешно удален")
                update_user();
            }
            else{
                console.log("error");
            }
        });
}
function pm(product_id, newkey) {
    const user_id = sessionStorage.id;
    let key;
    if (newkey === 1) {
        key = 4;
    } else if (newkey === 2) {
        key = 5;
    }

    if (key !== undefined) {
        fetch("../myweb/Managers/MUserBasket.php", {
            method: "POST",
            body: JSON.stringify({
                product_id: product_id,
                user_id: user_id,
                key: key,
            }),
            headers: { "Content-Type": "application/json" },
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Товар успешно изменен");
                    update_user();
                } else {
                    console.log("error");
                }
            });
    } else {
        console.log("Неподдерживаемое значение key: " + newkey);
    }
}
function Translate(text) {

    text = text
        .replace(/\u0401/g, 'YO')
        .replace(/\u0419/g, 'I')
        .replace(/\u0426/g, 'TS')
        .replace(/\u0423/g, 'U')
        .replace(/\u041A/g, 'K')
        .replace(/\u0415/g, 'E')
        .replace(/\u041D/g, 'N')
        .replace(/\u0413/g, 'G')
        .replace(/\u0428/g, 'SH')
        .replace(/\u0429/g, 'SCH')
        .replace(/\u0417/g, 'Z')
        .replace(/\u0425/g, 'H')
        .replace(/\u042A/g, '')
        .replace(/\u0451/g, 'yo')
        .replace(/\u0439/g, 'i')
        .replace(/\u0446/g, 'ts')
        .replace(/\u0443/g, 'u')
        .replace(/\u043A/g, 'k')
        .replace(/\u0435/g, 'e')
        .replace(/\u043D/g, 'n')
        .replace(/\u0433/g, 'g')
        .replace(/\u0448/g, 'sh')
        .replace(/\u0449/g, 'sch')
        .replace(/\u0437/g, 'z')
        .replace(/\u0445/g, 'h')
        .replace(/\u044A/g, "'")
        .replace(/\u0424/g, 'F')
        .replace(/\u042B/g, 'I')
        .replace(/\u0412/g, 'V')
        .replace(/\u0410/g, 'A')
        .replace(/\u041F/g, 'P')
        .replace(/\u0420/g, 'R')
        .replace(/\u041E/g, 'O')
        .replace(/\u041B/g, 'L')
        .replace(/\u0414/g, 'D')
        .replace(/\u0416/g, 'ZH')
        .replace(/\u042D/g, 'E')
        .replace(/\u0444/g, 'f')
        .replace(/\u044B/g, 'i')
        .replace(/\u0432/g, 'v')
        .replace(/\u0430/g, 'a')
        .replace(/\u043F/g, 'p')
        .replace(/\u0440/g, 'r')
        .replace(/\u043E/g, 'o')
        .replace(/\u043B/g, 'l')
        .replace(/\u0434/g, 'd')
        .replace(/\u0436/g, 'zh')
        .replace(/\u044D/g, 'e')
        .replace(/\u042F/g, 'Ya')
        .replace(/\u0427/g, 'CH')
        .replace(/\u0421/g, 'S')
        .replace(/\u041C/g, 'M')
        .replace(/\u0418/g, 'I')
        .replace(/\u0422/g, 'T')
        .replace(/\u042C/g, "'")
        .replace(/\u0411/g, 'B')
        .replace(/\u042E/g, 'YU')
        .replace(/\u044F/g, 'ya')
        .replace(/\u0447/g, 'ch')
        .replace(/\u0441/g, 's')
        .replace(/\u043C/g, 'm')
        .replace(/\u0438/g, 'i')
        .replace(/\u0442/g, 't')
        .replace(/\u044C/g, "'")
        .replace(/\u0431/g, 'b')
        .replace(/\u044E/g, 'yu');

    return text;
};


