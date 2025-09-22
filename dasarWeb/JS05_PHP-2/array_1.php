<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks dengan Loop</h2>
<?php
    $Listdosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];
    $urutan = [2,0,1]; // urutan yang diinginkan

    foreach($urutan as $i){
        echo $Listdosen[$i] . "<br>";
    }
?>
</body>
</html>
