@extends('./welcome')
@section('admin.content')
    <style>
        .product-image img {
            height: 90px;
            width: 164px;
            /* border-radius: 50%; */
        }
    </style>
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-1xl font-medium">
                        POS</h3>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-5">
                    <div class="box">
                        <div class="box-body">
                            {{-- <div class="relative mb-2">
                                <label for="hs-table-search" class="sr-only">Search Barcode</label>
                                <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-4 rtl:pl-4">
                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                        </path>
                                    </svg>
                                </div><input type="text" name="hs-table-search" id="hs-table-search"
                                    class="p-3 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Search Barcode">
                            </div> --}}
                            <div class="relative mb-2">
                                <label for="hs-table-search" class="sr-only">Product name</label>
                                <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-4 rtl:pl-4">
                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                        </path>
                                    </svg>
                                </div><input type="text" name="hs-table-search" id="hs-table-search"
                                    class="p-3 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Product name">
                            </div>

                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title my-auto mb-5">Product Data</h5>
                            <div
                                class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                                <table class="min-w-full">
                                    <!-- HEAD start -->
                                    <thead>
                                        <tr
                                            class="bg-gray-300 border-b border-gray-200 text-xs leading-4  uppercase tracking-wider">

                                            <th class="px-6 py-3 text-left font-medium  text-zinc-50">
                                                Name
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Quantity
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Price
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">

                                                Sub T
                                            </th>

                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                action
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- HEAD end -->
                                    <!-- BODY start -->
                                    <tbody class="bg-white">
                                        <tr>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">
                                                    test
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">
                                                    1
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">
                                                    100
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    100
                                                </span>
                                            </td>


                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn p-0 flex-shrink-0 h-[1.375rem] w-[1.375rem] bg-primary text-white hover:bg-primary focus:ring-0 focus:ring-primary dark:focus:ring-offset-white/10">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                                        class="size-2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>

                                                </button>

                                            </td>


                                        </tr>


                                    </tbody>
                                    <!-- BODY end -->
                                </table>
                            </div>
                        </div>

                        <div class="col-span-12">


                            <div class="box-body space-y-3">

                                <button type="button"
                                    class="hs-collapse-toggle w-full py-2 px-4 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
                                    id="hs-category-collapse" data-hs-collapse="#category-collapse">
                                    Order Submit

                                </button>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="col-span-12 xl:col-span-7">
                    <div class="box">
                        <div class="box-body">
                            <div class="">
                                <div class="hs-dropdown ti-dropdown">
                                    <div class="">
                                        <div class="relative">
                                            <label for="hs-table-search" class="sr-only">Search</label>
                                            <div
                                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-4 rtl:pl-4">
                                                <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                    </path>
                                                </svg>
                                            </div><input type="text" name="hs-table-search" id="hs-table-search"
                                                class=" ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Search for items">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">

                        @foreach ($data as $item)
                            <div class="col-span-12 md:col-span-2 xxl:!col-span-2">
                                <div class="product-box box">
                                    <div class="box-body space-y-2">
                                        <div class="product-image">
                                            <a href="products-details.html" class="image">
                                                <img class="mx-auto rounded-sm" src="{{ $item->ProductImages }}"
                                                    alt="img">
                                            </a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-xs font-semibold">{{ $item->product_title }}</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                <h5 class="text-sm font-semibold">{{ $item->actual_price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <!-- <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mb-5">
                                                                                                                                                                <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full"
                                                                                                                                                                    href="javascript:void(0);">
                                                                                                                                                                    <span aria-hidden="true">«</span>
                                                                                                                                                                    <span class="sr-only">Previous</span>
                                                                                                                                                                </a>
                                                                                                                                                                <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center text-sm font-medium rounded-full"
                                                                                                                                                                    href="javascript:void(0);" aria-current="page">1</a>
                                                                                                                                                                <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full"
                                                                                                                                                                    href="javascript:void(0);">2</a>
                                                                                                                                                                <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full"
                                                                                                                                                                    href="javascript:void(0);">3</a>
                                                                                                                                                                <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full"
                                                                                                                                                                    href="javascript:void(0);">
                                                                                                                                                                    <span class="sr-only">Next</span>
                                                                                                                                                                    <span aria-hidden="true">»</span>
                                                                                                                                                                </a>
                                                                                                                                                            </nav> -->
                </div>
            </div>

            <!-- End::row-1 -->
        </div>
        <!-- Start::main-content -->


    </div>
@endsection
