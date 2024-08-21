<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn()=> loadController('home'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/ads/create', fn()=> loadView('dashboard/create-ad'));
Router::post('/ads/create', fn()=> loadController('createAd'));


//Router::get('/status/{id}', function (int $id) {
//    loadController('showStatus', ['id'=>$id]);
//});


Router::get('/status/create', fn()=> loadView('dashboard/create-status'));
Router::post('/status/create', fn()=> loadController('createStatus'));
Router::errorResponse(404, 'Not Found');