<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
date_default_timezone_set('Europe\Moscow');
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------SaveDataUser---------- \n", 3 , $file_path);

$input = file_get_contents('php://input');
$data = json_decode($input);
if($data){
    $id = $data->id;
    $name = $data->name;
    $phone = $data->phone;
    $birthdate = $data->birthdate;

    error_log("get_data: $birthdate $phone $name  $review\n", 3 , $file_path);
} else{
    error_log("failed decod \n", 3 , $file_path);
}

$sql = "UPDATE User SET name = '$name', phone = '$phone', birthdate = '$birthdate' WHERE id = $id";
error_log("SQL request: $sql \n", 3 , $file_path);

if ($result = mysqli_query($conn, $sql)) {
    echo json_encode(["success"=> true]);
} else {
    error_log("failed \n", 3 , $file_path);
    echo json_encode(["success"=> false]);
}
mysqli_close($conn);
?>