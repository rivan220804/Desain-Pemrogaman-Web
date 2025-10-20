<?php
$myArray = array(); // Array kosong

if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
    echo "Silakan isi data pada array terlebih dahulu.";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
    echo "Data di dalam array dapat digunakan.";
}
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br>";
    echo "Silakan buat dan isi variabel tersebut terlebih dahulu.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br>";
    echo "Variabel siap digunakan dalam program.";
}
?>
