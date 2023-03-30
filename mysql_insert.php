<?php
$servername = "45.87.81.153";
$username = "u758344844_glr";
$password = "GLRlogin1!";
$dbname = "u758344844_glr";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `orders` (adress, orderid, name, lastname, email, product1, price1, product2, price2) 
VALUES ('$adress', '$orderid', '$name','$lastname','$email', '$product1', '$price1', '$product2', '$price2')";
$result = $conn->query($sql);

$conn->close();