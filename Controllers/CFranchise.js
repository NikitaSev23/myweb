function newpartner(){
    const inputs = document.querySelectorAll('.in');
    var name = inputs[0].value;
    var phone = inputs[1].value;
    var email = inputs[2].value;
    
    var checkbox = document.getElementById("checkbox");

    if(checkbox.checked) console.log("Афигеть, тебя слили в интернет");
    else return 0;

    if(!name || !email || !phone)
    {
        return 0;
    } 
    else
    {
        fetch("../myweb/Managers/MPartner.php",{
            method:"POST",
            body: JSON.stringify({
                email: email,
                name: name,
                phone: phone,
            }),
            headers: {"Content-Type": "application/json"},
        })
            .then(response => response.json())
            .then(data => {
                if (data.success){
                    console.log("Сохранено");
                }
                else{
                    console.log("error");
                }
            });
    }
}