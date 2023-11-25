<?php

$ibuKota = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Negara ASEAN Awal:</h3>
    <ul>
    <?php foreach ($ibuKota as $kota) : ?>
        <li><?=$kota;?></li>
        <?php endforeach; ?>
    
    </ul>
    
    $ibuKota = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>
<h3>Daftar Negara ASEAN Awal:</h3>
    <ul>
    <?php foreach ($ibuKota as $kota) : ?>
        <li><?=$kota;?></li>
        <?php endforeach; ?>
    </ul>


?>
</body>
</html>