<?php

$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$grade = ($uts + $uas + $tugas) / 3;

echo '<br>Nama : ' . $nama;
echo '<br>Mata Kuliah : ' . $matkul;
echo '<br>UTS : ' . $uts;
echo '<br>UAS : ' . $uas;
echo '<br>Tugas : ' . $tugas;
echo "<br>Rata-rata Nilai : " . round(($uts + $uas + $tugas) / 3);
echo("<br>");
if ($grade>=85)
echo("grade : <b>A</b>");
elseif ($grade>=70)
echo("grade : <b>B</b>");
elseif ($grade>=56)
echo("grade : <b>C</b>");
elseif ($grade>=36)
echo("grade : <b>D</b>");
elseif ($grade>=0)
echo("grade : <b>E</b>");
?>