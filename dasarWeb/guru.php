<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari terkecil ke terbesar
sort($nilaiSiswa);

// Hapus dua nilai terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

// Hapus dua nilai tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Hitung total nilai yang tersisa
$totalNilai = array_sum($nilaiSiswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";
?>
