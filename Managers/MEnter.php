<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------ENTER---------- \n", 3 , $file_path);

$input = file_get_contents('php://input');
$data = json_decode($input);
if($data){
    $email = $data->email;
    $password = $data->password;
    error_log("get_data: $email $password \n", 3 , $file_path);
} else{
    error_log("failed decod \n", 3 , $file_path);
}

//$userId =  $_GET['id'];

//$sql = "SELECT * FROM User WHERE (name = $namevalue and password = $passwordvalue )";
$sql = "SELECT * FROM User WHERE (email = '$email' and password = '$password')";
error_log("SQL request: $sql \n", 3 , $file_path);
if ($result = mysqli_query($conn, $sql)) {

    $productData = mysqli_fetch_assoc($result);
    header('Content-Type: application/json');
    error_log("My user: $productData \n", 3 , $file_path);
    echo json_encode(["success" => true, "User" => $productData]);
} else {
    error_log(" Not found:" . mysqli_error($conn) . "\n", 3 , $file_path);
    echo json_encode(["success"=> false]);
}
mysqli_close($conn);
?>
