<?php
//require_once('goods.class.php');
include ('printer.php');
print_r($mas);
foreach ($mas as $obj){
    echo "<h2>Наименование:".$obj->getName()."</h2><br>Цена:".$obj->getPrice()."<br>Описание:".$obj->getDesc()."<br>Доступное количество:".$obj->getCount();
    }
$l = $k->spec[0];