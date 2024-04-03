function enter(key){
    if(key === 1)
    {
        const inputs = document.querySelectorAll('.in');
        var email = inputs[0].value;
        var password = inputs[1].value;
        var userId = 1;

    fetch("../myweb/Managers/MEnter.php",{
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
                sessionStorage.id = data.User.id;
                window.location.href ="account.php"
            }
            else{
                console.log("error");
            }
        });
    }
    if(key === 2) window.location.href ="account.php";
}
function user_table(){
    if(sessionStorage.length === 0 || sessionStorage.id === '0'){
        document.getElementById("ac_form").style.display = "block";
        document.getElementById("circle_ac_table").style.display = "none";
    }
    else{
        document.getElementById("ac_form").style.display = "none";
        document.getElementById("circle_ac_table").style.display = "grid";
        var page = document.getElementById("input_con");
        page.innerHTML ='';
        Userid = sessionStorage.id; 
        var key = 1;
        var xhr2 = new XMLHttpRequest(); 
        xhr2.onreadystatechange = function () { 
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                
                var Basket = JSON.parse(xhr2.responseText); //ответ сервакаs
                var totalamount = 0;
                for(var element of Basket){
                    totalamount += parseFloat(element.amount.replace(/[^\d.]/g, ''));
                } 
                page.innerHTML +=
                '<input value="'+ totalamount +'"style="border: none; background: #FF4B4B; color: white; text-indent: 0px; text-align: center; margin: 0px; grid-area: c; width: 40px; align-self: start; border-radius: 15px"></input>';
            }
        }; 
        xhr2.open('GET', '../myweb/Managers/MUserBasket.php?id=' + Userid + '&key=' + key, true);
        xhr2.send();  
    }
}
function exit(){
    sessionStorage.id = 0;
    user_table();
    var timestamp = new Date().getTime();
    var updatedUrl = window.location.pathname + '?' + timestamp;
    window.location.replace(updatedUrl);
}