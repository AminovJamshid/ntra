<?php

declare(strict_types=1);


if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    loadDashboard('createBranch.php');
    exit();

}


$branchName = $_POST['branch'];
$branchAddress = $_POST['address'];

if (isset($branchName) && isset($branchAddress)) {
    (new \App\Branch())->insertBranch($branchName, $branchAddress);
}