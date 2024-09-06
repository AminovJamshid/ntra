<?php

namespace App;

use PDO;

// StatusGateway
class Status
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function insertStatus(string $name): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO status (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    public function getStatus(int $id)
    {
        return $this->pdo->query("SELECT * FROM status WHERE id = {$id}")->fetch();
    }

    public function getStatuses(): false|array
    {
        return $this->pdo->query("SELECT * FROM status")->fetchAll();
    }


}