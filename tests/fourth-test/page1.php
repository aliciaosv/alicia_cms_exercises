<!DOCTYPE html>
<html lang="en">
<?php include "../../links.php";
include "../fourth-test/footer.php";
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vad är det för dag?</title>
</head>
<body>
  <?php
      linkList();
      include "../fourth-test/header.php";
  function getDateInfo() {

    $weekday = date('D');
    $today = date('d');
    $month = date('F');
    $amIOdd = ((int) $today % 2 === 0) ? "jämnt" : "udda";

    $datePhrase = "Idag är det $weekday den $today $month, ";
    $datePhrase .= "<br> den $today är ett $amIOdd datum";

    return $datePhrase;
  }
  echo getDateInfo();
  ?>
  <?php
  aFoot()
  ?>
</body>
</html>
