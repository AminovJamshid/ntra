<?php

declare(strict_types=1);

namespace App;

use PDO;

class Image
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function addImage(int $adsId, string $imageName): bool
    {
        $query = "INSERT INTO images (ads_id, image_name)
                 VALUES (:ads_id, :name)";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':ads_id', $adsId);
        $statement->bindParam(':name', $imageName);
        return $statement->execute();
    }

    public function handleUpload(): string
    {
        // Check if file uploaded
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            exit('Error: '.$_FILES['image']['error']);
        }

        // Extract file name and path
        $name       = $_FILES['image']['name'];
        $path       = $_FILES['image']['tmp_name'];
        $uploadPath = basePath("/public/assets/images/ads");

        // Check if upload directory exists
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }

        // Rename filename
        $fileName     = uniqid().'___'.$name;
        $fullFilePath = "$uploadPath/$fileName";

        // Upload file
        $fileUploaded = move_uploaded_file($path, $fullFilePath);

        if (!$fileUploaded) {
            exit('Fayl yuklanmadi');
        }

        return $fileName;
    }
}