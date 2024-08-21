<?php

if ($_POST['status']){
    (new App\Status())->createStatus($_POST['status']);

    header('Location: /ads/create');
    exit;
}


