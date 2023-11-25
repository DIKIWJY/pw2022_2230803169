<?php

// Membuat associative array negara ASEAN beserta ibukotanya
$negaraAsean = array(
    "Indonesia" => "D.K.IJakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw",
);

// Menampilkan isi associative array sebagai list pada HTML
echo "<h3>Daftar Negara ASEAN dan Ibukota:</h3>";
echo "<ul>";
foreach ($negaraAsean as $ibuKota => $kota) {
    echo "<li>$ibuKota : $kota</li>";
}
echo "</ul>";


?>
