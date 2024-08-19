<?php

declare(strict_types=1);

$title       = $_POST['title'];
$description = $_POST['description'];
$price       = (float) $_POST['price'];
$gender      = $_POST['gender'];
$branch      = (int) $_POST['branch'];
$address     = $_POST['address'];
$rooms       = (int) $_POST['rooms'];

$newAd = (new \App\Ads())->createAds(
    $title,
    $description,
    5,
    1,
    1,
    $address,
    $price,
    $rooms
);

dd($newAd);