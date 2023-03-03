<?php
if(isset($GET)){
$nama = $_GET["Nama"];
$matkul = $_GET["Matkul"];
$uts = $_GET["uts"];
$uas = $_GET["uas"];
$praktikum = $_GET["praktikum"];

echo "Nama: $nama <br>";
echo "Mata kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Niali UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum <br>";
echo "Rata-Rata Niali: " . round(($uts + $uas + $praktikum) / 3, 2);
} 