<?php

// import data/person.php
require_once "data/Person.php";

// buat define
define("JUDUL", "Belajar Pemrograman Berorientasi Objek");

// buat const app version
const APP_VERSION = "1.0.0";

// tampilkan hasil
echo JUDUL . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::PENGAJAR . PHP_EOL;
