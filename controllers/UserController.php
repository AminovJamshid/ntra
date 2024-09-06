<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getAds($_SESSION['user']['id']);
        loadView('profile', ['ads' => $ads], false);
    }
}