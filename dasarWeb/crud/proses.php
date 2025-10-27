<?php
include('koneksi.php');

// Selalu ambil 'aksi' dari URL
$aksi = $_GET['aksi'];

// 1. Logika untuk TAMBAH DATA
if ($aksi == 'tambah') {
    // Ambil data POST hanya saat aksi = 'tambah'
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    // --- PERBAIKAN 1 ---
    // Menambahkan tanda kurung () setelah VALUES
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} 

// 2. Logika untuk UBAH DATA
elseif ($aksi == 'ubah') {
    if (isset($_POST['id'])) {
        // Ambil data POST only saat aksi = 'ubah'
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        // --- PERBAIKAN 2 ---
        // Menambahkan tanda kutip '' di sekitar $id pada WHERE
        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} 

// 3. Logika untuk HAPUS DATA
elseif ($aksi == 'hapus') {
    if (isset($_GET['id'])) {
        // Ambil data GET (id) hanya saat aksi = 'hapus'
        $id = $_GET['id'];

        // Kode ini sudah benar di gambar Anda
        $query = "DELETE FROM anggota WHERE id='$id'";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} 

// 4. Jika 'aksi' tidak dikenal
else {
    header("Location: index.php");
}

mysqli_close($koneksi);
?>