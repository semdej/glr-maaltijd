<?php
$servername = "45.87.81.153";
$username = "u758344844_glr";
$password = "GLRlogin1!";
$dbname = "u758344844_glr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, lastname, email, status, product1, price1, product2, price2 FROM orders WHERE orderid='$orderid'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$name = $row['name'];
$lastname = $row['lastname'];
$status = $row['status'];
$email = $row['email'];
$product1 = $row['product1'];
$price1 = $row['price1'];
$product2 = $row['product2'];
$price2 = $row['price2'];

if ($status < 1)
{
    $status = "Aan het bereiden";
}
else
{
    $status = "Onderweg";
}

$conn->close();