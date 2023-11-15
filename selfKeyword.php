<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$meisy = new Person("Meisy","Bengkulu");

// panggil function
$meisy->sayHello("Meisy");

// panggil self keyword
echo "<br>";
$meisy->info();