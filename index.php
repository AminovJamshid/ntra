<?php

require_once "bootstrap.php";
use App\User;
$user = new User();

$user->create(
    username: "Werther",
    position: "capitan",
    gender: "male",
    phone: "998997777778"
);

var_dump($user);