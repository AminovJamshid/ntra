<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);

/**
 * @var $user
 * @var array $ads
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
                    <h5 class="text-lg font-semibold">Foydalanuvchilar</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                            <a href="/admin">Dashboard</a></li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                            <i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                            aria-current="page">
                            <a href="/admin/users">Foydalanuvchilar</a>
                        </li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                            <i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                            aria-current="page"><?= $user->username ?>
                        </li>
                    </ul>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                    <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center mb-5">
                                <input id="pro-img" name="profile-image" type="file" class="hidden"
                                       onchange="loadFile(event)"/>
                                <div>
                                    <div class="relative size-24 mx-auto">
                                        <img src="assets/images/client/07.jpg"
                                             class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                             id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold"><?= $user?->email ?></h5>
                                        <p class="text-slate-400"><?= $user->email ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <h5 class="text-xl font-semibold mt-4">Shaxsiy ma'lumotlar :</h5>
                                <div class="mt-4">
                                    <div class="flex items-center">
                                        <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                            <a href="" class="text-slate-400"><?= $user->username ?></a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-green-600 dark:text-white font-medium mb-0">Position :</h6>
                                            <div class="text-slate-400"><?= $user->position ?></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i class="mdi mdi-gender-male-female text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-green-600 dark:text-white font-medium mb-0">Gender :</h6>
                                            <div class="text-slate-400"><?= $user->position ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-xl font-semibold"><?= $user->username ?></h5>

                                <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self
                                    and achieve all the milestone with good guidance and reach up to the project
                                    manager. In this journey, I understand all the procedure which make me a good
                                    developer, team leader, and a project manager.</p>
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-xl font-semibold">E'lonlar:</h5>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                                    <?php
                                    /**
                                     * @var $ads
                                     */
                                    foreach ($ads as $ad):?>
                                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                            <div class="relative">
                                                <img src="<?= \App\Image::show($ad->image) ?>" alt="">

                                                <div class="absolute top-4 end-4">
                                                    <a href="/admin/ads/update/<?= $ad->id ?>"
                                                       class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                                class="mdi mdi-pencil text-[20px]"></i></a>
                                                </div>
                                            </div>

                                            <div class="p-6">
                                                <div class="pb-6">
                                                    <a href="/ads/<?= $ad->id ?>"
                                                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title; ?></a>
                                                </div>

                                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                    <li class="flex items-center me-4">
                                                        <i class="mdi mdi-arrow-expand-all text-2xl me-2 text-green-600"></i>
                                                        <span>8000sqf</span>
                                                    </li>

                                                    <li class="flex items-center me-4">
                                                        <i class="mdi mdi-bed text-2xl me-2 text-green-600"></i>
                                                        <span>4 Beds</span>
                                                    </li>

                                                    <li class="flex items-center">
                                                        <i class="mdi mdi-shower text-2xl me-2 text-green-600"></i>
                                                        <span>4 Baths</span>
                                                    </li>
                                                </ul>

                                                <ul class="pt-6 flex justify-between items-center list-none">
                                                    <li>
                                                        <span class="text-slate-400">Price</span>
                                                        <p class="text-lg font-medium">$ <?= $ad->price ?></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div><!--end property content-->
                                    <?php
                                    endforeach; ?>
                                </div><!--en grid-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->

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
