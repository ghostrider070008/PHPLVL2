<?php


class Goods
{
    public $id;
    public $name;
    public $price;
    public $desc;
    public $count;

    function __construct($id, $name, $price, $desc, $count)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->count = $count;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getDesc(){
        return $this->desc;
    }
    function getCount(){
        return $this->count;
    }
}
$g = new Goods(1, 'Ноутбук', 25000, 'Технические требования для ноутбука', 5);
$g2 = new Goods (2, 'Мышь', 250, 'Оптическая', 10);
$g3 = new Goods (3, 'Клавиатура', 400, 'Проводная', 15);
$mas = [$g, $g2];
$mas[] = $g3;
print_r($mas);
foreach ($mas as $obj){
    echo "<h2>Наименование:".$obj->getName()."</h2><br>Цена:".$obj->getPrice()."<br>Описание:".$obj->getDesc()."<br>Доступное количество:".$obj->getCount();
}

