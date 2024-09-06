<?php

namespace App;

use PDO;

// AdsGateway
class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function insertAds(
        string $title,
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        string $address,
        float  $price,
        int    $rooms,
        float  $square,
        string $description): false|string
    {
        $query = "INSERT INTO ads (title, user_id, status_id, branch_id, address, price, rooms, square, description, created_at) 
                  VALUE (:title, :user_id, :status_id, :branch_id, :address, :price, :rooms, :square, :description, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':square', $square);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function updateAds(
        string $title,
        int    $status_id,
        int    $branch_id,
        int    $address_id,
        int    $price,
        int    $rooms,
        int    $description): bool
    {
        $query = "UPDATE ads SET title = :title, status_id = :status_id, branch_id = :branch_id, 
                  address = :address_id, price = :price, rooms = :rooms, 
                  description = :description, updated_at = NOW() 
                  WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address_id', $address_id);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getAd(int $id)
    {
        $query = "SELECT ads.*, image_name
                  FROM ads
                    JOIN images ON ads.id = images.ads_id
                  WHERE ads.id = {$id}";

        return $this->pdo->query($query)->fetch();
    }

    public function getAds(): false|array
    {
        $query = "SELECT ads.*, image_name, status
                    FROM ads
                    JOIN images ON ads.id = images.ads_id
                    LEFT JOIN status ON status.id = ads.status_id";

        return $this->pdo->query($query)->fetchAll();
    }

    public function getUsersAds(int $userId)
    {
        $query = "SELECT ads.*, image_name 
                    FROM ads 
                        JOIN branch ON branch.id = ads.branch_id
                        LEFT JOIN images ON ads.id = images.ads_id
                    WHERE user_id = $userId";

        return $this->pdo->query($query)->fetchAll();
    }
}