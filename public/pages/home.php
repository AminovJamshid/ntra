<?php
loadPartial('header.php');
loadPartial('navbar.php');
?>

    <!-- Start Hero -->
    <section class="relative mt-20 table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Easy way to find your <br> dream property</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <div class="container relative -mt-16 z-1">
        <div class="grid grid-cols-1">
            <form class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-md dark:shadow-gray-700">
                <div class="registration-form text-dark text-start">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                        <div>
                            <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <i class="uil uil-search icons"></i>
                                <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                            </div>
                        </div>


                        <div>
                            <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <i class="uil uil-estate icons"></i>
                                <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-buy" aria-label="Default select example">
                                    <option>Houses</option>
                                    <option>Apartment</option>
                                    <option>Offices</option>
                                    <option>Townhome</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Min Price :</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <i class="uil uil-usd-circle icons"></i>
                                <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-buy" aria-label="Default select example">
                                    <option>Min Price</option>
                                    <option>500</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                    <option>4000</option>
                                    <option>5000</option>
                                    <option>6000</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Max Price :</label>
                            <div class="filter-search-form relative mt-2">
                                <i class="uil uil-usd-circle icons"></i>
                                <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-buy" aria-label="Default select example">
                                    <option>Max Price</option>
                                    <option>500</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                    <option>4000</option>
                                    <option>5000</option>
                                    <option>6000</option>
                                </select>
                            </div>
                        </div>

                        <div class="lg:mt-6">
                            <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </form><!--end form-->
        </div><!--end grid-->
    </div><!--end container-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative lg:py-1 py-10">
        <div class="container relative">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                <?php /** @var TYPE_NAME $ads */

                foreach ($ads as $ad): ?>
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                        <a href="/ads/<?= $ad->id ?>">
                            <div class="relative">
                                <img src="../assets/images/ads/<?=$ad->image_name ?>" alt="">

                                <div class="absolute top-4 end-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                </div>
                            </div>
                        </a>
                        <div class="p-6">
                            <div class="pb-6">
                                <a href="/ads/<?= $ad->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title ?></a>
                            </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span><?= $ad->square ?> m2</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="mdi mdi-door-open text-2xl me-2 text-green-600"></i>
                                    <span><?= $ad->rooms ?> rooms</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$<?=$ad->price ?></p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                <?php endforeach; ?>

            </div><!--en grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <nav>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                    <i class="uil uil-angle-left text-[20px]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 size-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">3</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                            </li>
                            <li>
                                <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                    <i class="uil uil-angle-right text-[20px]"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

<?php loadPartial('footer.php');