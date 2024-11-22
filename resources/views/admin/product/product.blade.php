@extends('./welcome')
@section('admin.content')
    <div class="content">

        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        Add Product</h3>
                </div>

            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    <div class="box !bg-transparent border-0 shadow-none">
                        <div class="box-body p-0">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xl:col-span-6">
                                    <div class="box ">
                                        <div class="box-body">
                                            <div class="space-y-3">
                                                <div class="space-y-2">
                                                    <label class="ti-form-label mb-0">Product Title</label>
                                                    <input type="text" class="my-auto ti-form-input"
                                                        placeholder="Dolar Leather Handbag For Women">
                                                </div>
                                                <div class="space-y-2">
                                                    <label class="ti-form-label mb-0">Product Id</label>
                                                    <input type="text" class="my-auto ti-form-input"
                                                        placeholder="#2515445145">
                                                </div>
                                                <div class="">
                                                    <label class="ti-form-label">Product Description</label>
                                                    <div id="product-editor"></div>
                                                </div>
                                                <div class="space-y-2">
                                                    <label class="ti-form-label">Product Features</label>
                                                    <textarea class="ti-form-input" rows="2"></textarea>
                                                    <label
                                                        class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                        should not exceed 500 letters</label>
                                                </div>
                                                <div class="space-y-2">
                                                    <label class="ti-form-label mb-0">Product Seo</label>
                                                    <input type="text" class="my-auto ti-form-input"
                                                        placeholder="Dolar Leather Handbag For Women">
                                                </div>
                                                <div class="space-y-2">
                                                    <label class="ti-form-label">Product Seo Description</label>
                                                    <textarea class="ti-form-input" rows="3"></textarea>
                                                    <label
                                                        class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                        should not exceed 500 letters</label>
                                                </div>
                                                <div class="grid grid-cols-12 gap-4">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="space-y-2 product-1">
                                                            <label class="ti-form-label mb-0">Product Status</label>
                                                            <select class="ti-form-select product-search">
                                                                <option value="">Status</option>
                                                                <option value="Clothing">Publish</option>
                                                                <option value="Footwear">Unpublish</option>
                                                                <option value="Accesories">Schedule</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="space-y-2  product-1">
                                                            <label class="ti-form-label mb-0">Product Visibility</label>
                                                            <select class="ti-form-select product-search">
                                                                <option value="">Visibility</option>
                                                                <option value="1">Private</option>
                                                                <option value="2">Public</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-6">
                                    <div class="box">
                                        <div class="box-body space-y-3">
                                            <div class="grid grid-cols-12 gap-4">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2 product-1">
                                                        <label class="ti-form-label mb-0">Product Category</label>
                                                        <select class="ti-form-select product-search">
                                                            <option value="">Category</option>
                                                            <option value="Clothing">Clothing</option>
                                                            <option value="Footwear">Footwear</option>
                                                            <option value="Accesories">Accesories</option>
                                                            <option value="Grooming">Grooming</option>
                                                            <option value="Ethnic &amp; Festive">Ethnic &amp; Festive
                                                            </option>
                                                            <option value="Jewellery">Jewellery</option>
                                                            <option value="Toys &amp; Babycare">Toys &amp; Babycare</option>
                                                            <option value="Festive Gifts">Festive Gifts</option>
                                                            <option value="Kitchen">Kitchen</option>
                                                            <option value="Dining">Dining</option>
                                                            <option value="Home Decors">Home Decors</option>
                                                            <option value="Stationery">Stationery</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2  product-1">
                                                        <label class="ti-form-label mb-0">Sub Category</label>
                                                        <select class="ti-form-select product-search">
                                                            <option value="">Gender</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2  product-1">
                                                        <label class="ti-form-label mb-0">Brand</label>
                                                        <select class="ti-form-select product-search">
                                                            <option value="">Select</option>
                                                            <option value="Armani">Armani</option>
                                                            <option value="Lacoste">Lacoste</option>
                                                            <option value="Puma">Puma</option>
                                                            <option value="Spykar">Spykar</option>
                                                            <option value="Mufti">Mufti</option>
                                                            <option value="Home Town">Home Town</option>
                                                            <option value="Arrabi">Arrabi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="space-y-2  product-1">
                                                        <label class="ti-form-label mb-0">Published Date and Time</label>
                                                        <input type="text"
                                                            class="ti-form-input focus:z-10 flatpickr-input"
                                                            id="product-datetime" placeholder="Choose date" readonly>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-span-12 lg:col-span-6">
                                                                                <div class="space-y-2  product-1">
                                                                                  <label class="ti-form-label mb-0">Product Size</label>
                                                                                  <select class="ti-form-select product-search">
                                                                                    <option value="Extra Small">Extra Small</option>
                                                                                    <option value="Small">Small</option>
                                                                                    <option value="Medium">Medium</option>
                                                                                    <option value="Large">Large</option>
                                                                                    <option value="XL">XL</option>
                                                                                    <option value="xxl">xxl</option>
                                                                                  </select>
                                                                                </div>
                                                                              </div> -->
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Actual Price </label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="$550">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Dealer Price </label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="$400">
                                                    </div>
                                                </div>

                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Product Stock limit</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="100">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Tax</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="40">
                                                    </div>
                                                </div>

                                                <!-- <div class="col-span-12 lg:col-span-4">
                                                                                <div class="space-y-2">
                                                                                  <label class="ti-form-label mb-0">Discount</label>
                                                                                  <input type="text" class="my-auto ti-form-input" placeholder="10%">
                                                                                </div>
                                                                              </div> -->
                                                <!-- <div class="col-span-12 lg:col-span-6">
                                                                                <div class="space-y-2">
                                                                                  <label class="ti-form-label">Available Colors</label>
                                                                                  <select class="ti-form-select product-search">
                                                                                    <option value="">Colors</option>
                                                                                    <option value="1">blue</option>
                                                                                    <option value="2">pink</option>
                                                                                    <option value="3">yellow</option>
                                                                                    <option value="4">orange</option>
                                                                                    <option value="5">lemon-green</option>
                                                                                    <option value="6">green</option>
                                                                                  </select>
                                                                                </div>
                                                                              </div> -->

                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="space-y-2  product-1">
                                                        <label class="ti-form-label mb-0">Availabilty</label>
                                                        <select class="ti-form-select product-search">
                                                            <option value="">Availabilty</option>
                                                            <option value="1">Instock</option>
                                                            <option value="2">Out Of Stock</option>
                                                        </select>
                                                    </div>
                                                </div>




                                                <!-- <div class="col-span-12 lg:col-span-6">
                                                                                <div class="space-y-2  product-1">
                                                                                  <label class="ti-form-label mb-0">Type</label>
                                                                                  <input type="text" class="my-auto ti-form-input" placeholder="Hand Bag">
                                                                                </div>
                                                                              </div>
                                                                              <div class="col-span-12 lg:col-span-6">
                                                                                <div class="space-y-2  product-1">
                                                                                  <label class="ti-form-label mb-0">Item Weight</label>
                                                                                  <input type="text" class="my-auto ti-form-input" placeholder="250grams">
                                                                                </div>
                                                                              </div> -->
                                            </div>

                                            <div class="space-y-2">
                                                <label class="flex justify-between ti-form-label">
                                                    <span class="my-auto">Product Images</span></label>
                                                <input type="file" class="filepond multiple-filepond" name="filepond"
                                                    multiple data-allow-reorder="true" data-max-file-size="3MB"
                                                    data-max-files="5">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label">Product Tags</label>
                                                <input class="ti-form-input product-tags custom class" id="product-tags"
                                                    type="text"
                                                    value="water-resistant, spacious ,5 pockets ,office bag"
                                                    placeholder="This is a placeholder">
                                            </div>


                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="box">

                                                    <div class="box-body">
                                                        <div class="hs-tooltip flex items-center">
                                                            <input type="checkbox" id="hs-tooltip-example"
                                                                class="hs-tooltip-toggle ti-switch shrink-0">
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
                                                                class="hs-tooltip-toggle ti-switch shrink-0">
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
                                                                class="hs-tooltip-toggle ti-switch shrink-0">
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
                                </div>
                            </div>
                        </div>
                        <div class="box-footer text-end border-t-0 px-0">
                            <a class="ti-btn ti-btn-primary"><i class="ri-add-line"></i>Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>

    </div>
@endsection
