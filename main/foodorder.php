<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$server = "localhost:51553";
$username = "azure";
$password = "6#vWHD_$";
$database = 'localdb';

// Create connection
$connect = new mysqli($server, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die('Connection failed: ' . $connect->connect_error);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize POST data
    $name = $connect->real_escape_string($_POST['name']);
    $phone = $connect->real_escape_string($_POST['phone']);
    $address = $connect->real_escape_string($_POST['address']);
    $food = $connect->real_escape_string($_POST['food']);
    $quantity = $connect->real_escape_string($_POST['quantity']);
    $requests = $connect->real_escape_string($_POST['requests']);

    // Prepare the SQL statement
    $sql = "INSERT INTO test (name, phone, address, food, quantity, requests)
            VALUES ('$name', '$phone', '$address', '$food', '$quantity', '$requests')";

    // Execute the query
    if ($connect->query($sql) === TRUE) {
        echo 'Your order has successfully been placed.';
    } else {
        echo 'ERROR: ' . $sql . '<br>' . $connect->error;
    }
} else {
    echo 'Invalid request method.';
}

// Close the connection
$connect->close();

?>
