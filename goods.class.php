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
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
        $this->setDesc($desc);
        $this->setCount($count);
    }
   function setter($id,$name,$price, $desc, $count){
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
        $this->setDesc($desc);
        $this->setCount($count);
    }
    function setId($id){
        $this->id = $id;
    }
    function setName($name){
        $this->name = $name;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function setDesc($desc){
        $this->desc = $desc;
    }
    function setCount($count){
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
//$g->setter(1, 'Ноутбук', 25000, 'Технические требования для ноутбука', 5);
$mas = [$g, $g2, $g3];
print_r($mas);
foreach ($mas as $obj){
    echo "<h2>Наименование:".$obj->getName()."</h2><br>Цена:".$obj->getPrice()."<br>Описание:".$obj->getDesc()."<br>Доступное количество:".$obj->getCount();
}

