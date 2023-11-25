<?php

$ibuKota = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

echo "<h3>Daftar Negara ASEAN Awal:</h3>";
echo "<ul>";
foreach ($ibuKota as $kota) {
    echo "<li>$kota</li>";
}
echo "</ul>";


$ibuKota[] = "Laos";
$ibuKota[] = "Filipina";
$ibuKota[] = "Myanmar";

echo "<h3>Daftar Negara ASEAN Baru:</h3>";
echo "<ul>";
foreach ($ibuKota as $kota) {
    echo "<li>$kota</li>";
}
echo "</ul>";

?>
