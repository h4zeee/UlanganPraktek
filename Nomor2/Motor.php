<?php
class Motor{

    public $name, $idmesin, $typemotor;

    public function __construct($name,$idmesin, $typemotor)
    {
        $this->name = $name;
        $this->idmesin = $idmesin;
        $this->typemotor = $typemotor;
    }
}

$obj = new Motor("Vario", "1245", "automatic");

echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>'  ;
echo "Type Motor:" . $obj->typemotor . '<hr>';

$obj = new Motor("CB 250", "3421", "sport" );
echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>'  ;
echo "Type Motor:" . $obj->typemotor;
