<?php

require_once "data/Product.php";

$product = new Product("Mouse", 85000);

// tampilkan product get name
echo $product->getName() .  PHP_EOL;
echo "<br>";
// tampilkan product get price
echo $product->getPrice() .  PHP_EOL;
echo "<br>";
$dummy = new ProductDummy("Charger Laptop Lenovo", 350000);

$dummy->info();