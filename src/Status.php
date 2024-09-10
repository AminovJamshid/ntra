<?php

declare(strict_types=1);

namespace App;

class Status
{
    const int ACTIVE   = 1;
    const int INACTIVE = 2;

    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createStatus(string $name): false|string
    {
        $stmt = $this->pdo->prepare("INSERT INTO `status` (`name`) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function updateStatus(int $id, string $name): bool
    {
        $stmt = $this->pdo->prepare("UPDATE status SET name = :name WHERE id = :id");
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    public function getStatus(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `status` WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function deleteStatus(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM `status` WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}