<?php

require_once("goods.class.php");
class Printer extends Goods
{
    public $spec;

    public function __construct($id, $name, $price, $desc, $count,$speed_print, $format)
    {
        parent::__construct($id, $name, $price, $desc, $count);
        $this->setSpec($speed_print, $format);

    }
    function setSpec($speed_print, $format){

    $this->spec[] = ['Скорость печати' => $speed_print,
        'Формат печати' => $format];
}function getSpec(){
    return $this->spec;
}



}
$k = new Printer(1,"Принтер", 20540, "printer", 2, 20, "A4");
$mas[] = $k;
print_r($mas);