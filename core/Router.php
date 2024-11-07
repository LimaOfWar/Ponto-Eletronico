<?php

namespace Core;

class Router
{
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];

        switch ($url) {
            case '/':
                $controllerName = 'App\Controllers\HomeController';
                $actionName = 'index';
                break;
            case '/tweet':
                $controllerName = 'App\Controllers\DashController';
                $actionName = 'tweet';
                break;
            case '/dash':
                $controllerName = 'App\Controllers\AuthController';
                $actionName = 'dash';
            break;
            case '/login':
                $controllerName = 'App\Controllers\AuthController';
                $actionName = 'login';
                break;
            case '/register':
                $controllerName = 'App\Controllers\AuthController';
                $actionName = 'register';
                break;
            default:
                http_response_code(404);
                echo "Página não encontrada!";
                exit;
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Método '$actionName' não encontrado no controller '$controllerName'!";
            }
        } else {
            echo "Controller '$controllerName' não encontrado!";
        }
    }
}