<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    loadView('auth/register');
    exit();
}

(new \App\Users())->register();
