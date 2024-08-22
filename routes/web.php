<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn()=> loadController('home'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/login', fn() => loadController('loginUser'));
Router::get('/register', fn() => loadController('registerUser'));
Router::get('/logout', fn() => loadController('logoutUser'));

Router::post('/login', fn() => loadController('loginUser'));
Router::post('/register', fn() => loadController('registerUser'));



Router::get('/ads/create', fn()=> loadController('create-ad'));
Router::post('/ads/create', fn()=> loadController('createAd'));


Router::get('/status/{id}', function (int $id) {
    loadController('showStatus', ['id'=>$id]);
});


Router::get('/status/create', fn()=> loadView('dashboard/create-status'));
Router::post('/status/create', fn()=> loadController('createStatus'));

Router::get('/branch/create', fn()=> loadView('dashboard/create-branch'));
Router::post('/branch/create', fn()=> loadController('createBranch'));
Router::get('/branches', fn()=> loadController('showBranches'));
Router::errorResponse(404, 'Not Found');