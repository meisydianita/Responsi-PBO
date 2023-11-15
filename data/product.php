<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
       echo "Nama Produk : "; return $this->name;
    }

    public function getPrice(): int
    {
        echo "Harga Produk : "; return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Nama Produk : $this->name" . PHP_EOL;
        echo "<br>";
        echo "Harga Produk : $this->price" . PHP_EOL;
    }

}