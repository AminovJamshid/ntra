<?php

namespace App;

use PDO;

class User
{
//    public string $username;
//    public string $position;
//    public string $gender;
//    public string $phone;
//    public DateTime $created_at;


// Doc blog
///**
// * @param string $username
// * @param string $position
// * @param string $gender
// * @param string $phone
// * @param DateTime $created_at
// * @return array|false
// */

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $username,
                           string $position,
                           string $gender,
                           string $phone): array|false
    {
        $pdo = DB::connect();

        $query = "INSERT INTO users (username, position, gender, phone, created_at) 
              VALUES (:username, :position, :gender, :phone, NOW())";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateAds(string $username,$id){
        $pdo = DB::connect();
        $query = "UPDATE users SET position = :position, gender = :gender, phone = :phone where id = :id";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':position', $username);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function deleteAds($id){
        $pdo = DB::connect();
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }


}
