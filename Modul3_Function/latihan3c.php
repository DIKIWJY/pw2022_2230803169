<?php

function hitungPangkat($angka, $pangkat)
{
    return $angka ** $pangkat;
}

// Contoh penggunaan fungsi
$hasilPangkat = hitungPangkat(5, 4); // Menghitung 2 pangkat 3
echo "5 pangkat 4 =  " . $hasilPangkat;

?>
