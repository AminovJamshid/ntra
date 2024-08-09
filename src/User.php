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
}
