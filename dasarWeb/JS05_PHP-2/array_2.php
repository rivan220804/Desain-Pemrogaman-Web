<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4c77afff;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<h2>Data Dosen</h2>
<?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];

    echo "<table>";
    echo "<tr><th>Key</th><th>Value</th></tr>";
    foreach ($Dosen as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
?>
</body>
</html>
