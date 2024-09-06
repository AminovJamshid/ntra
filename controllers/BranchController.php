<?php

namespace Controller;

class BranchController
{
    public function createBranch(): void
    {
        $branchName = trim($_POST['branch']);
        $branchAddress = trim($_POST['address']);

        if ($branchName && $branchAddress) {
            (new \App\Branch())->insertBranch($branchName, $branchAddress);
            redirect('/branches');
        } else {
            redirect('/branch/create');
        }
    }

    public function showCreatePage(): void
    {
        loadDashboard('createBranch.php');
    }

    public function showBranches(): void
    {
        $branches = (new \App\Branch())->getBranches();
        loadDashboard('showBranches.php', ['branches' => $branches]);
    }
}