<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------User_Data---------- \n", 3 , $file_path);

$Userid =  $_GET['id'];

$sql = "SELECT * FROM User WHERE id = $Userid";

error_log("SQL request: $sql \n", 3 , $file_path);

if ($result = mysqli_query($conn, $sql)) {

    $User = mysqli_fetch_assoc($result);
    header('Content-Type: application/json');
    error_log("Возврат User по id: $User \n", 3 , $file_path);
    echo json_encode($User);
} else {
    error_log(" Not found:" . mysqli_error($conn) . "\n", 3 , $file_path);
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>