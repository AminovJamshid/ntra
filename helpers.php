<?php

declare(strict_types=1);

use App\Ads;

function dd($args)
{
    echo "<pre>";
    print_r($args);
    echo "</pre>";
    die();
}

function getAds(): false|array
{
    return (new Ads())->getAds();
}

function basePath(string $path): string
{
    return __DIR__.$path;
}

function loadView(string $path, array|null $args = null, bool $loadFromPublic = true): void
{
    if ($loadFromPublic) {
        $file = "/public/pages/$path.php";
    } else {
        $file = "/resources/views/pages/$path.php";
    }

    $filePath = basePath($file);

    if (!file_exists($filePath)) {
        echo "Required view not found: $filePath";
        return;
    }

    if (is_array($args)) {
        extract($args);
    }
    require $filePath;
}

function loadPartials(string $path, array|null $args = null, bool $loadFromPublic = true): void
{
    if (is_array($args)) {
        extract($args);
    }

    if ($loadFromPublic) {
        $file = "/public/partials/$path.php";
    } else {
        $file = "/resources/views/partials/$path.php";
    }

    require basePath($file);
}

function loadComponent(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }

    $file = basePath("/resources/views/components/$path.php");

    if (!file_exists($file)) {
        echo "Required component not found: $file";
        return;
    }

    require $file;
}

function loadController(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/controllers/'.$path.'.php');
}

function redirect(string $url): void
{
    header("Location: $url");
    exit();
}