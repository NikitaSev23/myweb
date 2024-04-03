<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
date_default_timezone_set('Europe\Moscow');
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------PARTNER---------- \n", 3 , $file_path);

$input = file_get_contents('php://input');
$data = json_decode($input);
if($data){
    $email = $data->email;
    $phone = $data->phone;
    $name = $data->name;

    error_log("get_data: $email $phone $name \n", 3 , $file_path);
} else{
    error_log("failed decod \n", 3 , $file_path);
}

$sql = "SELECT * FROM NewPartners WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
error_log("SQL request: $sql \n", 3 , $file_path);
$date = date("Y-m-d H:i:s");
if (mysqli_num_rows($result) === 0) {
    $sql = "INSERT INTO NewPartners (name, phone, email, date) VALUES ('$name', '$phone', '$email', '$date')";
    error_log("SQL request: $sql \n", 3 , $file_path);
        if ($result = mysqli_query($conn, $sql)) {
            error_log("Заявка оставлена $date", 3 , $file_path);
            echo json_encode(["success" => true]);
        }
        else{
            echo json_encode(["success"=> false]);
        }
} else {
    error_log("Такой уже есть\n", 3 , $file_path);
    echo json_encode(["success"=> false]);
}
mysqli_close($conn);
?>