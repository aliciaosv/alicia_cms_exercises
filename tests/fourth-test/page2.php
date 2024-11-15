<!DOCTYPE html>
<html lang="en">
<?php include "../../links.php";
include "../fourth-test/footer.php";
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    linkList();
    include "../fourth-test/header.php";
    ?>
  <h3>Nians gångertabell: </h3>
  <?php

  $n = 9;
  for ($i = 1; $i < 11; $i++) {
    $s = $n * $i;

    $table = "<br> $n * $i = $s <br>";
    echo $table;
  };
  ?>
  <?php
  aFoot()
  ?>
</body>
</html>
