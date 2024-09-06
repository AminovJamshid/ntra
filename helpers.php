<?php

declare(strict_types=1);

function dd($args): void
{
    echo '<pre>';
    print_r($args);
    echo '</pre>';
    die();
}

function getAds(): false|array
{
    return (new \App\Ads())->getAds();
}

function basePath(string $path): string
{
    return __DIR__ . $path;
}

function loadView(string $path, array $data = []): void
{

    if (is_array($data)) {
        extract($data);
    }
    require basePath('/public/pages/' . $path);
}

function loadPartial(string $path): void
{
    require basePath('/public/partials/' . $path);
}

function loadController(string $path, array|null $data = null): void
{
    if (is_array($data)) {
        extract($data);
    }

    require basePath('/controllers/' . $path);
}


function loadDashboard(string $path, array|null $data = null): void
{

    if (is_array($data)) {
        extract($data);
    }
    require basePath('/public/dashboard/' . $path);
}

function redirect(string $url): void
{
    header("Location: $url");
    exit();
}