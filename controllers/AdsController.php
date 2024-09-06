<?php

namespace Controllers;

class AdsController
{
    public function show(int $id): void
    {
        $ad = (new \App\Ads())->getAd($id);

        loadView('singleAd.php', ['ad' => $ad]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $branches = (new \App\Branch())->getBranches();
            loadDashboard('createAd.php', ['branches' => $branches]);
            exit();
        }

        $title = $_POST['title'];
        $branch = (int) $_POST['branch'];
        $address = $_POST['address'];
        $rooms = (int)$_POST['rooms'];
        $square = (float)$_POST['square'];
        $description = $_POST['desc'];
        $price = (float)$_POST['price'];
        $user = (int)$_POST['user'];
        $status = (int)$_POST['status'];

        if ($_POST['title']
            && $_POST['address']
            && $_POST['rooms']
            && $_POST['square']
            && $_POST['desc']
            && $_POST['price']
        ) {


            // 1. Store Ad
            // 2. Upload Image
            // 3. Store Image(adId, name)
            // 4 .Redirect

            $newAdsId = (new \App\Ads())->insertAds(
                $title,
                $user,
                $status,
                $branch,
                $address,
                $price,
                $rooms,
                $square,
                $description
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int)$newAdsId, $fileName);

                header('Location: /');

                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }
}