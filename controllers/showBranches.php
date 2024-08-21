<?php

$branch = new App\Branch();

$allBranches = $branch->getBranch();

loadView('dashboard/show-branches', ['branches' => $allBranches]);

