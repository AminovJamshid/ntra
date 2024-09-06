<?php

namespace App;

// AddressesGateway
use PDO;

class Addresses
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
}