<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman PHP</title>
</head>
<body>
    <h2>Form Input Aman</h2>

    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil dan amankan input dari form
        $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];

        // Langkah 6: Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3>Data Berhasil Diproses!</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "<h3 style='color:red;'>Email tidak valid! Silakan masukkan email yang benar.</h3>";
        }
    }
    ?>
</body>
</html>
