<?php

declare(strict_types=1);

/**
 * @var TYPE_NAME $branches
 */

loadPartial('headerDash.php');
?>


    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Explore Branches</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="#">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Branches</li>
                </ul>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">

                <?php foreach ($branches as $branch) : ?>
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto size-64 rounded-full overflow-hidden shadow dark:shadow-gray-700">
                            <a href="#">
                                <img src="assets/images/agency/najot_talim.jpg" class="" alt="">
                            </a>
                        </div>

                        <div class="content mt-3">
                            <a href="#" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out"><?= $branch->name ?> branch</a>
                            <p class="text-slate-400"><?= $branch->address ?></p>

                            <ul class="list-none mt-2">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div><!--end contant-->
                <?php endforeach; ?>
            </div><!--en grid-->
            <!-- End Content -->
        </div>
    </div><!--end container-->


<?php
loadPartial('footerDash.php');
?>