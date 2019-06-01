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
        // Подгружаем контент
    print_r($json);
    $template = $twig->loadTemplate('content.tpl');
    echo $template->render(['jsons' => $json]);
    //Подгружаем подвал сайта
    $template = $twig->loadTemplate('footer.tpl');
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    $date = date('Y');
    echo $template->render(['dat' => $date]);
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());}
