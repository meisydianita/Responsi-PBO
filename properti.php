<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$meisy = new Person("Meisy","Bengkulu");

// manipulasi properti nama person
$meisy->nama = "Meisy";

// menampilkan hasil
echo "Nama : {$meisy->nama}" . PHP_EOL;
echo "<br>";
echo "Alamat : {$meisy->alamat}" . PHP_EOL;
echo "<br>";
echo "Negara : {$meisy->negara}" . PHP_EOL;