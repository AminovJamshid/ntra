<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn() => loadController('homeView.php'));
Router::get('/ads/{id}', fn(int $id) => (new \Controller\AdsController())->show($id));


Router::get('/login', fn() => (new \Controller\AuthController())->login(), 'guest');
Router::get('/register', fn() => (new \Controller\AuthController())->register(), 'guest');
Router::get('/logout', fn() => (new \Controller\AuthController())->logout(), 'auth');


Router::post('/login', fn() => (new \Controller\AuthController())->login());
Router::post('/register', fn() => (new \Controller\AuthController())->register());


Router::get('/ads/create', fn() => (new \Controller\AdsController())->create(), 'auth');
Router::post('/ads/create', fn() => (new \Controller\AdsController())->create());


Router::get('/branches', fn() => (new \Controller\BranchController())->showBranches(), 'auth');
Router::get('/branch/create', fn() => (new \Controller\BranchController())->showCreatePage(), 'auth');
Router::post('/branch/create', fn() => (new \Controller\BranchController())->createBranch());


Router::get('/status/create', fn() => loadController('createStatus.php'), 'auth');
Router::post('/status/create', fn() => loadController('createStatus.php'));


Router::get('/profile', fn() => loadController('profileView.php'), 'auth');
Router::get('/profile-ads', fn() => (new \Controller\ProfileController())->showAds(), 'auth');
Router::get('/profile-ads/{id}', fn(int $id) => (new \Controller\ProfileController())->showAd($id), 'auth');

Router::get('/profile-users', fn() => (new \Controller\UserController())->showUsers(), 'auth');

Router::errorResponse(404, 'Not Found');