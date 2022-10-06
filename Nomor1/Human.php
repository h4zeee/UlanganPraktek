<?php

class Human
{

    public $name;
    public $umur;
    public $Aktif;
    public $Jurusan;

}

$obj = new Human();
$obj->name = "Arief";
$obj->umur = 16;
$obj->aktif = 1;
$obj->Jurusan = "rekayasa perangkat lunak";

echo "nama: " . $obj->name . "<br>";
echo "Umur: " . $obj->umur  . "<br>";
echo "aktif: " . $obj->aktif  . "<br>";
echo "jurusan: " . $obj->Jurusan  . "<br>";