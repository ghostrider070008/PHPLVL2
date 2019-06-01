<?php
// Подгружаем и активируем автозагрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
// Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
// Инициализируем Twig
    $twig = new Twig_Environment($loader);
// Подгружаем шаблон
    //Подгружаем шапку сайта
    $template = $twig->loadTemplate('header.tpl');
    echo $template->render([]);
    try {
        //Подключаем конфиг
        require 'config.php';
        //соединение с БД
        $connect_str = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
        $db = new PDO($connect_str, DB_USER, DB_PASS);
        //выборка данных
        $result = $db->query("SELECT `goods_id`, `name`, `price`  FROM `goods` LIMIT 2");

        //проверка на ошибки
        $error_array = $db->errorInfo();

        if ($db->errorCode() != 0000)

            echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
        $i = 0;
        while ($row = $result->fetchObject()) {
            // в результате получаем ассоциативный массив
            $data[] = $row;
            print_r($data[$i]->name);
            $i++;
        }

        //print_r($data[0]->name);
    }

    catch
    (PDOException $e)
    {
    die("Error: " . $e->getMessage());
    }

   /* $file = file_get_contents('./img.json', true);
    $json = json_decode($file);
        // Подгружаем контент
    print_r($json);
    $template = $twig->loadTemplate('content.tpl');
    echo $template->render(['jsons' => $json]);*/
    //Подгружаем подвал сайта
    $template = $twig->loadTemplate('footer.tpl');
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    $date = date('Y');
    echo $template->render(['dat' => $date]);
    }
 catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());}
