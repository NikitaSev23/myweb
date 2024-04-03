<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

$file_path = "..\\Logs\\error.log";
file_put_contents($file_path, "");
error_log("--------SEARCH---------- \n", 3, $file_path);


$key = $_GET['key'];
switch ($key) {
    case "1": {
            $find = $_GET['find'];
            error_log("find: $find \n", 3, $file_path);

            $sql = "SELECT * FROM Product WHERE label LIKE '%$find%'";
            error_log("SQL request: $sql \n", 3, $file_path);

            if ($result = mysqli_query($conn, $sql)) {
                $Finded_products = array(); // Создайте массив для хранения данных
                while ($row = mysqli_fetch_assoc($result)) {
                    $Finded_products[] = $row;
                }
                error_log("Finded_ptoducts: " . json_encode($Finded_products) . "\n", 3, $file_path);
                header('Content-Type: application/json');
                echo json_encode($Finded_products);
            } else {
                error_log("SQL Query Error: " . mysqli_error($conn) . "\n", 3, $file_path);
                echo "Ошибка: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        break;
    case "2": {
        $id = $_GET['id'];
            error_log("id: $id \n", 3, $file_path);

            $sql = "SELECT * FROM Product WHERE id = '$id'";
            error_log("SQL request: $sql \n", 3, $file_path);

            if ($result = mysqli_query($conn, $sql)) {
                $product = mysqli_fetch_assoc($result);
                error_log("product: " . json_encode($product) . "\n", 3, $file_path);
                header('Content-Type: application/json');
                echo json_encode($product);
            } else {
                error_log("SQL Query Error: " . mysqli_error($conn) . "\n", 3, $file_path);
                echo "Ошибка: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        break;
}
?>