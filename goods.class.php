<?php


class Goods
{
    public $id;
    public $name;
    public $price;
    public $opis;
    public $count;

    function __construct($id, $name, $price, $opis, $count)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->opis = $opis;
        $this->count = $count;
    }
    function getName(){
        echo "<div><h2>Наименование товара: $this->name</h2></div>";
    }
    function getPrice(){
        echo "<div><h2>Наименование товара: $this->name</h2></div>";
    }
    function getName(){
        echo "<div><h2>Наименование товара: $this->name</h2></div>";
    }
    function getName(){
        echo "<div><h2>Наименование товара: $this->name</h2></div>";
    }
}
$g = new Goods(1, 'Ноутбук', 25000, 'Технические требования для ноутбука', 5);
$g2 = new Goods (2, 'Мышь', 250, 'Оптическая', 10);
$g3 = new Goods (3, 'Клавиатура', 400, 'Проводная', 15);
$array = [$g, $g2];
$array[] = $g3;
print_r($array);
$g->view();
