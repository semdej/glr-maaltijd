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


if (isset($_POST['mark'])) {
    $sql = "UPDATE orders SET status='$statusupdate' WHERE orderid='$orderid'";
} else if (isset($_POST['delete'])) {
    $sql = "DELETE FROM orders WHERE orderid='$orderid'";
}
$result = $conn->query($sql);
header("Location: admin.php");

$conn->close();