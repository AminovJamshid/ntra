<?php
declare(strict_types=1);

/**
 * @var $branches
 */

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
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Create Ad</li>
                </ul>
            </div>


            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <div>
                            <p class="font-medium mb-4">Upload your property image here, Please click "Upload Image" Button.</p>
                            <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                            <input form="ads-create" type="file" id="input-file" name="image" accept="image/*" onchange={handleChange()} hidden>
                            <label class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
                        </div>
                    </div>

                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <form id="ads-create" action="/ads/create" method="post" enctype="multipart/form-data">
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12">
                                    <label for="title" class="font-medium">Sarlavha</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="title" id="title" type="text" class="form-input ps-11" placeholder="Ads Title :" required>
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label for="address" class="font-medium">Manzil</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="address" id="address" type="text" class="form-input ps-11" placeholder="Manzil:" required>
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-1">
                                    <label for="rooms" class="font-medium">Xonalar</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="rooms" id="rooms" type="number" class="form-input ps-11" placeholder="Xonalar:" required>
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-12">
                                    <label for="square" class="font-medium">Maydon (m.kv)</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="square" id="square" type="number" class="form-input ps-11" placeholder="Maydon:" required>
                                    </div>
                                </div>


                                <div class="md:col-span-4 col-span-12">
                                    <label for="branch" class="font-medium">Branch</label>
                                    <div class="form-icon relative mt-2">
                                        <select name="branch" class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="branch">

                                            <?php foreach ($branches as $branch): ?>

                                                <option value="<?= $branch->id ?>" selected><?= $branch->name ?></option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label for="desc" class="font-medium">Ta'rif</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-text absolute top-2 start-4 text-green-600"></i>
                                        <textarea name="desc" id="desc" class="form-input ps-11" placeholder="E'lon bo'yicha ta'rif..." required></textarea>
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label for="price" class="font-medium">Narxi ($):</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-currency-usd absolute top-2 start-4 text-green-600"></i>
                                        <input name="price" id="price" type="number" class="form-input ps-11" placeholder="Narxi:">
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-12 hidden">
                                    <div class="form-icon relative mt-2">
                                        <input name="user" value="<?=(new \App\Session())->getId() ?>" type="number" class="form-input ps-11">
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-12 hidden">
                                    <div class="form-icon relative mt-2">
                                        <input name="status" value="1" type="number" class="form-input ps-11">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Property</button>
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