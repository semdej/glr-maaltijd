<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/order.css">
    <link rel="shortcut icon" href="src/pic/logo.png" type="image/x-icon">
    <title>Bestelling Bekijken</title>
</head>
<body>
<div class="container">


    <div class="header">
        <a href="index.php"><div class="header1"><img src="src/pic/logo.png" alt="logo" class="logo"></div></a>
        <div class="header2">
            <a id="knop" href="order.php">Order</a>
            <a id="knop" href="menu.php">Menu</a>
            <a id="knop1" href="menu.php">Bestellen</a>
        </div>
    </div>

    <div class="main">
        <div class="logofront"><a></a></div>
        <div class="maint">Order</div>
    </div>


    <div class="submain">
        <form style="max-width: 50rem; margin-left: auto; margin-right: auto;" action="showorder.php" method="post">
            <label for="ordernummer">Ordernummer:</label>
            <input type="text" name="ordernummer" id="ordernummer" required />
            <br />
            <input type="submit" value="Bekijken" class="submitbutton"/>
        </form>
        </div>
    </div>


    <div class="footer">
        <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
    </div>

</body>
</html>