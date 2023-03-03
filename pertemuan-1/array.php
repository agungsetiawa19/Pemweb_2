<?php
// array index
$animals = ['kambing', 'kucing', 'ayam'];

// akses array
foreach($animals as $animal){
    echo $animal . "<br>";
}

// array assosiatif
$student = [
    'nama' => 'agung stwn',
    'major' => 'sitem',
    'age' => 20
];

echo $student["nama"];