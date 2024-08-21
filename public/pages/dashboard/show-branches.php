<?php

/**
 * @var $branches
 */

loadPartials('header');
loadPartials('navbar');
?>

<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <?php foreach ($branches as $branch) : ?>
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="p-6">
                        <div class="pb-6">
                            <h2 class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                <?= htmlspecialchars($branch->name) ?>
                            </h2>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-location-point text-2xl me-2 text-green-600"></i>
                                <span><?= htmlspecialchars($branch->address) ?></span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="uil uil-calendar-alt text-2xl me-2 text-green-600"></i>
                                <span><?= htmlspecialchars($branch->created_at) ?></span>
                            </li>
                        </ul>
                    </div>
                </div><!-- end branch content -->
            <?php endforeach; ?>
        </div><!-- end grid -->
    </div><!-- end container -->
</section><!-- end section -->

<?php
loadPartials('footer');
?>
