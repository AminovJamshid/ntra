<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
?>

<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<div class="page-wrapper toggled">
    <?php
    loadPartials(path: 'sidebar', loadFromPublic: false); ?>

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <?php
        loadPartials(path: 'top-header', loadFromPublic: false); ?>

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-semibold">Hello, Calvin</h5>
                        <h6 class="text-slate-400">Welcome back!</h6>
                    </div>
                </div>

                <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Revenue</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium">$ <span class="counter-value"
                                                                                       data-target="45890">42205</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-currency-usd text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Visitor</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="2456">1857</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-account-group-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Properties</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="358">54</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-city-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Sell</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="243">60</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-lightning-bolt-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Rent</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="115">45</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-clock-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-8">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Revenue Analytics</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                            id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>
                            <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Sales Data</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                            id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>

                            <div class="p-6">
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Website</span>
                                        <span class="text-slate-400">50%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 50%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Team Member</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Agents</span>
                                        <span class="text-slate-400">6%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 6%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Social Media</span>
                                        <span class="text-slate-400">15%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Digital Marketing</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Others</span>
                                        <span class="text-slate-400">5%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 5%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="xl:col-span-3 lg:col-span-6 order-1">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Area Map</h6>

                <!-- End Content -->
            </div>
        </div><!--end container-->

        <?php
        loadPartials(path: 'dashboard-footer', loadFromPublic: false); ?>
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>