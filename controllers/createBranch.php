<?php

if ($_POST['branch']) {
    (new App\Branch())->createBranch($_POST['branch'], $_POST['branch_address']);

    header('Location: /ads/create');
    exit;
}