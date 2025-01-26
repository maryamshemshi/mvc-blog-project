<?php
namespace App;

class View
{
    public static function render($layout, $basePage, $params = ['name' => ''])
    {
        $layout = self::loadLayout($layout,$params);
        $basePage = self::loadView($basePage, $params);
        echo str_replace("[contents]",  $basePage,$layout);
    }

    public static function loadView($viewName, $params = ['name' => ''])
    {
        extract($params);
        ob_start();
        include_once App::$basePath . "/$viewName.php";
        return ob_get_clean();
    }

    public static function loadLayout($viewName,$params = ['name' => ''])
    {
        extract($params);
        ob_start();
        include_once App::$basePath . "/view/Layout/$viewName.php";
        return ob_get_clean();
    }
}