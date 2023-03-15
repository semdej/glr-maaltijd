<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="shortcut icon" href="logo(same folder as html).png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
<div class="container">


<div class="header">
<div class="header1"><img src="logo(same folder as html).png" alt="logo" class="logo"></div></a>
<div class="header2">
<a id="knop" href="index.html">Menu</a>
<a id="knop" href="index.html">Info</a>
<a id="knop1" href="index.html">Bestellen</a>
</div>
</div>

<div class="main">
<div class="logofront"><a></a></div>
</div>


<div class="submain">

<div class="submain1">
    <form style="max-width: 50rem; margin-left: auto; margin-right: auto;" action="verwerk.php" method="post">
        <label for="name">Naam:</label>
        <input type="text" name="name" id="name" />
        <br />
        <label for="lastname">Achternaam:</label>
        <input type="text" name="lastname" id="lastname" />
        <br />
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" />
        <br />
        <label for="pizzas">Product 1 (Naam & Prijs):</label>
        <select id="pizzas" name="pizzas">
            <option value="margarita">Margarita €7,80</option>
            <option value="marinara">Marinara €8,00</option>
            <option value="capricciosa">Capricciosa €8,30</option>
            <option value="quattroformaggi">Quattro Formaggi €8,00</option>
        </select>
        <br />
        <label for="drinks">Product 2 (Naam & Prijs):</label>
        <select id="drinks" name="drinks">
            <option value="cocacola">Coca Cola €2,30</option>
            <option value="cocacolazero">Coca Cola Zero €2,25</option>
            <option value="sprite">Sprite €2,15</option>
            <option value="redbull">Red Bull €3,00</option>
        </select>
        <br />
        <input type="submit" value="Bestel" />
    </form></div>

<div class="submain2">
Main 2
</div>

</div>


<div class="footer">
    <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
</div>
    
</body>
</html>