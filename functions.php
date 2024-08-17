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
