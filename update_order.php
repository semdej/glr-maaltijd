<?php
$servername = "45.87.81.153";
$username = "u758344844_glr";
$password = "GLRlogin1!";
$dbname = "u758344844_glr";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$orderid = $_POST['ordernummer'];
$statusupdate = $_POST['status'];

$sql = "UPDATE orders SET status='$statusupdate' WHERE orderid='$orderid'";
$result = $conn->query($sql);

$conn->close();