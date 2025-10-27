<?php
include "auth.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token']; ?>">
    <title>Data Anggota</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    
    <style>
        .text-danger {
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color:#fff;">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin: 30px 0;">Data Anggota</h2>

        <form method="post" id="form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                        <p class="text-danger" id="err_jenis_kelamin"></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <hr>

        <div class="data"></div> 
    </div>

    <div class="text-center" style="margin: 20px 0;">@ 2018 Copyright...</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        
        // Setup CSRF token (tetap diperlukan)
        $.ajaxSetup({
            headers: {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        // Load data anggota saat halaman dimuat
        $('.data').load("data.php");

        // === SCRIPT BARU DARI GAMBAR ANDA (DENGAN PENYESUAIAN jQuery) ===
        $('#simpan').click(function() {
            var data = $('#form-data').serialize();
            
            // Ambil nilai untuk validasi (menggunakan jQuery agar konsisten)
            var nama = $('#nama').val();
            var alamat = $('#alamat').val();
            var no_telp = $('#no_telp').val();
            var jenkel1_checked = $('#jenkel1').is(':checked');
            var jenkel2_checked = $('#jenkel2').is(':checked');

            // 1. Validasi Nama
            if (nama == "") {
                $('#err_nama').text("Nama Harus Diisi");
            } else {
                $('#err_nama').text("");
            }

            // 2. Validasi Alamat
            if (alamat == "") {
                $('#err_alamat').text("Alamat Harus Diisi");
            } else {
                $('#err_alamat').text("");
            }

            // 3. Validasi Jenis Kelamin
            if (jenkel1_checked == false && jenkel2_checked == false) {
                $('#err_jenis_kelamin').text("Jenis Kelamin Harus Dipilih");
            } else {
                $('#err_jenis_kelamin').text("");
            }

            // 4. Validasi No Telepon
            if (no_telp == "") {
                $('#err_no_telp').text("No Telepon Harus Diisi");
            } else {
                $('#err_no_telp').text("");
            }

            // 5. Cek jika semua validasi lolos, baru kirim AJAX
            // (Logika '||' (ATAU) untuk jenis kelamin sudah benar)
            if (nama != "" && alamat != "" && (jenkel1_checked == true || jenkel2_checked == true) && no_telp != "") {
                $.ajax({
                    type: 'POST',
                    url: 'form_action.php', // URL dari script baru Anda
                    data: data,
                    success: function() {
                        // Muat ulang data
                        $('.data').load("data.php");
                        // Reset form
                        $('#id').val(''); // Kosongkan ID
                        $('#form-data')[0].reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            }
        });
        // === BATAS SCRIPT BARU ===
    });
    </script>
</body>
</html>