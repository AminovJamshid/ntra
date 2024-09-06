<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    loadDashboard('createStatus.php');
    exit();

}




if ($_POST['status']) {
    (new \App\Status())->insertStatus($_POST['status']);

    header('location: /ads/create');
    exit();
}
