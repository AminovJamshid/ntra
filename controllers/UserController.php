<?php

namespace Controllers;

class UserController
{
    public function showUsers(): void
    {
        $users = (new \App\Users())->getUser();
        loadDashboard('users.php', ['users' => $users]);
    }
}