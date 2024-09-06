<?php

namespace App;

use PDO;

// BranchGateway
class Branch
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function insertBranch(string $name, string $address): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO branch (name, address) VALUES (:name, :address)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();
    }

    public function getBranch(int $id)
    {
        return $this->pdo->query("SELECT * FROM branch WHERE id = {$id}")->fetch();
    }

    public function getBranches(): false|array
    {
        return $this->pdo->query("SELECT * FROM branch")->fetchAll();
    }

}