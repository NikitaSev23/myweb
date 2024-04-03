function Open_product(id){
    var page = document.getElementById("product_card");
    page.innerHTML ='';
    var key = 2;
    var product_id = id;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () { 
        if (xhr.readyState === 4 && xhr.status === 200) { 
            product = JSON.parse(xhr.responseText); //ответ сервака
            page.innerHTML +=
            '<img width="350" src="IMG/Каталог/'+ product.img +'">' +
            '<div class="text" style="grid-area: s;position: absolute; align-self: start; font-size: 20px;">Выбор размера:</div>' +
            '<div style="grid-area:s; display: flex; flex-wrap: wrap; margin-top: 30px;">' +
            '<div onclick="size_select(this)" class="size">16</div>' +
            '<div onclick="size_select(this)" class="size">16.5</div>' +
            '<div onclick="size_select(this)" class="size">17</div>' +
            '<div onclick="size_select(this)" class="size">17.5</div>' +
            '<div onclick="size_select(this)" class="size">18</div>' +
            '<div onclick="size_select(this)" class="size">18.5</div>' +
            '<div onclick="size_select(this)" class="size">19</div>' +
            '<div onclick="size_select(this)" class="size">20</div>' +
            '<div onclick="size_select(this)" class="size">20.5</div>' +
            '<div onclick="size_select(this)" class="size">21</div>' +
            '<div onclick="size_select(this)" class="size">22</div>' +
            '</div>' +
            '<div style="grid-area: t1; align-self: center; justify-self: start; font-size: 14px;">' +
            '<p style="margin: 0; font-weight: bold; font-size: 30px;">'+ product.label +'<br></p>' +
            '</div>' +
            '<p style="grid-area: sl; letter-spacing: 2px; align-self: center; margin: 0; font-weight: regular; font-size: 20px;">Изысканное золотое кольцо 585 пробы с красным гранатом. <br> Вес - 1.4 г. Элегантность и стиль в каждой детали.  Подчеркните свою <br> утонченность с этим уникальным украшением. <br> #ювелир #стиль #красноезолото</p>' +
            '<p style="grid-area: t2; margin: 0; font-weight: bold; font-size: 30px;">Цена: '+ product.price +' ₽</p>' +
            '<button class="B" onclick="AddToBasket(' + product.id + ')" style="margin-left: 95px; grid-area: b; width: 250px; color:aliceblue; background-color: black;">Добавить в корзину</button>' +
            '<button id="favorite_id" onclick="favorite()" class="B" style="width: 70px; display: flex; justify-content: center; align-items: center; justify-self: start; grid-area: b;background-color: black;">' +
            '<svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">' +
            '<path class="path" d="M46.6173 39.8365L42.6265 40.7798C41.7315 40.9975 41.0301 41.6747 40.8366 42.5697L39.9901 46.1252C39.5305 48.0601 37.0634 48.6648 35.7815 47.141L28.5496 38.8207C27.9691 38.1434 28.2835 37.0792 29.1542 36.8615C33.4354 35.8215 37.2811 33.4269 40.111 30.0166C40.5706 29.4603 41.3929 29.3877 41.9008 29.8956L47.2704 35.2652C49.1086 37.1034 48.4556 39.4012 46.6173 39.8365Z" fill="white" />' +
            '<path class="path" d="M1.74782 39.8365L5.73869 40.7798C6.63362 40.9975 7.33504 41.6747 7.52854 42.5697L8.37509 46.1252C8.83464 48.0601 11.3017 48.6648 12.5836 47.141L19.8156 38.8207C20.3961 38.1434 20.0817 37.0792 19.2109 36.8615C14.9298 35.8215 11.084 33.4269 8.25415 30.0166C7.7946 29.4603 6.97223 29.3877 6.4643 29.8956L1.09477 35.2652C-0.743454 37.1034 -0.0904024 39.4012 1.74782 39.8365Z" fill="white" />' +
            '<path class="path" d="M24.244 0C14.8836 0 7.31299 7.57057 7.31299 16.931C7.31299 20.4381 8.35303 23.655 10.1429 26.3398C12.7551 30.2097 16.8911 32.9428 21.7043 33.6443C22.5267 33.7894 23.3732 33.862 24.244 33.862C25.1147 33.862 25.9613 33.7894 26.7836 33.6443C31.5968 32.9428 35.7328 30.2097 38.345 26.3398C40.1349 23.655 41.1749 20.4381 41.1749 16.931C41.1749 7.57057 33.6044 0 24.244 0ZM31.6452 16.3989L29.6377 18.4064C29.2991 18.745 29.1056 19.3981 29.2265 19.8818L29.807 22.3731C30.2666 24.3322 29.2265 25.1062 27.485 24.0662L25.0663 22.6391C24.631 22.3731 23.9053 22.3731 23.47 22.6391L21.0513 24.0662C19.3098 25.082 18.2697 24.3322 18.7293 22.3731L19.3098 19.8818C19.4065 19.4222 19.2372 18.745 18.8986 18.4064L16.8427 16.3989C15.6575 15.2137 16.0445 14.0285 17.6893 13.7625L20.2773 13.3271C20.7126 13.2545 21.2206 12.8675 21.4141 12.4805L22.8411 9.62647C23.6151 8.07849 24.8728 8.07849 25.6468 9.62647L27.0739 12.4805C27.2674 12.8675 27.7753 13.2545 28.2348 13.3271L30.8229 13.7625C32.4434 14.0285 32.8304 15.2137 31.6452 16.3989Z" fill="white" />' +
            '</svg>' +
            '</button>';
        }
    }; 
    xhr.open('GET', '../myweb/Managers/MSearch.php?id=' + product_id + '&key=' + key, true);
    xhr.send();
    document.getElementById('product_js').style.display = 'block';
    document.body.style.overflow = 'hidden';
    document.getElementById('filter_js').style.display = 'none';
    document.getElementById('search_bar').style.display = 'none';
}
function Catalog_back(){
    document.getElementById('product_js').style.display = 'none';
    document.body.style.overflow = 'visible';
    document.getElementById('filter_js').style.display = 'block';
    document.getElementById('search_bar').style.display = 'flex';
}
function size_select(select_size){
    let allsizes = document.querySelectorAll('.size');
    for ( let size of allsizes) // const input
    {
        if(size.textContent === select_size.textContent){
            //size.style.border = '2px solid black'
            size.style.backgroundColor = "black"
            size.style.color = 'aliceblue'
        }
        else{
            //size.style.border = 'none'
            size.style.backgroundColor = "aliceblue"
            size.style.color = 'black'
        }
    }
}
function favorite(){
    let b = document.getElementById('favorite_id');
    let p = b.getElementsByTagName('path');
    if(p[1].style.fill === 'white')
    {
       for(let path of p){
        path.style.fill = '#FF4B4B'
       }
    }
    else
    {
        for(let path of p){
            path.style.fill = 'white'
           }
    }
}
function AddToBasket(product_id){

    user_id = sessionStorage.id;
    key = 2;
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
                console.log("Товар успешно добавлен")
                user_table();
            }
            else{
                console.log("error или вы не авторизованы");
            }
        });
}
function Search_by_name(){
    var key = 1;
   let input = document.getElementById("search");
   let search_value = input.value;
   var xhr = new XMLHttpRequest();

   var page = document.getElementById("container");
   page.innerHTML ='';
    xhr.onreadystatechange = function () { 
        if (xhr.readyState === 4 && xhr.status === 200) { 
            Finded_products = JSON.parse(xhr.responseText);//ответ сервака 
            if(Finded_products.length === 0)
            {
                page.innerHTML = "<div style = 'font-size: 40px'> Товар не найден </div>"
            }
            else
            {
                for(var element of Finded_products){
                    page.innerHTML +=
                    "<div class='product'>" +
                    "<div onclick='Open_product("+ element.id +")' style='cursor: pointer; grid-area: a;'>" +
                    "<img width='200' src='IMG/Каталог/" + element.img + "'>" +
                    "</div>" +
                    "<div onclick='Open_product("+ element.id +")' style='cursor: pointer; grid-area: c; align-self: start; justify-self: start; margin: 15px; font-size: 14px;'>" +
                    "<p style='font-weight: bold;'>" + element.label + "<br></p>" +
                    "<p style='color:#555555;'>" + element.description + "</p>" +
                    "</div>" +
                    "<div style='grid-area: b;'>" + element.price + " ₽ </div>" +
                    "<button onclick='AddToBasket(" + element.id + ")' class='B' style='grid-area: d; margin: 0px; width: 85%; color:aliceblue; background-color: black;'>" +
                    "Добавить в корзину" +
                    "</button>" +
                    "</div>";
                }
            }
        }
    }; 
    xhr.open('GET', '../myweb/Managers/MSearch.php?find=' + search_value + '&key=' + key, true);
    xhr.send();
}
