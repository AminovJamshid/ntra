<?php

declare(strict_types=1);

namespace App;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createUser(
        string $username,
        string $position,
        string $gender,
        string $phone
    ): false|array {
        $query = "INSERT INTO users (username, position, gender, phone, created_at)
                  VALUES (:username, :position, :gender, :phone, NOW())";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUser(int $id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getUsers(): false|array
    {
        $query = "SELECT * FROM users";
        return $this->pdo->query($query)->fetchAll();
    }

    public function getByUsername(string $username, string $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateUser(
        int    $id,
        string $username,
        string $position,
        string $gender,
        string $phone
    ): void {
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, updated_at = NOW()
                  WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteUser(int $id): void
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
