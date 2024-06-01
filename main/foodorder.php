<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$hostname = "localhost:$port";
$username = 'azure';
$pass = '6#vWHD_$';
$database = 'localdb'; 

$connect = new mysqli($hostname, $username, $pass, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $food = $_POST["food"];
    $quantity = $_POST["quantity"];
    $requests = $_POST["requests"];

    // Insert data into database
    $sql = "INSERT INTO orders (name, phone, address, food, quantity, requests) VALUES ('$name', '$phone', '$address', '$food', '$quantity', '$requests')";
    $connect->query($sql);

    // Close connection
    $connect->close();
}

?>