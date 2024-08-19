<?php

declare(strict_types=1);

namespace App;

class Branch
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createBranch(string $name, string $address): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO branch (name, address, created_at)
                                          VALUES (:name, :address, NOW())");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();
    }

    public function updateBranch(int $id, string $name, string $address): bool
    {
        $stmt = $this->pdo->prepare("UPDATE branch SET name = :name, address = :address WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);

        return $stmt->execute();
    }

    public function getBranch(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function deleteBranch(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}