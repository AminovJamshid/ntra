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
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Create Status</li>
                </ul>
            </div>

            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <form id="status-create" action="/status/create" method="post" enctype="multipart/form-data">
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12">
                                    <div class="position-relative">
                                        <label for="status-create" class="font-medium">Status</label>
                                        <select name="status" class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                            <option value="activate" selected>Activate</option>
                                            <option value="deactivate">Deactivate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Status</button>
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