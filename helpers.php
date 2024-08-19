<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($args): void
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();

}

function getAds(): false|array
{
    return (new \App\Ads())->getAds();

}

function  basePath($path): string
{
    return __DIR__.$path;
}
function  LoadView($path, array | null $args = null): void
{
    $filePath = basePath("/public/pages/" . $path . ".php");
    if (!file_exists($filePath)) {
        echo "File not found $filePath";
        return;

    }
    if (is_array($args)) {

        extract($args);
    }
    require_once  $filePath;
}
function  LoadPartials($path, array | null $args = null): void
{
    if (is_array($args)) {

        extract($args);
    }
    require_once  basePath("/public/partials/" . $path . ".php");
}
function  LoadController($path, array | null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require_once  basePath("/controller/" . $path . ".php");
}

