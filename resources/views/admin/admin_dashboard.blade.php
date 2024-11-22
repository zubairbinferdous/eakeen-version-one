@extends('./welcome')
@section('admin.content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-1xl font-medium">
                        Today Summary</h3>
                </div>

            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-pink-600">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-green-400">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-orange-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-gray-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 xxl:col-span-3">

                </div>


            </div>
        </div>
        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-1xl font-medium">
                        Current Month Summary</h3>
                </div>

            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-orange-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-gray-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-pink-600">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-green-400">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-1xl font-medium">
                        Total</h3>
                </div>

            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-pink-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-red-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-green-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-3 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-fuchsia-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-6 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-purple-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-6 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-indigo-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-4 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-blue-500">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-4 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-yellow-400">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xxxl:col-span-4 md:col-span-4">
                    <div class="box">
                        <div class="box-body bg-red-400">
                            <div class="flex space-x-4 rtl:space-x-reverse">
                                <div class="flex items-center justify-center ecommerce-icon px-0">
                                    <span class="rounded-sm p-4 bg-primary/40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="">
                                    <div class="mb-2 font-semibold text-white">Today Sold - Purchase Cost</div>
                                    <div class=" dark:text-white/70 mb-1 text-xs">
                                        <span
                                            class="text-gray-800 font-bold text-xl leading-none align-bottom dark:text-white">
                                            12,088
                                        </span>
                                    </div>
                                    <div>
                                        <!-- <span class="text-xs mb-0">Increased by <span class="text-success">+12.2%</span></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <!-- End::row-1 -->



    </div>
    <!-- Start::main-content -->
@endsection
