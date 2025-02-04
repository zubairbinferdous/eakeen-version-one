@extends('./welcome')
@section('admin.content')
    <div class="content">

        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-sm font-medium">
                        Add Work Place</h3>
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


            <form action="{{ route('workPlaceAddData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-6 gap-x-6 gap-y-6">
                    <div class="col-span-6">
                        <div class="box !bg-transparent border-0 shadow-none">
                            <div class="box-body p-0">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-3 space-y-2">
                                                        <label class="ti-form-label mb-0">Packages Name</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Packages name" name="WorkPackages_name" required>
                                                    </div>
                                                    <div class="col-span-3 space-y-2">
                                                        <label class="ti-form-label mb-0">Packages Amount</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Packages amount" name="WorkPackages_amount" required>
                                                    </div>
                                                    <div class="col-span-3 space-y-2 product-1">
                                                        <label class="ti-form-label mb-0">Payment Type</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Payment type" name="WorkPayment_type" required>
                                                    </div>
                                                    <div class="col-span-3 space-y-2">
                                                        <label class="ti-form-label mb-0">Number</label>
                                                        <input type="text" class="my-auto ti-form-input"
                                                            placeholder="Number" name="number" required>
                                                    </div>
                                                    <div class="col-span-3 space-y-2 product-1">
                                                        <label for="product-status" class="ti-form-label mb-0">Product
                                                            Status</label>
                                                        <select id="product-status" class="ti-form-select product-search"
                                                            name="status" required>
                                                            <option value="" disabled selected>Status</option>
                                                            <option value="Publish">Publish</option>
                                                            <option value="Unpublish">Unpublish</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6 space-y-2">
                                                        <label class="ti-form-label">Task One</label>
                                                        <textarea class="ti-form-input" rows="5" name="taskOne" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="col-span-6 space-y-2">
                                                        <label class="ti-form-label">Task Two</label>
                                                        <textarea class="ti-form-input" rows="5" name="taskTwo" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="col-span-6 space-y-2">
                                                        <label class="ti-form-label">Task three </label>
                                                        <textarea class="ti-form-input" rows="5" name="taskThree" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="col-span-6 space-y-2">
                                                        <label class="ti-form-label">Task four </label>
                                                        <textarea class="ti-form-input" rows="5" name="taskFour" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="col-span-6 space-y-2">
                                                        <label class="ti-form-label">Task five </label>
                                                        <textarea class="ti-form-input" rows="5" name="taskFive" required></textarea>
                                                        <label
                                                            class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description
                                                            should not exceed 500 letters</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
