<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "Meisy Dianita";
$manager->sayHello("Tanya");

echo "<br>";
// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vp = new VicePresident();
$vp->nama = "Tanya Dwi Agustin";
$vp->sayHello("Meisy");
