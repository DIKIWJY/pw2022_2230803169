<?php

// Simulasi tiga digit terakhir NRP
$nrpDigits = "456";

// Menentukan kategori berdasarkan tiga digit terakhir NRP
if ($nrpDigits % 2 == 0) {
    $kategori = "Genap";
} else {
    $kategori = "Ganjil";
}

// Membuat associative array dengan minimal 10 field data
$data = array(
    "Nama" => "John Doe",
    "NRP" => "123456",
    "Jurusan" => "Teknik Informatika",
    "IPK" => 3.75,
    "Kategori" => $kategori,
    "Gambar" => "path/to/uin.jpeg",
    "Alamat" => "Jl. Contoh No. 123",
    "Telepon" => "081234567890",
    "Email" => "john.doe@example.com",
    "Hobi" => "Membaca"
);

// Menampilkan data dalam tabel HTML
echo "<table border='1'>
        <tr>
            <th>Nama</th>
            <th>NRP</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Hobi</th>
        </tr>";

echo "<tr>";
foreach ($data as $field) {
    echo "<td>$field</td>";
}
echo "</tr>";

echo "</table>";

?>
