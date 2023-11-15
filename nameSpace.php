<?php

// buat namespace
// import data dari conflict
require_once "data/conflict.php";

// buat obeject dari namespace yang di buat
$conflict1 = new data\satu\conflict;
$conflict2 = new data\dua\conflict;

// import data helper
require_once "data/helper.php";

// tampilkan helper menggunakan echo
echo Helper\JUDUL . PHP_EOL;

// masukan Helper\helpMe();
echo "<br>";
Helper\helpMe();