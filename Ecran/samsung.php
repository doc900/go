<?php
$pdo = new PDO("sqlite:./data.sql", null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$products = $pdo->query("SELECT * FROM products LIMIT 20")->fetchAll();
dd($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecran</title>
    <link rel="stylesheet" href="samsung.css">
    <?php require '/wamp64/www/Allsite/elements/header.php'; ?>
</head>
<body>
      <table>
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Model</th>
                  <th>Prix</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>SAMSUNG J7</td>
                  <td>SM-J727t1</td>
                  <td>450$HT</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>1</td>
                  <td>SM-J3</td>
                  <td>250$HT</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>1</td>
                  <td>SM-G543</td>
                  <td>5600$HT</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>1</td>
                  <td>SM-A02S</td>
                  <td>600$HT</td>
              </tr>
          </tbody>
      </table>
</body>
</html> 