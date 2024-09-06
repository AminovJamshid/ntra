<?php

namespace App;

use JetBrains\PhpStorm\NoReturn;
use PDO;

// UsersGateway
class Users
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function insertUser(
        string $username,
//        string $position,
        string $gender,
        int    $phone,
        string $password): bool
    {
        $query = "INSERT INTO users (username ,gender, phone, password, created_at) 
                  VALUES (:username,:gender, :phone, :password, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':username', $username);
//        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function getUser(int $phone)
    {
        return $this->pdo->query("SELECT * FROM users WHERE phone = {$phone}")->fetch();
    }

    public function deleteUsers(int $id): bool
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function updateUser(
        int    $id,
        string $username,
        string $position,
        string $gender,
        int    $phone,
        string $password): bool
    {
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, password = :password, updated_at = NOW() WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function isUserExists(): bool
    {
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
            return (bool)$this->getUser($phone);
        }
        return false;
    }
    #[NoReturn] public function register(): void
    {
        $_SESSION['error'] = null;
        if ($this->isUserExists()) {
            $_SESSION['error'] = "This Users already exists";
            header('location: /register');

        } else {
            $user = $this->create();
            $_SESSION['user'] = $user->username;
            header('location: /ads/create');
        }
        exit();
    }
    public function create()
    {
        $username = $_POST['username'];
//        $position = $_POST['position'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (strlen($phone) == 9) {
            $this->insertUser($username, $gender, $phone, $password);
            return $this->getUser($phone);
        }
        $_SESSION['error'] = "Wrong information entered";
        header('location: /register');
        exit();
    }

    #[NoReturn] public function login(): void
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $result = $this->getUser($phone);

        if (password_verify($password, $result->password)) {
            $_SESSION['user'] = $result->username;
            header('location: /ads/create');
        } else {
            $_SESSION['error'] = "Wrong phone number or password";
            header('location: /login');
        }
        exit();
    }

    #[NoReturn] public function logout(): void
    {
        session_destroy();
        header('location: /');
        exit();
    }


}