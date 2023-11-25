<?php
$var2 = "";

if (empty($var2)) {
    echo "\$var2 kosong atau belum diatur.";
} else {
    echo "\$var2 tidak kosong.";
}

$var3 = null;

if (isset($var3) && !empty($var3)) {
    echo "\$var3 sudah diatur dan tidak kosong.";
} else {
    echo "\$var3 belum diatur, atau kosong.";
}
?>

