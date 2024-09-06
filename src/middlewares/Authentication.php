<?php

namespace App\middlewares;

use App\Session;

class Authentication
{
    public function middleware(string|null $middleware = null): void
    {
        if (!$middleware) {
            return;
        }

        if ($middleware === 'guest') {
            if ((new Session())->getUser()) {
                redirect('/');
            }
        } elseif ($middleware === 'auth') {
            if (!(new Session())->getUser()) {
                redirect('/login');
            }
        }
    }
}