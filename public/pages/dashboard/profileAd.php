<?php

declare(strict_types=1);

/**
 * @var TYPE_NAME $ad
 */

loadPartial('headerDash.php');
?>


    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Starter Page</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="index.html">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Starter Page</li>
                </ul>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-2 gap-6 mt-6">
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 relative">
                        <div class="tiny-one-item">
                            <div class="tiny-slide">
                                <img src="../assets/images/ads/<?= $ad->image_name ?>" class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-6 rounded-md shadow dark:shadow-gray-700">
                        <h4 class="text-2xl font-medium">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h4>

                        <ul class="py-6 flex items-center list-none">
                            <li class="flex items-center lg:me-6 me-4">
                                <i class="mdi mdi-arrow-expand-all lg:text-3xl text-2xl me-2 text-green-600"></i>
                                <span class="lg:text-xl">8000sqf</span>
                            </li>

                            <li class="flex items-center lg:me-6 me-4">
                                <i class="mdi mdi-bed lg:text-3xl text-2xl me-2 text-green-600"></i>
                                <span class="lg:text-xl">4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="mdi mdi-shower lg:text-3xl text-2xl me-2 text-green-600"></i>
                                <span class="lg:text-xl">4 Baths</span>
                            </li>
                        </ul>

                        <p class="text-slate-400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="text-slate-400 mt-4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <p class="text-slate-400 mt-4">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>

                        <div class="w-full leading-[0] border-0 mt-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4">
                    <div class="rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-700">
                        <div class="p-6">
                            <h5 class="text-2xl font-medium">Price:</h5>

                            <div class="flex justify-between items-center mt-4">
                                <span class="text-xl font-medium">$ 45,231</span>

                                <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                            </div>

                            <ul class="list-none mt-4">
                                <li class="flex justify-between items-center">
                                    <span class="text-slate-400 text-sm">Days on Hously</span>
                                    <span class="font-medium text-sm">124 Days</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Price per sq ft</span>
                                    <span class="font-medium text-sm">$ 186</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Monthly Payment (estimate)</span>
                                    <span class="font-medium text-sm">$ 1497/Monthly</span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex">
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Book Now</a>
                            </div>
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Offer Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

                        <div class="mt-6">
                            <a href="contact.html" class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i class="mdi mdi-phone align-middle me-2"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->


<?php
loadPartial('footerDash.php');
?>