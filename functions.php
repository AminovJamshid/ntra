<?php

use JetBrains\PhpStorm\NoReturn;
use App\Ads;
#[NoReturn] function dd($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();
}

function getAds(): false|array
{
    return (new Ads())->getAds();

}

function basePath(string $path):string
{
    return dirname(__DIR__ ).$path;
}

function loadView (string $path, array $args):string
{
    extract($args);
    return dirname(__DIR__ ).$path;
}
