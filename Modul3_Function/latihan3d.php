<?php

function hitungFaktorial($angka)
{
    if ($angka < 0) {
        return "Faktorial hanya didefinisikan untuk bilangan bulat non-negatif.";
    } elseif ($angka == 0 || $angka == 1) {
        return 1;
    } else {
        $hasil = 1;
        for ($i = 2; $i <= $angka; $i++) {
            $hasil *= $i;
        }
        return $hasil;
    }
}

// Contoh penggunaan fungsi
$angka = 5;
$hasilFaktorial = hitungFaktorial($angka);
echo "Faktorial dari $angka  =  " . $hasilFaktorial;

?>
