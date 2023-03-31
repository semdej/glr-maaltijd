<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/index.css">
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
    <div class="maint">Signore Pizza</span></div>
</div>


<div class="submain">

<div class="submain1">
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

<div class="submain2">
    <h1>Bezorgen</h1>
    <p>Geen zin om de deur uit te gaan? <br>
        Bestel snel en eenvoudig op onze eigen website
        en wij zorgen dat het eten wordt bezorgd op het
        door jou gekozen tijdstip. Wil je direct kunnen genieten
        van je maaltijd? Betaal direct online snel en veilig met iDEAL,
        zo hoef je aan de deur<br>niets meer af te rekenen.</p>
    <div>
        <h1>Bezorgtijden</h1>
        <table>
            <tr>
                <td>maandag:</td>
                <td>15:45-00:40</td>
            </tr>
            <tr>
                <td>dinsdag:</td>
                <td>15:45-00:40</td>
            </tr>
            <tr>
                <td>woensdag:</td>
                <td>15:45-00:40</td>
            </tr>
            <tr>
                <td>donderdag:</td>
                <td>15:45-00:40</td>
            </tr>
            <tr>
                <td>vrijdag:</td>
                <td>15:45-01:40</td>
            </tr>
            <tr>
                <td>zaterdag:</td>
                <td>15:45-01:40</td>
            </tr>
            <tr>
                <td>zondag:</td>
                <td>15:45-00:40</td>
            </tr>
        </table>
    </div>
    <br><br>
    <h1 class="locatie">Locatie</h1>
    <p>Rietdekkerweg 131<br>3068 GW Rotterdam<br>010 220 0114</p>
</div>

</div>


<div class="footer">
    <a>Copyright © 2023 - SignorePizza®. All rights reserved.</a>
</div>
    
</body>
</html>