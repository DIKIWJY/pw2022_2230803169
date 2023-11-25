<?php

// Membuat array
$warnaBalon = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan isi array
echo "Balonku ada lima. <br> Rupa-rupa warna-nya <br> ";
echo implode(", ", $warnaBalon); // Menggabungkan nilai array dengan koma dan spasi
echo " dan biru. <br>Meletus balon " . $warnaBalon[0] . " DOR!!! <br>Hatiku sangat kacau.";

?>
