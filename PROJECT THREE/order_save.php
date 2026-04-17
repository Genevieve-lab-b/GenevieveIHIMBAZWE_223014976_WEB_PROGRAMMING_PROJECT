<?php
include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$menu = $_POST['menu'];
$address = $_POST['address'];
$order_date = $_POST['order_date'];

$sql = "INSERT INTO orders(fullname,email,phone,menu,address,order_date)
VALUES('$fullname','$email','$phone','$menu','$address','$order_date')";

mysqli_query($conn, $sql);

echo "Order placed successfully!";
?>