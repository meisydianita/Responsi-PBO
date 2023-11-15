<?php

// membuat kelas person
class Person{
    // membuat properti
    var string $nama;

    // gunakan nullable properti
    var ?string $alamat = null;

    // gunakan default value untuk properti 
    var string $negara = "Indonesia";

    // buat function sayHello
    function sayHello(string $nama){
        echo "Hello $nama" . PHP_EOL;
    }

    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $nama)
    {
        if (is_null($nama)) {
            echo "Hi, Nama Saya $this->nama" . PHP_EOL;
        } else {
            echo "Hi $nama, Nama Saya $this->nama" . PHP_EOL;
        }
    }

    // buat const author
    const PENGAJAR = "Meisy Dianita";

    // buat function info untuk self keyword
    function info()
    {
        echo "Nama Pengajar : " . self::PENGAJAR . PHP_EOL;
    }

    // buat function constructor
   function __construct(string $nama, ?string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // buat function destructor
    function __destruct()
    {
        echo "<br>";
        echo "Object person $this->nama is destroyed" . PHP_EOL;
    }
}
