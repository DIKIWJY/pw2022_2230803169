<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul 2 - Latihan 1</title>
  <style>
    .kotak {

    }
    .clear{

    }
  </style>
</head>
<body>
<?php for ($i=1; $i <=5 ; $i++) : ?>
  <tr>
  <?php for ($j=1; $j<=5 ; $j++) : ?>
    <td><? = "$i,$j"; ?></td>
    <?php endfor;?>
  </tr>
  <?php endfor;?>
</body>
</html>