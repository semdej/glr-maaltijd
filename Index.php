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
        <label for="product1">Product 1 (Naam & Prijs):</label>
        <input type="text" name="product1" id="product1" />
        <input type="number" name="price1" id="price1" />
        <br />
        <label for="product2">Product 2 (Naam & Prijs):</label>
        <input type="text" name="product2" id="product2" />
        <input type="number" name="price2" id="price2" />
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