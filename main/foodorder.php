<?php

$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server = "localhost:$port";
$username = "root";
$pass = "password";

$connect = new mysqli($hostname, $username, $pass, $database);

if ($connect->connect_error) {
	die('Connection failed ' . $connect->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$food = $_POST['food'];
$quantity = $_POST['quantity'];
$requests = $_POST['requests'];

$mysql = "INSERT INTO test (name,phone,address,food,quantity,requests)
		  VALUES ('$name','$phone','$address','$food','$quantity','$requests')";

if ($connect->query($mysql) === TRUE) {
	echo 'Your order has succesfully been placed.';
} else {
	echo 'ERROR: ' . $mysql . '<br>' . $connect->error;
}

$connect->close();

?>