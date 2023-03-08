<?php
$NIM= $_POST['NIM'];
$nama= $_POST['nama'];
$prodi= $_POST['prodi'];
$gender= $_POST['gender'];
$skill= $_POST['skill'];
$domisili= $_POST['domisili'];
$email= $_POST['email'];

echo "NIM : $NIM";
echo "<br> Nama : $nama";
echo "<br> Program Studi : $prodi";
echo "<br> Jenis Klamin : $gender";
echo "<br> Programming : ";
foreach($skill as $skil){
    echo $skil . ", ";
}
echo "<br> Tempat Domisili :  $domisili";
echo "<br> Email : $email";
?>

