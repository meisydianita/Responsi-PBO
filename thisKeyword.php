<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$meisy = new Person("Meisy","Bengkulu");

// tambahkan value nama di object
$meisy->nama = "Meisy";

// panggil function sayHelloNull dengan parameter
$meisy->sayHello("Dianita");
echo "<br>";

// buat object dari kelas person
$dianita = new Person ("Dianita", "Curup");

// tambahkan value nama di object
$dianita->sayHello("Meisy");

// panggil function sayHelloNull dengan parameter null
echo "<br>";
$dianita->sayHelloNull("Meisy");