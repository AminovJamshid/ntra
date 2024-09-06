<?php

declare(strict_types=1);

loadPartial('headerDash.php');
?>

    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <div class="grid grid-cols-1">
                <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                    <div class="relative shrink-0">
                        <img src="../assets/images/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1">
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                        <div class="profile-pic text-center mb-5">
                            <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-24 mx-auto">
                                    <img src="../assets/images/client/07.jpg" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-lg font-semibold">Calvin Carlo</h5>
                                    <p class="text-slate-400">calvin@hotmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-700">
                            <h5 class="text-xl font-semibold mt-4">Personal Details :</h5>
                            <div class="mt-4">
                                <div class="flex items-center">
                                    <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                        <a href="" class="text-slate-400">calvin@hotmail.com</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Skills :</h6>
                                        <a href="" class="text-slate-400">html</a>, <a href="" class="text-slate-400">css</a>, <a href="" class="text-slate-400">js</a>, <a href="" class="text-slate-400">mysql</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Language :</h6>
                                        <a href="" class="text-slate-400">English</a>, <a href="" class="text-slate-400">Japanese</a>, <a href="" class="text-slate-400">Chinese</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Website :</h6>
                                        <a href="" class="text-slate-400">www.cristina.com</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="gift" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Birthday :</h6>
                                        <p class="text-slate-400 mb-0">2nd March, 1996</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Location :</h6>
                                        <a href="" class="text-slate-400">Beijing, China</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-green-600 dark:text-white font-medium mb-0">Cell No :</h6>
                                        <a href="" class="text-slate-400">(+12) 1254-56-4896</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <h5 class="text-xl font-semibold">Calvin Carlo</h5>

                            <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                        </div>

                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <h5 class="text-xl font-semibold">My Property :</h5>

                            <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/1.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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

                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/2.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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

                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/3.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">3723 SANDBAR DR, Addis, LA 70710, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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

                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/4.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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

                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/5.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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

                                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                    <div class="relative">
                                        <img src="assets/images/property/6.jpg" alt="">

                                        <div class="absolute top-4 end-4">
                                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <div class="pb-6">
                                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
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
                                                <p class="text-lg font-medium">$5000</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->

<?php
loadPartial('footerDash.php');