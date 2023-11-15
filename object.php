<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$meisy = new Person("Meisy","Bengkulu");

// manipulasi properti nama, alamat, negara

$meisy->nama = "Meisy";
$meisy->alamat = "Bengkulu";
$meisy->negara = "Indonesia";

// menampilkan hasil
echo "Nama : {$meisy->nama}" . PHP_EOL;
echo "<br>";
echo "Alamat : {$meisy->alamat}" . PHP_EOL;
echo "<br>";
echo "Negara : {$meisy->negara}" . PHP_EOL;