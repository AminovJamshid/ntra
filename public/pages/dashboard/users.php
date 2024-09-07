<?php

declare(strict_types=1);

/**
 * @var TYPE_NAME $users
 */

loadPartial('headerDash.php');
?>


    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Users</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="#">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Users</li>
                </ul>
            </div>

            <div id="grid" class="md:flex justify-center mx-auto mt-3">
                <?php foreach ($users as $user): ?>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 p-3 picture-item">
                        <div class="bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800 p-6">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="assets/images/client/01.jpg" class="size-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="" class="text-lg hover:text-green-600 duration-500 ease-in-out"><?= $user->username ?></a>
                                    <p class="text-slate-400">Student</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <div class="mt-4">
                                    <div class="flex items-center">
                                        <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                            <a href="" class="text-slate-400">calvin@hotmail.com</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-3">
                                        <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-green-600 dark:text-white font-medium mb-0">Phone :</h6>
                                            <a href="" class="text-slate-400">+(998) <?= $user->phone ?></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->


<?php
loadPartial('footerDash.php');
?>