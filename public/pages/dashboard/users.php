<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
/**
 * @var array $users
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
                            aria-current="page">Foydalanuvchilar
                        </li>
                    </ul>
                </div>

                <div class="relative mt-3 overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="relative overflow-x-auto block w-full" data-simplebar>
                        <table class="w-full text-start">
                            <thead class="text-base">
                            <tr>
                                <th class="text-start font-semibold text-[15px] px-4 py-3">#</th>
                                <th class="text-start font-semibold text-[15px] px-4 py-3">Avatar</th>
                                <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[120px]">Username</th>
                                <th class="text-start font-semibold text-[15px] px-4 py-3">Email</th>
                                <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[40px]">Position</th>
                                <th class="text-end font-semibold text-[15px] px-4 py-3 min-w-[70px]">Gender</th>
                                <th class="text-end font-semibold text-[15px] px-4 py-3 min-w-[70px]">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($users as $user):?>
                                <tr>
                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                        <span class="text-slate-400"><?= $user->id ?></span>
                                    </td>
                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                        <div class="relative md:shrink-0">
                                            <img src="assets/images/property/1.jpg"
                                                 class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>
                                    </th>
                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <?php echo "<a href='/admin/users/$user->id'>$user->username</a>";?>
                                    </th>
                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                        <span class="text-slate-400"><?= $user->email ?></span>
                                    </td>
                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                        <?= $user->position ?>
                                    </th>
                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                        <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1"><?= $user->gender ?></span>
                                    </td>
                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                        <a href="/admin/users/update/<?= $user->id ?>"
                                           title="edit"
                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">
                                            <i class="mdi mdi-pencil text-[20px]"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

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
