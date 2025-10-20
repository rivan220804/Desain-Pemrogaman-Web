<?php
// Proses PHP untuk menghitung jumlah digit
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = trim($_POST["angka"]);

    // Validasi agar hanya angka yang diterima
    if ($angka === "" || !is_numeric($angka)) {
        $hasil = "<span style='color:red;'>Masukkan hanya angka yang valid!</span>";
    } else {
        // Hitung jumlah digit
        $jumlah_digit = strlen(str_replace("-", "", $angka)); // hapus tanda minus jika ada
        $hasil = "Angka <strong>$angka</strong> memiliki <strong>$jumlah_digit</strong> digit.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menghitung Jumlah Digit Angka</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      font-size: 16px;
      text-align: center;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #0077ff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #005fcc;
    }
    p {
      margin-top: 15px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Hitung Jumlah Digit Angka</h2>
    <form id="digitForm" method="POST" onsubmit="return validateForm()">
      <input type="text" name="angka" id="angka" placeholder="Masukkan angka, misal 1000" autocomplete="off">
      <button type="submit">Hitung Digit</button>
    </form>
    <p id="pesanError"></p>

    <?php if ($hasil): ?>
      <p><?= $hasil ?></p>
    <?php endif; ?>
  </div>

  <script>
    function validateForm() {
      const input = document.getElementById("angka").value.trim();
      const pesan = document.getElementById("pesanError");
      pesan.textContent = "";

      if (input === "") {
        pesan.textContent = "Input tidak boleh kosong!";
        pesan.style.color = "red";
        return false;
      }

      if (isNaN(input)) {
        pesan.textContent = "Masukkan hanya angka!";
        pesan.style.color = "red";
        return false;
      }

      return true; // lanjut ke PHP
    }
  </script>
</body>
</html>
