var swiper = new Swiper(".my-swiper", {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    pagination: {
        el: '.swiper-pagination',
    },
    simulateTouch: true,
    grabCursor: false,

    //autoHeight: true,
    //watchOwerflow: true,
    //spaceBetween: 30,
});
/*function slider(){
   var xhr = new XMLHttpRequest();
   var page = document.getElementById("slides");
   page.innerHTML ='';
    xhr.onreadystatechange = function () { 
        if (xhr.readyState === 4 && xhr.status === 200) { 
            Slides = JSON.parse(xhr.responseText);//ответ сервака 
                for(var slide of Sliders){
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
}*/