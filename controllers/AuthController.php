<?php

namespace Controllers;

class AuthController
{
    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            loadView('auth/login.php');
            return;
        }

        (new \App\Auth())->login();
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            loadView('auth/register.php');
            return;
        }

        (new \App\Auth())->register();
    }

    public function logout(): void
    {
        (new \App\Auth())->logout();
    }
}