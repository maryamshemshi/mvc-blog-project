<?php

namespace App;

use App\Controllers\HomeController;

class App
{
    public Router $router;
    protected Request $request;
    public static $basePath;

    public function __construct($basePath)
    {

        $this->request = new Request();
        $this->router = new Router($this->request);
        self::$basePath = $basePath;
    }

    public function run(): void
    {
        $controller = new HomeController();
        $controller->view();
        $callback = $this->router->resolve();
        if (is_array($callback)) {
            $obj = new $callback[0];
            $method = $callback[1];
            $obj->$method();
            call_user_func([$obj, $method]);
        } else {
            $callback();
        }

    }

}