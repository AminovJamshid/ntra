<?php

declare(strict_types=1);

namespace App;

use PDO;

class DB
{
    public static function connect(): PDO
    {
        $dsn = http_build_query([
            'host'   => $_ENV['DB_HOST'],
            'dbname' => $_ENV['DB_NAME'],
        ], '', ';');

        return new PDO(
            "{$_ENV['DB_CONNECTION']}:$dsn",
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
        );
    }
}
