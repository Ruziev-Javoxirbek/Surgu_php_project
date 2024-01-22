<?php

namespace Ssurg\Surgut;

class Application
{
    public function run()
    {
        $request = new Request();
        $router = new Router();

        $route = $router->match($request->getMethod(), $request->getPath());

        if ($route) {
            $controllerClassName = $route['controller'];
            $controller = new $controllerClassName();
            $action = $route['action'];

            // Вывод GET-параметров
            echo "GET-параметры: " . json_encode($request->getQueryParams()) . "<br>";

            // Вывод URL запроса
            echo "URL запроса: " . $request->getPath() . "<br>";

            // Вызов действия контроллера
            $controller->$action($request);
        } else {
            echo "404 Not Found";
        }
    }
}