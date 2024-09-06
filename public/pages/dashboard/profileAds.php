<?php

declare(strict_types=1);

/**
 * @var TYPE_NAME $ads
 */

loadPartial('headerDash.php');
?>


    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Explore Properties</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="#">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Properties</li>
                </ul>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">

                <?php foreach ($ads as $ad) : ?>

                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                        <a href="/profile-ads/<?= $ad->id ?>">
                            <div class="relative">
                                <img src="assets/images/ads/<?=$ad->image_name ?>" alt="">

                                <div class="absolute top-4 end-4">
                                    <a href="/ads/update" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-yellow-300 dark:text-yellow-300 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-pencil text-[20px]"></i></a>
                                </div>
                            </div>
                        </a>
                        <div class="p-6">
                            <div class="pb-6">
                                <a href="/profile-ads/<?= $ad->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title ?></a>
                            </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="mdi mdi-arrow-expand-all text-2xl me-2 text-green-600"></i>
                                    <span><?= $ad->square ?> m2</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="mdi mdi-door-open text-2xl me-2 text-green-600"></i>
                                    <span><?= $ad->rooms ?> rooms</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="mdi mdi-shower text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$<?=$ad->price ?></p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Status</span>
                                    <p class="text-lg font-medium"><?=$ad->status ?></p>
                                </li>

                                <li>
                                    <p class="text-lg font-medium"><?=$ad->status ?></p>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                <?php endforeach; ?>
            </div><!--en grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                <div class="md:col-span-12 text-center">
                    <nav>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                    <i class="mdi mdi-chevron-left text-[20px]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 size-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">3</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                    <i class="mdi mdi-chevron-right text-[20px]"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!--end grid-->
            <!-- End Content -->
        </div>
    </div><!--end container-->


<?php
loadPartial('footerDash.php');
?>