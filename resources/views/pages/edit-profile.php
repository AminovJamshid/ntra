<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);

/**
 * @var $user
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
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center">
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
                                        <h5 class="text-lg font-semibold"><?= $user->username ?></h5>
                                        <p class="text-slate-400"><?= $user->email ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Shaxsiy ma'lumotlar:</h5>
                                <form>
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Ism: <span
                                                        class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input type="text"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Ism:"
                                                       id="firstname"
                                                       name="name"
                                                       required=""
                                                       value="<?= $user->username ?>">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Sharif : <span
                                                        class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user-check" class="size-4 absolute top-3 start-4"></i>
                                                <input type="text"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Last Name:" id="lastname" name="name">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Email : <span
                                                        class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input type="email"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Email"
                                                       name="email"
                                                       required=""
                                                       value="<?= $user->email ?>">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Position : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="bookmark" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="occupation" type="text"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Position:"
                                                value="<?= $user->position ?>">
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <input type="submit" id="submit" name="send"
                                           class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5"
                                           value="Saqlash">
                                </form><!--end form-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>

                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Phone No. :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="phone"
                                                           class="size-4 absolute top-3 start-4"></i>
                                                        <input name="number" id="number" type="number"
                                                               class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                               placeholder="Phone :">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Website :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="globe"
                                                           class="size-4 absolute top-3 start-4"></i>
                                                        <input name="url" id="url" type="url"
                                                               class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                               placeholder="Url :">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                                Add
                                            </button>
                                        </form>
                                    </div><!--end col-->

                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Old password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password"
                                                               class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                               placeholder="Old password" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password"
                                                               class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                               placeholder="New password" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Re-type New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password"
                                                               class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                               placeholder="Re-type New password" required="">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                                Save password
                                            </button>
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4 text-red-600">Delete Account :</h5>

                                <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below
                                    "Delete" button</p>

                                <a href=""
                                   class="btn bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
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
