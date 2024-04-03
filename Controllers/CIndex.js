function review(){
    const inputs = document.querySelectorAll('.in2');
    var name = inputs[0].value;
    var phone = inputs[1].value;
    var email = inputs[2].value;
    var review = inputs[3].value;
    var checkbox = document.getElementById("checkbox");

    if(checkbox.checked) console.log("Афигеть, тебя слили в интернет");
    else return 0;

    if(!name || !email || !review)
    {
        return 0;
    } 
    else
    {
        fetch("../myweb/Managers/MReview.php",{
            method:"POST",
            body: JSON.stringify({
                email: email,
                name: name,
                phone: phone,
                review: review,
            }),
            headers: {"Content-Type": "application/json"},
        })
            .then(response => response.json())
            .then(data => {
                if (data.success){
                    console.log("Сохранено");
                    location.reload();
                }
                else{
                    console.log("error");
                }
            });
    }
}