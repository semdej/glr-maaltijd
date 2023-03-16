<?php
$servername = "45.87.81.153";
$username = "u758344844_glr";
$password = "GLRlogin1!";
$dbname = "u758344844_glr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$string = implode($row);


if ($result->num_rows > 0) {
    echo "<table><tr><th>Orderid</th><th>Name</th><th>Lastname</th><th>Email</th><th>Product1</th><th>Product2
    </th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["orderid"]. "</td><td>" . $row["name"]."</td><td>" . $row["lastname"]."</td><td>" . $row["email"]."</td><td>" . $row["product1"]."</td><td>" . $row["product2"]."</td>";
    }
    echo "</table>";
}

$conn->close();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Bestelling Bekijken</title>
</head>
<body>
<form action="update_order.php" method="post">
    <label for="ordernummer">Ordernummer:</label>
    <input type="text" name="ordernummer" id="ordernummer" />
    <br />
    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="preparing">Bereiden</option>
        <option value="delivering">Bezorgen</option>
        <option value="delivered">Bezorgd</option>
    </select>
    <input id="mark" type="submit" value="Update" />
</form>
</body>
</html>