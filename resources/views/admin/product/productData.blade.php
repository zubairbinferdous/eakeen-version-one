@extends('./welcome')
@section('admin.content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        Product List</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Pages
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                        Product List
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="box">
                <div class="box-header sm:flex sm:justify-between space-y-3 sm:space-y-0">
                    <h5 class="box-title my-auto">Products List</h5>
                    <a href="{{ route('addProduct') }}" class="ti-btn ti-btn-primary m-0 py-2"><i
                            class="ri ri-add-line"></i>Add
                        Product</a>
                </div>
                <div class="box-body">
                    <div class="table-bordered whitespace-nowrap rounded-sm overflow-auto">
                        <table class="ti-custom-table ti-custom-table-head edit-table">
                            <thead class="bg-gray-100 dark:bg-black/20">
                                <tr class="">
                                    <th scope="col" class="dark:text-white/70">
                                        <div class="flex leading-[0] justify-center">
                                            <input type="checkbox" class="border-gray-500 ti-form-checkbox mt-0.5 check-all"
                                                id="hs-default-checkbox">
                                            <label for="hs-default-checkbox"
                                                class="text-sm text-gray-500 dark:text-white/70"></label>
                                        </div>
                                    </th>
                                    <th scope="col" class="dark:text-white/70">Product Id</th>
                                    <th scope="col" class="dark:text-white/70">Product</th>
                                    <th scope="col" class="dark:text-white/70">Category</th>
                                    <th scope="col" class="dark:text-white/70">Price</th>
                                    <th scope="col" class="dark:text-white/70">Stock</th>
                                    <th scope="col" class="dark:text-white/70">Status</th>
                                    <th scope="col" class="dark:text-white/70">Date</th>
                                    <th scope="col" class="!text-end dark:text-white/70">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-1" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-1" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1521</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/2.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">
                                                Shirts For Men</span>
                                        </div>
                                    </td>
                                    <td>Clothing</td>
                                    <td>$999</td>
                                    <td>Instock</td>
                                    <td>Published</td>
                                    <td>01-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-2" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-2" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1522</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/16.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Smart
                                                Watch</span>
                                        </div>
                                    </td>
                                    <td>Accesories</td>
                                    <td>$399</td>
                                    <td>InStock</td>
                                    <td>Unpublished</td>
                                    <td>02-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-3" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-3" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1523</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/18.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">HandBag
                                                For Womens</span>
                                        </div>
                                    </td>
                                    <td>Accesories</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>03-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-4" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-4" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1524</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/11.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Frock
                                                For Girls</span>
                                        </div>
                                    </td>
                                    <td>Clothing</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>04-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-5" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-5" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1525</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/4.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Bluetooth
                                                Headphones</span>
                                        </div>
                                    </td>
                                    <td>Electronics</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>05-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-6" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-6" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1526</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/19.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Purse
                                                For Women</span>
                                        </div>
                                    </td>
                                    <td>Accesories</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>06-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-7" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-7" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1527</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/3.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Blue
                                                Jacket For Men</span>
                                        </div>
                                    </td>
                                    <td>Clothing</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>07-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-8" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-8" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1528</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/8.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Men's
                                                Cowboy's Hat</span>
                                        </div>
                                    </td>
                                    <td>Accesories</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>08-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="product-list">
                                    <td class="">
                                        <div class="flex items-center h-5 product-checkbox justify-center">
                                            <input id="product-check-9" type="checkbox"
                                                class="border-gray-500 ti-form-checkbox">
                                            <label for="product-check-9" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="font-semibold">#spk1529</td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="../assets/img/ecommerce/products/10.png" alt="Image Description">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white my-auto truncate lg:max-w-[100px]">Leather
                                                Wallet For Grils</span>
                                        </div>
                                    </td>
                                    <td>Accesories</td>
                                    <td>$699</td>
                                    <td>InStock</td>
                                    <td>published</td>
                                    <td>09-01-2023</td>
                                    <td class="text-end font-medium">
                                        <a aria-label="anchor" href="products-details.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a aria-label="anchor" href="edit-product.html"
                                            class="w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="product-btn w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mt-5">
                        <a class="w-10 h-10 bg-transparent text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full"
                            href="javascript:void(0);">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center text-sm font-medium rounded-full"
                            href="javascript:void(0);" aria-current="page">1</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full"
                            href="javascript:void(0);">2</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full"
                            href="javascript:void(0);">3</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full"
                            href="javascript:void(0);">
                            <span class="sr-only">Next</span>
                            <span aria-hidden="true">»</span>
                        </a>
                    </nav>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->

    </div>
@endsection
