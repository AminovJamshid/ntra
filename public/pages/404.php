<?php

function findStringsInText(string $haystack, array $needles): ?string
{
    foreach ($needles as $needle) {
        $position = strpos($haystack, $needle);

        if ($position !== false) {
            return $needle;
        }
    }

    return null;
}

$needles = ['createAds', 'createAcc', 'adsDashboard', 'forgetPass', 'login'];

$url = $_SERVER['REQUEST_URI'];

$necessaryUrl = findStringsInText($url, $needles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="text-center">
    <h1 class="text-6xl font-bold text-gray-800">404</h1>
    <p class="text-2xl text-gray-600 mt-4">Oops! Page not found.</p>
    <p class="text-gray-500 mt-2">The page you are looking for does not exist.</p>
<!--    <a href="--><?php //echo "/$necessaryUrl" ?><!--" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Go To The Previous Page</a>-->
</div>
</body>
</html>