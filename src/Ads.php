<?php

declare(strict_types=1);

namespace App;

use PDO;

class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createAds(
        string $title,
        string $description,
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        string $address,
        float  $price,
        int    $rooms,
    ): false|string {
        $query = "INSERT INTO ads (title, description, user_id, status_id, branch_id, address, price, rooms, created_at) 
                  VALUES (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function getAd($id)
    {
        $query = "SELECT ads.*,
                         ads_image.name AS image,
                         branch.name    AS branch_name,
                         branch.id      AS branch_id,
                         branch.address AS branch_address,
                         branch.image   AS branch_image
                  FROM ads
                         LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                         LEFT JOIN branch on ads.branch_id = branch.id
                  WHERE ads.id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getAds(): false|array
    {
        $query = "SELECT *, 
                        ads.id AS id,
                        ads.address AS address,
                        ads_image.name AS image
                  FROM ads
                    JOIN branch ON branch.id = ads.branch_id
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id";
        return $this->pdo->query($query)->fetchAll();
    }

    public function getUsersAds(int $userId): false|array
    {
        $query = "SELECT *, ads.id AS id, ads.address AS address, ads_image.name AS image
                  FROM ads
                    JOIN branch ON branch.id = ads.branch_id
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE user_id = $userId"; // FIXME: Prepare userId
        return $this->pdo->query($query)->fetchAll();
    }

    public function updateAds(
        int    $id,
        string $title,
        string $description,
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        string $address,
        float  $price,
        int    $rooms
    ) {
        $query = "UPDATE ads SET title = :title, description = :description, user_id = :user_id,
                 status_id = :status_id, branch_id = :branch_id, address = :address, 
                 price = :price, rooms = :rooms, updated_at = NOW() WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteAds(int $id): array|false
    {
        $image = $this->pdo->query("SELECT name FROM ads_image WHERE ads_id = $id")->fetch()->name;
        unlink("assets/images/ads/$image");
        $query = "DELETE FROM ads WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function search(
        string|null $searchPhrase = null
    ): false|array {
        /**
         * Filters
         * - search phrase
         * - branch
         * - min/max price
         * - gender
         * - position
         * - room
         */

        $query  = "SELECT *, 
                                ads.id AS id,
                                ads.address AS address,
                                ads_image.name AS image
                         FROM ads
                             JOIN branch ON branch.id = ads.branch_id
                             LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                         WHERE 1";
        $params = [];

        if (isset($_GET['search_phrase']) && strlen($_GET['search_phrase']) > 0) {
            $query                   .= " AND title LIKE :searchPhrase OR ads.description LIKE :searchPhrase";
            $params[':searchPhrase'] = "%{$_GET['search_phrase']}%";
        }

        if (!empty($_GET['min_price']) && !empty($_GET['max_price'])) {
            $query               .= " AND price BETWEEN :minPrice AND :maxPrice";
            $params[':minPrice'] = $_GET['min_price'];
            $params[':maxPrice'] = $_GET['max_price'];
        } elseif (!empty($_GET['min_price'])) {
            $query               .= " AND price >= :minPrice";
            $params[':minPrice'] = $_GET['min_price'];
        } elseif (!empty($_GET['max_price'])) {
            $query               .= " AND price <= :maxPrice";
            $params[':maxPrice'] = $_GET['max_price'];
        }

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }


    public function superSearch(
        string   $searchPhrase,
        int|null $searchBranch = null,
        int      $searchMinPrice = 0,
        int      $searchMaxPrice = PHP_INT_MAX
    ) {

        $query  = "SELECT *, 
                        ads.id AS id,
                        ads.address AS address,
                        ads_image.name AS image
                 FROM ads
                     JOIN branch ON branch.id = ads.branch_id
                     LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                WHERE (title LIKE :searchPhrase
                OR ads.description LIKE :searchPhrase) 
                AND price BETWEEN :minPrice AND :maxPrice";
        $params = [
            ':searchPhrase' => "%$searchPhrase%",
            ':minPrice'     => $searchMinPrice,
            ':maxPrice'     => $searchMaxPrice
        ];

        if ($searchBranch) {
            $query                   .= " AND branch_id = :searchBranch";
            $params[':searchBranch'] = $searchBranch;
        }

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function iSearch(
        string   $searchPhrase,
        int|null $branch_id = null,
        int|null $minPrice = null,
        int|null $maxPrice = null
    ) {
        $searchPhrase = "%$searchPhrase%";
        $query        = "SELECT *, ads.id AS id, ads.address AS address, images.image_path AS image
              FROM ads
                JOIN branch ON branch.id = ads.branch_id
                LEFT JOIN images ON ads.id = images.ads_id
                WHERE (title LIKE :searchPhrase 
                OR description LIKE :searchPhrase)";

        $params = [':searchPhrase' => $searchPhrase];

        if ($branch_id) {
            $query                .= " AND (ads.branch_id = :branch_id)";
            $params[':branch_id'] = $branch_id;
        }

        if ($minPrice && $maxPrice) {
            $query                .= " AND (ads.price BETWEEN :min_price AND :max_price)";
            $params[':min_price'] = $minPrice;
            $params[':max_price'] = $maxPrice;
        }

        $stmt = $this->pdo->prepare($query);


        $stmt->execute($params);
        dd($stmt->queryString);
        return $stmt->fetchAll();
    }
}