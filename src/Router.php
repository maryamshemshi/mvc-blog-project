<?php

namespace App;
class Router
{
    protected Request $request;
    protected $routes;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function post($uri, $callback)
    {
        $this->routes['post'][$uri] = $callback;
    }

    public function get($uri, $callback)
    {
        $this->routes['get'][$uri] = $callback;
    }

    public function resolve()
    {
        $uri = $this->request->getUrl();
        $method = Request::method();
        return $this->routes[$method][$uri];
    }
}