<!DOCTYPE html>
<html lang="en">
<?php include "../../links.php"
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Övning 4</title>
</head>
<body>
  <?php
    linkList();
    include "../fourth-test/header.php";
  function timeText() {
    $time = (int) date('T');
    $texts = [
      8 => "God morgon!",
      12 => "Lunchrast",
      13 => "God förmiddag. :)",
      17 => "Ha en bra eftermiddag",
      21 => "God kväll"
    ];

    foreach ($texts as $timeStamps => $text) {
      if ($time < $timeStamps) {
        return $text;
      }
    }
  }

  $getTimeText = timeText();
  ?>
  <h3><?= $getTimeText?></h3>

</body>
</html>
