<?php
declare(strict_types=1);

loadPartial('headerDash.php');
?>

    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->

            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Add Property</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="#">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Create Branch</li>
                </ul>
            </div>

            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">

                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <form id="branch-create" action="/branch/create" method="post" enctype="multipart/form-data">
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12">
                                    <label for="branch" class="font-medium">Branch</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="branch" id="branch" type="text" class="form-input ps-11" placeholder="Filial:" required>
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label for="address" class="font-medium">Manzil</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="address" id="address" type="text" class="form-input ps-11" placeholder="Manzil:" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Branch</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->

<?php
loadPartial('footerDash.php');
?>