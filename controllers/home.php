<?php

declare(strict_types=1);

$ads = (new \App\Ads())->getAds();

loadView('home', ['ads' => $ads]);