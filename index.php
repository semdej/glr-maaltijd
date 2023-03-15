<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Bestellen</title>
  </head>
  <body>
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
      <label for="vak1">Product 1 (Naam & Prijs):</label>
      <input type="text" name="product1" id="product1" />
      <input type="number" name="price1" id="price1" />
      <br />
      <label for="vak2">Product 2 (Naam & Prijs):</label>
      <input type="text" name="product2" id="product2" />
      <input type="number" name="price2" id="price2" />
      <br />
      <input type="submit" value="Bestel" />
    </form>
  </body>
</html>