<!DOCTYPE html>
<?php include "../links.php"?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Övning 3</title>
</head>
<body>
  <?php linkList() ?>
  <main>
    <?php
      $someArray = [
        "bord" => "12",
        "frukt" => ["mango", "päron", "avokado"],
        "extra" => "mint"
      ];

      $output = "Beställingen ska till bord {$someArray['bord']}. Den ska innehålla {$someArray['frukt'][0]}, {$someArray['frukt'][1]}, {$someArray['frukt'][2]}, och {$someArray['extra']}.";
      echo $output;
    ?>
  </main>

</body>
</html>
