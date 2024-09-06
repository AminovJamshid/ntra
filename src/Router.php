<?php

namespace App;

use App\middlewares\Authentication;

class Router
{
    public function getResourceId(): false|int
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        $resourceId = end($path);

        return is_numeric($resourceId) ? (int)$resourceId : false;
    }

    public static function get($path, $callback, string|null $middleware = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $resourceId = (new self())->getResourceId();
            if ($resourceId) {
                $path = str_replace('{id}', (string)$resourceId, $path);
                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback($resourceId);
                    exit();
                }
            }

            if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                (new Authentication())->middleware($middleware);
                $callback();
                exit();
            }
        }
    }

    public static function post($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $path) {
            $callback();
            exit();
        }
    }

    public static function patch($path, $callback, string|null $middleware = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resourceId = (new self())->getResourceId();
            if ($_POST['_method'] === 'patch') {
                if ($resourceId) {
                    $path = str_replace('{id}', (string)$resourceId, $path);
                    if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                        $callback($resourceId);
                        exit();
                    }
                }

                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    (new Authentication())->middleware($middleware);
                    $callback();
                    exit();
                }
            }
        }
    }

    public static function errorResponse(int $code, $message = 'Error bad request'): void
    {
        http_response_code($code);
        if ($code == 404) {
            loadView('404.php');
        }
//        echo json_encode(['ok' => false, 'code' => $code, 'message' => $message]);
        exit();
    }

}