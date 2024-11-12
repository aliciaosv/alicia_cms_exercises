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
      function is_prime($number) {
        if ($number % 2 == 0 || $number % 3 == 0) return false;
        for ($i = 5; $i * $i <= $number; $i += 6) {
          if ($number % $i == 0 || $number % ($i + 2) == 0) return false;
        }

        return true;
      }
      $randomNumber = 11;
      echo is_prime($randomNumber) ? "$randomNumber är ett primtal" : "$randomNumber är inte ett primtal";
      ?>
  </main>
</body>
</html>
