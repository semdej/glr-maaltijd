<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/showorder.css">
    <link rel="shortcut icon" href="src/pic/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d7ff45ea38.js" crossorigin="anonymous"></script>
    <title>Home</title>
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
        <h1 style="font-size: 2.5rem">We hebben uw bestelling ontvangen!</h1>

    </div>

    <div style="max-width: 50rem; margin-left: auto; margin-right: auto;" class="order">
        <a href="order.php" style="color: darkgreen; text-decoration: none;">Klik hier om uw bestelling te bekijken</a>
        <p> Ordernummer: <?= "$orderid" ?> </p>
        <img style="max-width: 6rem" src="<?= $imgByStatus->{$status} ?>" alt="status" class="status">
    </div>
</div>

<div class="footer">
    <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
</div>

</body>
</html>