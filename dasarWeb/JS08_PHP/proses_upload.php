<?php
$targetDir = "uploads/";

// Jika folder belum ada, buat folder uploads
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (!empty($_FILES['images']['name'][0])) {
    $totalFiles = count($_FILES['images']['name']);
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['images']['name'][$i]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Cek tipe file
        if (in_array($fileType, $allowedTypes)) {
            // Pindahkan file ke folder uploads
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath)) {
                echo "<p>File <b>$fileName</b> berhasil diunggah.</p>";
                // Menampilkan thumbnail gambar
                echo "<img src='$targetFilePath' width='200' style='margin:10px 0; border:1px solid #ccc;'><br>";
            } else {
                echo "<p style='color:red;'>Gagal mengunggah $fileName.</p>";
            }
        } else {
            echo "<p style='color:red;'>$fileName bukan file gambar yang valid.</p>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
