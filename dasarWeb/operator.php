<?php
$a = 10;
$b = 5;

// Operator Aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

// Menampilkan hasil operator aritmatika
echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Pangkat: $pangkat <br><br>";

// Operator Perbandingan
$hasilSama             = $a == $b;
$hasilTidakSama        = $a != $b;
$hasilLebihKecil       = $a < $b;
$hasilLebihBesar       = $a > $b;
$hasilLebihKecilSama   = $a <= $b;
$hasilLebihBesarSama   = $a >= $b;

// Operator Identitas
$hasilIdentik          = $a === $b;
$hasilTidakIdentik     = $a !== $b;

// Menampilkan hasil operator perbandingan
echo "Hasil Sama: "; var_dump($hasilSama);
echo "<br>Hasil Tidak Sama: "; var_dump($hasilTidakSama);
echo "<br>Hasil Lebih Kecil: "; var_dump($hasilLebihKecil);
echo "<br>Hasil Lebih Besar: "; var_dump($hasilLebihBesar);
echo "<br>Hasil Lebih Kecil Sama: "; var_dump($hasilLebihKecilSama);
echo "<br>Hasil Lebih Besar Sama: "; var_dump($hasilLebihBesarSama);
echo "<br><br>";

// Menampilkan hasil operator identitas
echo "Hasil Identik (===): "; var_dump($hasilIdentik);
echo "<br>Hasil Tidak Identik (!==): "; var_dump($hasilTidakIdentik);
echo "<br><br>";

// Operator Logika
$hasilAnd  = $a && $b;
$hasilOr   = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan hasil operator logika
echo "Hasil AND (a && b): "; var_dump($hasilAnd);
echo "<br>Hasil OR (a || b): "; var_dump($hasilOr);
echo "<br>Hasil NOT a (!a): "; var_dump($hasilNotA);
echo "<br>Hasil NOT b (!b): "; var_dump($hasilNotB);
echo "<br><br>";

// Operator Assignment Gabungan
echo "Nilai awal a: $a <br>";
$a += $b;
echo "Setelah a += b, nilai a: $a <br>";

$a -= $b;
echo "Setelah a -= b, nilai a: $a <br>";

$a *= $b;
echo "Setelah a *= b, nilai a: $a <br>";

$a /= $b;
echo "Setelah a /= b, nilai a: $a <br>";

$a %= $b;
echo "Setelah a %= b, nilai a: $a <br>";
?>
