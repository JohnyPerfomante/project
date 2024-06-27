<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Tomaxa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Підготовка даних з POST
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $product_id = $_POST['product_id'];
    $accessories = $_POST['quantity'];
    $count = $_POST['product_quantities'];
    $total_price = $_POST['totalCost'];
    $comment = $_POST['comments'];

    // SQL-запит для вставки даних у базу даних
    $sql = "INSERT INTO orders (first_name, product_id, phone, email, address, accessories, count, total_price, comment)
            VALUES ('$first_name', '$product_id', '$phone', '$email', '$address', '$accessories', '$count', '$total_price', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false, "error" => $conn->error));
    }

    $conn->close();
?>
