<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/menu.css">
    <link rel="shortcut icon" href="src/pic/logo.png" type="image/x-icon">
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
        <div class="maint">Menu</span></div>
        <div class="form">
            <form class="form" style="max-width: 50rem; margin-left: auto; margin-right: auto;" action="bestellen.php" method="post">
                <h1>Bestellen</h1>
                <label for="name">Adres:</label>
                <input placeholder="Adres, b.v. Amstelplein 10" class="forminput" type="text" name="adress" id="adress" required />
                <br />
                <input class="forminput" type="submit" value="Verder" />
            </form>
        </div>
    </div>


    <div class="menu_items">
        <!--Pizza's-->
        <div class="item">
            <h1>Pizza Margherita</h1>
            <p>Tomaat en kaas</p>
            <h3>€7,80</h3>
        </div>
        <div class="item">
            <h1>Pizza Margherita</h1>
            <p>Tomaat, kaas en diverse soorten vis</p>
            <h3>€8,00</h3>
        </div>
        <div class="item">
            <h1>Pizza Capricciosa</h1>
            <p>Tomaat, kaas, ham,<br> champignons en artisjok</p>
            <h3>€8,30</h3>
        </div>
        <div class="item">
            <h1>Pizza Quattro Formaggi</h1>
            <p>Tomaat en vier verschillende soorten Italiaanse kaas</p>
            <h3>€8,00</h3>
        </div>
        <!--Drankjes-->
        <div class="itemd">
            <h1>Coca Cola</h1>
            <h3>€2,30</h3>
        </div>
        <div class="itemd">
            <h1>Coca Cola Zero</h1>
            <h3>€2,25</h3>
        </div>
        <div class="itemd">
            <h1>Sprite</h1>
            <h3>€2,15</h3>
        </div>
        <div class="itemd">
            <h1>Red Bull</h1>
            <h3>€3,00</h3>
        </div>
    </div>


    <div class="footer">
        <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
    </div>

</body>
</html>