<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1</title>
    <style>
        .nadruk {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div style="max-width: 50rem; margin-left: auto; margin-right: auto;">
    <p>
        <span class="nadruk">Naam:</span> <?= "$name" ?>
    </p>
    <p>
        <span class="nadruk">Achternaam:</span> <?= "$lastname" ?>
    </p>
    <p>
        <span class="nadruk">Email:</span> <?= "$email" ?>
    </p>
    <p>
        <span class="nadruk">Bestelde producten:</span>
    <p> <?= "$product1" ?> <?= "$price1" ?> </p>
    <p> <?= "$product2" ?> <?= "$price2" ?> </p>
    <p> <?= "$orderid" ?> </p>
    <p>
        <span class="nadruk">Status: <?= "$status" ?></span>
</div>
</body>
</html>