<?php

$branches = new \App\Branch();

$allBranches = $branches ->getBranch();


loadView('dashboard/create-ad', ['branches' => $allBranches]);