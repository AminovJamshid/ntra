<?php

namespace Controller;

class ProfileController
{
    public function showAds(): void
    {
        $ads = (new \App\Ads())->getAds();

        loadDashboard('profileAds.php', ['ads' => $ads]);
    }

    public function showAd(int $id): void
    {
        $ad = (new \App\Ads())->getAd($id);

        loadDashboard('profileAd.php', ['ad' => $ad]);
    }
}