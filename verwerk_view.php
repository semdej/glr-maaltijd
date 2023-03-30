<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="shortcut icon" href="src/logo(same folder as html).png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d7ff45ea38.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="header1"><a href="Index.php"><img src="src/logo(same folder as html).png" alt="logo" class="logo"></div></a>
        <div class="header2">
            <a id="knop" href="index.html">Menu</a>
            <a id="knop" href="index.html">Info</a>
            <a id="knop1" href="index.html">Bestellen</a>
        </div>
    </div>

    <div class="main">
        <div class="logofront"><a></a></div>
        <h1 style="font-size: 2.5rem">We hebben uw bestelling ontvangen!</h1>

    </div>

    <div style="max-width: 50rem; margin-left: auto; margin-right: auto; text-align: center; margin-top: 0.5rem">
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