<?php

if ($_POST['branch']) {
    $branch = new App\Branch();

    $branch->createBranch($_POST['branch'], $_POST['branch_address']);

    header('Location:/branches');

}

