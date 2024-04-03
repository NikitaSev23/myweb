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

$sql = "SELECT * FROM User WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
error_log("SQL request: $sql \n", 3 , $file_path);
if (mysqli_num_rows($result) === 0) {
    $sql = "INSERT INTO User (email, password) VALUES ('$email', '$password')";
    error_log("SQL request: $sql \n", 3 , $file_path);
    if ($result = mysqli_query($conn, $sql)) {
        $newid = mysqli_insert_id($conn);
        error_log("id:" . $newid . "\n", 3 , $file_path);
        echo json_encode(["success" => true, "User" => $newid]);
    }
    else{
        echo json_encode(["success"=> false]);
    }
} else {
    error_log("Такой уже есть:" . mysqli_error($conn) . "\n", 3 , $file_path);
    echo json_encode(["success"=> false]);
}
mysqli_close($conn);
?>