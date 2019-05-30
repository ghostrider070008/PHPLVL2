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
    $file = file_get_contents('./img.json', true);
    $json = json_decode($file);
    $ident = (int)$_GET['id'];
    print_r($json);

    print_r($json[$ident]);
    // Подгружаем контент
    $template = $twig->loadTemplate('contentpage.tpl');
    echo $template->render(['jsons' => $json[$ident]]);
    //Подгружаем подвал сайта
    $template = $twig->loadTemplate('footer.tpl');
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    $date = date('Y');
    echo $template->render(['dat' => $date]);
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());}
