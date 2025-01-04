@extends('./welcome')
@section('admin.content')
    <div class="content">

        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-sm font-medium">
                        Add Packages</h3>
                </div>

            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-x-12">
                    <div class="col-span-12">
                        <div class="box !bg-transparent border-0 shadow-none">
                            <div class="box-body p-0">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 ">
                                        <div class="box ">
                                            <div class="box-body">
                                                <div class="space-y-3">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Packages_name</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Packages name" name="Packages_name" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Packages amount</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Packages amount" name="Packages_amount" required>
                                                    </div>


                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="col-span-12 ">
                                                            <div class="space-y-2 product-1">
                                                                <label class="ti-form-label mb-0">Payment type</label>
                                                                <input type="text" class="my-auto ti-form-input"
                                                                    placeholder="payment_type" name="payment_type" required>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Number</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="number" name="number" required>
                                                    </div>


                                                    <div class="space-y-2 product-1">
                                                        <label for="product-status" class="ti-form-label mb-0">Product
                                                            Status</label>
                                                        <select id="product-status" class="ti-form-select product-search"
                                                            name="status" required>
                                                            <option value="" disabled selected>Status</option>
                                                            <option value="Publish">Publish</option>
                                                            <option value="Unpublish">Unpublish</option>
                                                        </select>
                                                    </div>




                                                    <div class="space-y-2">
                                                        <label class="ti-form-label">Note One</label>
                                                        <textarea class="ti-form-input" rows="5" name="noteOne" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label">Note Two</label>
                                                        <textarea class="ti-form-input" rows="5" name="noteTwo" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-span-12 xl:col-span-6">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="grid grid-cols-12 gap-4">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2 product-1">
                                                            <label class="ti-form-label mb-0">Product Category</label>
                                                            <select class="ti-form-select product-search" name="Category"
                                                                required>
                                                                <option value="">Category</option>

                                                                @foreach ($category as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->category_name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2  product-1">
                                                            <label class="ti-form-label mb-0">Sub Category</label>
                                                            <select class="ti-form-select product-search"
                                                                name="SubCategory">
                                                                <option value="">SubCategory</option>
                                                                @foreach ($subCategory as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->subcategory_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2  product-1">
                                                            <label class="ti-form-label mb-0">Brand</label>
                                                            <select class="ti-form-select product-search" name="Brand">
                                                                <option value="">Select</option>
                                                                @foreach ($brand as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->brand_name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Actual Price </label>
                                                            <input type="text" class="my-auto ti-form-input"
                                                                placeholder="Actual Price" name="ActualPrice" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Discount Price </label>
                                                            <input type="text" class="my-auto ti-form-input"
                                                                placeholder="Discount Price" name="DiscountPrice">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Dealer Price </label>
                                                            <input type="text" class="my-auto ti-form-input"
                                                                placeholder="Dealer Price" name="DealerPrice">
                                                        </div>
                                                    </div>

                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Product Stock
                                                                limit</label>
                                                            <input type="text" class="my-auto ti-form-input"
                                                                placeholder="Stock
                                                                limit"
                                                                name="Stock">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Coin</label>
                                                            <input type="text" class="my-auto ti-form-input"
                                                                placeholder="Coin" name="coin" required>
                                                        </div>
                                                    </div>



                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="space-y-2  product-1">
                                                            <label class="ti-form-label mb-0">Availabilty</label>
                                                            <select class="ti-form-select product-search" required
                                                                name="Availabilty">
                                                                <option value="">Availabilty</option>
                                                                <option value="1">Instock</option>
                                                                <option value="2">Out Of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="space-y-2">
                                                    <label class="flex justify-between ti-form-label">
                                                        <span class="my-auto">Product Images</span></label>
                                                    <input type="file" class="" name="ProductImages" required>
                                                </div>

                                                <div class="space-y-2">
                                                    <label class="ti-form-label">Product Tags</label>
                                                    <input class="ti-form-input product-tags custom class"
                                                        id="product-tags" type="text" value=""
                                                        placeholder="product tags" name="tag[]" required>
                                                </div>


                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="box">

                                                        <div class="box-body">
                                                            <div class="hs-tooltip flex items-center">
                                                                <input type="checkbox" id="hs-tooltip-example"
                                                                    class="hs-tooltip-toggle ti-switch shrink-0"
                                                                    name="HotDeals" value="1">
                                                                <label for="hs-tooltip-example"
                                                                    class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Hot
                                                                    Deals</label>
                                                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700 hidden"
                                                                    role="tooltip" data-popper-placement="top"
                                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1151px, -408px);">
                                                                    Enable push notifications
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="box">

                                                        <div class="box-body">
                                                            <div class="hs-tooltip flex items-center">
                                                                <input type="checkbox" id="hs-tooltip-example"
                                                                    class="hs-tooltip-toggle ti-switch shrink-0"
                                                                    name="Featured" value="1">
                                                                <label for="hs-tooltip-example"
                                                                    class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Featured</label>
                                                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700 hidden"
                                                                    role="tooltip" data-popper-placement="top"
                                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1151px, -408px);">
                                                                    Enable push notifications
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="box">

                                                        <div class="box-body">
                                                            <div class="hs-tooltip flex items-center">
                                                                <input type="checkbox" id="hs-tooltip-example"
                                                                    name="TodayDeal"
                                                                    class="hs-tooltip-toggle ti-switch shrink-0"
                                                                    value="1">
                                                                <label for="hs-tooltip-example"
                                                                    class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Today
                                                                    Deal</label>
                                                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700 hidden"
                                                                    role="tooltip" data-popper-placement="top"
                                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1151px, -408px);">
                                                                    Enable push notifications
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                                <button type="submit"
                                    class="bg-red-400 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Submit
                                    Packages</button>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- End::row-1 -->

        </div>

    </div>
@endsection
