<?php

require_once "bootstrap.php";
use App\User;
$user = new User();

//$user->create(
//    username: "Werther",
//    position: "capitan",
//    gender: "male",
//    phone: "998997777777"
//);

$ads = new App\Ads();
$ads->createAds('title',
    'description', 2, 2, 2,
    'address', 100, 2);
//$ads -> updateAds(3,'TITLE',
//    'DESCRIPTION',2,2,2,
//    "Chilonzor",100,2);
//$ads -> deleteAds(3);


var_dump($user);