<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bestellen.css">
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
<a id="knop1" href="bestellen.php">Bestellen</a>
</div>
</div>

<div class="main">
<div class="logofront"><a></a></div>
    <div class="maint">Bestellen</div>
</div>


<div class="submain">

<div class="submain1">
    <div class="form">
    <form class="form" style="max-width: 50rem; margin-left: auto; margin-right: auto;" action="verwerk.php" method="post">
        <label for="name">Naam:</label>
        <input class="forminput" type="text" name="name" id="name" required />
        <br />
        <label for="lastname">Achternaam:</label>
        <input class="forminput" type="text" name="lastname" id="lastname" required />
        <br />
        <label for="email">Email:</label>
        <input class="forminput" type="email" name="email" id="email" required />
        <br />
        <label for="pizzas">Pizza:</label>
        <select class="forminput" id="pizzas" name="pizzas">
            <option value="margarita">Margarita €7,80</option>
            <option value="marinara">Marinara €8,00</option>
            <option value="capricciosa">Capricciosa €8,30</option>
            <option value="quattroformaggi">Quattro Formaggi €8,00</option>
        </select>
        <br />
        <label for="drinks">Drinken:</label>
        <select class="forminput" id="drinks" name="drinks">
            <option value="cocacola">Coca Cola €2,30</option>
            <option value="cocacolazero">Coca Cola Zero €2,25</option>
            <option value="sprite">Sprite €2,15</option>
            <option value="redbull">Red Bull €3,00</option>
        </select>
        <br />
        <input class="forminput" type="submit" value="Bestel" />
    </form>
    </div>
</div>
</div>


<div class="footer">
    <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
</div>
    
</body>
</html>