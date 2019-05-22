<?php

require_once("goods.class.php");
class Printer extends Goods
{   private $speed_print;
    private $format;
    private $spec;

    public function __construct($id, $name, $price, $desc, $count,$speed_print, $format)
    {
        parent::__construct($id, $name, $price, $desc, $count);
        $this->spec = [
            "Скорость печати" => $speed_print
    ];
        $this->speed_print = $speed_print;
        $this->format = $format;
    }


}
$k = new Printer(1,"Принтер", 20540, "printer", 2, 20, "A4");
print_r($k);