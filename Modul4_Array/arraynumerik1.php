<?php 
$mahasiswa = ["Joni", "12346", "Sistem Iformasi", "joni@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
   <li><? = $mahasiswa[0] ?></li>
   <li><? = $mahasiswa[1] ?></li>
   <li><? = $mahasiswa[2] ?></li>
   <li><? = $mahasiswa[3] ?></li>
  </ul>
  
</body>
</html>