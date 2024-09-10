<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);

/**
 * @var $args
 */
?>
    <div class="page-wrapper toggled">
        <?php
        loadPartials('sidebar', loadFromPublic: false); ?>

        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <?php
            loadPartials('top-header', loadFromPublic: false); ?>

            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                        <h5 class="text-lg font-semibold">E'lon qo'shish</h5>

                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                <a href="/admin">Dashboard</a></li>
                            <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                                <i class="mdi mdi-chevron-right"></i></li>
                            <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                                aria-current="page">E'lon qo'shish
                            </li>
                        </ul>
                    </div>

                    <?php
                    loadComponent('ads-form', $args); ?>
                    <!-- End Content -->
                </div>
            </div><!--end container-->

            <?php
            loadPartials(path: 'dashboard-footer', loadFromPublic: false); ?>
        </main>
        <!--End page-content" -->
    </div>

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>