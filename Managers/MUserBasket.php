<?php
$conn = mysqli_connect("localhost", "root", "", "Diamant_db");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

$file_path = "..\\Logs\\error.log";
file_put_contents($file_path,"");
error_log("--------User_Basket---------- \n", 3 , $file_path);


$input = file_get_contents('php://input');
$data = json_decode($input);
if($data){
    $product_id = $data->product_id;
    $user_id = $data->user_id;
    $key = $data->key;
    error_log("get_data: $product_id $user_id $key \n", 3 , $file_path);
} else{
    error_log("Запрос типа GET \n", 3 , $file_path);
    $Userid =  $_GET['id'];
    $key = $_GET['key'];
}


switch($key)
{
    case "1":
    {
        error_log("User ID: $Userid $key \n", 3, $file_path);

        //$sql = "SELECT * FROM ShopBasket WHERE user_id = $Userid";

        $sql = "SELECT ShopBasket.*, Product.*, User.* 
        FROM ShopBasket 
        JOIN Product ON ShopBasket.product_id = Product.id 
        JOIN User ON ShopBasket.user_id = User.id 
        WHERE ShopBasket.user_id = $Userid";

        error_log("SQL request: $sql \n", 3 , $file_path);

        if ($result = mysqli_query($conn, $sql)) {

            $UserBasket = array(); // Создайте массив для хранения данных
            while ($row = mysqli_fetch_assoc($result)) {
                $UserBasket[] = $row;
            }
            error_log("User Basket Data: " . json_encode($UserBasket) . "\n", 3, $file_path);
            header('Content-Type: application/json');
            echo json_encode($UserBasket);
        } else {
            error_log("SQL Query Error: " . mysqli_error($conn) . "\n", 3, $file_path);
            echo "Ошибка: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    break;
    case "2":
    {
        $sql = "SELECT * FROM ShopBasket WHERE (product_id = '$product_id' and user_id = '$user_id')";
        $result = mysqli_query($conn, $sql);
        error_log("SQL request: $sql \n", 3 , $file_path);
        if (mysqli_num_rows($result) === 0) {
            $sql = "INSERT INTO ShopBasket (product_id, user_id, amount) VALUES ('$product_id', '$user_id', 1)";
            error_log("SQL request: $sql \n", 3 , $file_path);
            if ($result = mysqli_query($conn, $sql)) {
                echo json_encode(["success" => true]);
                error_log(" Добавлен новый \n", 3 , $file_path);
            }
            else{
                echo json_encode(["success"=> false]);
            }
        } else {
            error_log("Такой уже есть:" . mysqli_error($conn) . "\n", 3 , $file_path);
            $sql = "UPDATE ShopBasket SET amount = amount + 1 WHERE user_id = $user_id AND product_id = $product_id";
            if ($result = mysqli_query($conn, $sql)) {
                echo json_encode(["success" => true]);
                error_log(" Обновлен старый \n", 3 , $file_path);
            } else {
                echo json_encode(["success"=> false]);
            }
        }
        mysqli_close($conn);
    }
    break;
    case "3":{
        $sql = "SELECT * FROM ShopBasket WHERE (product_id = '$product_id' and user_id = '$user_id')";
        error_log("SQL request: $sql \n", 3 , $file_path);
        if ($result = mysqli_query($conn, $sql)) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            error_log("id:" . $id . "\n", 3 , $file_path);
            $sql = "DELETE FROM ShopBasket WHERE id = $id";
            header('Content-Type: application/json');
            if ($result = mysqli_query($conn, $sql)) {
                echo json_encode(["success" => true]);
                error_log(" Товар успешно удален \n", 3 , $file_path);
            } else {
                echo json_encode(["success"=> false]);
            }
        }
    }
    break;
    case "4":
    {
        $sql = "SELECT * FROM ShopBasket WHERE (product_id = '$product_id' and user_id = '$user_id')";
        error_log("SQL request: $sql \n", 3 , $file_path);
        if ($result = mysqli_query($conn, $sql)) {
            $sql = "UPDATE ShopBasket SET amount = amount + 1 WHERE user_id = $user_id AND product_id = $product_id";
            if ($result = mysqli_query($conn, $sql)) {
                echo json_encode(["success" => true]);
                error_log(" Инкремирован успешно \n", 3 , $file_path);
            } else {
                echo json_encode(["success"=> false]);
            }
        } 
        else {
             echo json_encode(["success"=> false]);
        }
        mysqli_close($conn);
    }
    break;
    case "5":
    {
        $sql = "SELECT * FROM ShopBasket WHERE (product_id = '$product_id' and user_id = '$user_id')";
        error_log("SQL request: $sql \n", 3 , $file_path);
        if ($result = mysqli_query($conn, $sql)) {
            $row = mysqli_fetch_assoc($result);
            $amount = $row["amount"];
            error_log("amount = $amount", 3 , $file_path);
            if($amount != 1)
            {
                $sql = "UPDATE ShopBasket SET amount = amount - 1 WHERE user_id = $user_id AND product_id = $product_id";
                if ($result = mysqli_query($conn, $sql)) {
                    echo json_encode(["success" => true]);
                    error_log(" Декремирован успешно \n", 3 , $file_path);
                } else {
                    echo json_encode(["success"=> false]);
                }
            }else echo json_encode(["success"=> false]);
        } 
        else echo json_encode(["success"=> false]);
        mysqli_close($conn);
    }
    break;
}
?>