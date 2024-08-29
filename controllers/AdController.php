<?php

declare(strict_types=1);

namespace Controller;

class AdController
{
    public function show(int $id): void
    {
        /**
         * @var $id
         */
        $ad        = (new \App\Ads())->getAd($id);
        $ad->image = "../assets/images/ads/$ad->image";

        loadView('single-ad', ['ad' => $ad]);
    }

    public function create(): void
    {
        $title       = $_POST['title'];
        $description = $_POST['description'];
        $price       = (float) $_POST['price'];
        $address     = $_POST['address'];
        $rooms       = (int) $_POST['rooms'];

        if ($_POST['title']
            && $_POST['description']
            && $_POST['price']
            && $_POST['address']
            && $_POST['rooms']
        ) {
            // TODO: Replace hardcoded values
            $newAdsId = (new \App\Ads())->createAds(
                $title,
                $description,
                2,
                1,
                1,
                $address,
                $price,
                $rooms
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName     = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int) $newAdsId, $fileName);

                header('Location: /');

                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }
}