<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
date_default_timezone_set('Europe\Moscow');
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------REVIEW---------- \n", 3 , $file_path);

$input = file_get_contents('php://input');
$data = json_decode($input);
if($data){
    $email = $data->email;
    $phone = $data->phone;
    $name = $data->name;
    $review = $data->review;

    error_log("get_data: $email $phone $name  $review\n", 3 , $file_path);
} else{
    error_log("failed decod \n", 3 , $file_path);
}

$sql = "INSERT INTO Reviews (name, phone, email, review) VALUES ('$name', '$phone', '$email', '$review')";
if ($result = mysqli_query($conn, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(["success" => true]);
} else {
    error_log("failed \n", 3 , $file_path);
}
mysqli_close($conn);
?>
