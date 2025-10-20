<?php
$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.<br>";
    echo "Selamat, Anda memenuhi batas usia dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
    echo "Silakan periksa kembali nilai variabel 'umur'.";
}
?>
