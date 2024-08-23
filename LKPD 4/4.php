<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
  for ($i = 2; $i >= 1; $i--) {
      for ($j = 10; $j >= 1; $j--) {
          echo "$i x $j = " . ($i * $j) . "<br><br>";
      }
  }
  echo "<br>";
  echo "<br>";
    ?>
</body>
</html>