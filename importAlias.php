<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";
/*
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;
*/
use data\satu\conflict as conflict1;
use data\dua\conflict as conflict2;
use function Helper\helpMe as help;
use const Helper\JUDUL as APP;
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;