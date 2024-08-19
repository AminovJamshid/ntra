<?php

declare(strict_types=1);

use App\Ads;

class Router
{
    protected object|null $updates;
    protected string $uri;

    public function __construct()
    {
        $this->updates = json_decode(file_get_contents('php://input'));
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getResourceName(): false|int
    {
        $uri        = (new self)->uri;
        $path       = explode('/', $uri); 
        $resourceId = $path[count($path) - 1];

    }
    public function getResourceId(): false|int
    {
        $uri        = (new self)->uri;
        $path       = explode('/', $uri);
        $resourceId = $path[count($path) - 1];

        return is_numeric($resourceId) ? (int) $resourceId : false;
    }


    public function sendResponse($data): void
    {
        header("Content-Type: application/json; charset=UTF-8");

        echo json_encode($data);
    }

    public function getUpdates()
    {
        return $this->updates;
    }


    public function get($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $resourceId = (new self())->getResourceId();
            if ($resourceId) {
                $path = str_replace('{id}', (string)$resourceId, $path);
                if ($path === (new self)->uri) {
                    $callback($resourceId);
                    exit;
                }
            }
            if ($path === (new self)->uri) {
                $callback();
                exit;
            }
        }
    }

    public function post($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
        }
    }

    public static function errorResponce(int $code, $massage ): void{
        http_response_code($code);
        if($code = 404){
            require "view/pages/404.php";
        }
        json_encode(['ok' => false, 'code' => $code ,  'massage' => $massage]);
        exit();
    }

}