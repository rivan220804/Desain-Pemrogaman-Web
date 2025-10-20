<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buah = $_POST["buah"];
    $warna = isset($_POST["warna"]) ? implode(", ", $_POST["warna"]) : "Tidak ada warna dipilih";
    $jenis_kelamin = $_POST["jenis_kelamin"] ?? "Belum memilih";

    echo "<h3>Hasil Input:</h3>";
    echo "Buah yang dipilih: <b>$buah</b><br>";
    echo "Warna favorit: <b>$warna</b><br>";
    echo "Jenis kelamin: <b>$jenis_kelamin</b><br>";
}
?>
