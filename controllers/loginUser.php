<?php

declare(strict_types=1);



if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    loadView('auth/login');
    exit();
}


(new \App\User())->login();
