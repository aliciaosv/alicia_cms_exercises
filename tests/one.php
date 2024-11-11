<!DOCTYPE html>
<?php include "../links.php" ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php linkList() ?>
  <main>
    <?php
      $varOne = "Hello";
      $varTwo = "Wörld";

      $someArray = [
        "Ett",
        "Litet",
        "Värde"
      ];

      echo "
      <h2>Övning 1</h2>
      <p>$varOne, $varTwo, $someArray[0] $someArray[1] $someArray[2]</p>
      "
    ?>

  </main>
</body>
</html>
