<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php

    $lexikon = [
    "Hej" => "Hello",
    "Hejdå" => "Goodbye",
    "Stanna" => "Stop",
    "Väg" => "Road",
    "Palla" => "Oh wow pls"
  ];

  foreach ($lexikon as $sv => $en) {
    echo "<li>$sv = $en</li>";
  };

  ?>
</body>
</html>
