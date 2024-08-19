<?php

declare(strict_types=1);

use App\Router;

$router = new Router();

Router::get('/ads/{id}', function (int|null $id) {
    loadView(basePath('controllers/showAd.php'), ['id'=>$id]);
//    extract(['id' => $id]);
//    require basePath('controllers/showAd.php');

});
Router::get('/users', fn()=> require basePath('public/pages/single-ad.php');
Router::get('/users/{id}', fn()=> require basePath('public/pages/single-ad.php');

