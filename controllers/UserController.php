<?php

declare(strict_types=1);

namespace Controller;

use App\Ads;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds($_SESSION['user']['id']);
        loadView('profile', ['ads' => $ads], false);
    }
}