<?php

declare(strict_types=1);

namespace Controllers;

use App\Auth;

class AuthController
{

    public function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        (new Auth())->login($username, $password);
    }

}