<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Meisy");
var_dump($company);

$company->programmer = new BackendProgrammer("Dianita");
var_dump($company);

$company->programmer = new FrontendProgrammer("Meme");
var_dump($company);
echo "<br>";
sayHelloProgrammer(new Programmer("Meisy"));
echo "<br>";
sayHelloProgrammer(new BackendProgrammer("Dianita"));
echo "<br>";
sayHelloProgrammer(new FrontendProgrammer("Meme"));
