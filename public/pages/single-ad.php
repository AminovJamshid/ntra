<?php

declare(strict_types=1);

loadPartials('header');
loadPartials('navbar');

/**
 * @var $ad // Comes from controller
 */
?>

<div class="max-w-screen-lg mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Left Column: Property Info -->
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                <?= $ad->title ?>
            </h1>
            <div class="flex space-x-4 mt-2 text-green-600">
                <div class="flex items-center space-x-2">
                    <span class="icon-bed"></span>
                    <span><?= $ad->rooms ?> xona</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="icon-square-foot"></span>
                    <span><?= $ad->branch_id ?> (branch)</span>
                </div>
            </div>
            <p class="text-gray-600 mt-4">
                <?= $ad->description ?>
            </p>
        </div>

        <!-- Right Column: Price and Map -->
        <div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="text-gray-800 text-xl font-semibold">
                    <?= $ad->price ?>
                </div>
                <div class="text-green-600 text-sm">
                    <?= $ad->status_id ?> (status)
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-500">__User</p>
                    <p class="text-sm text-gray-500">__Gender</p>
                    <p class="text-sm text-gray-500">__Contact</p>
                    <p class="text-sm text-gray-500"><?= $ad->created_at ?></p>
                </div>
            </div>
        </div>
    </div>
</div>