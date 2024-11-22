@extends('./welcome')
@section('admin.content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">


            </div>

            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12 lg:col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">New Account</h5>
                        </div>
                        <div class="box-body">
                            <form class="sm:grid grid-cols-12 gap-x-6 space-y-4 lg:space-y-0">
                                <div
                                    class="col-span-12 lg:col-span-4 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                    <!-- <label class="w-32 ti-form-label mb-0"></label> -->
                                    <input type="email" class="my-auto ti-form-input" placeholder="Account Name">
                                </div>
                                <div
                                    class="col-span-12 lg:col-span-4 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                    <!-- <label class="w-32 ti-form-label mb-0">Amount</label> -->
                                    <input type="password" class="ti-form-input" placeholder="Amount">
                                </div>

                                <button type="submit"
                                    class="col-span-12 lg:col-span-3 ti-btn ti-btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-2 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Account</h5>
                        </div>
                        <div class="w-full h-screen bg-gray-100">
                            <div class="">
                                <div class="">
                                    <div class="">

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
                                                            Opening Balance
                                                        </th>
                                                        <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                            Current Balance
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
                                                                zubair
                                                            </div>
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                60000
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                50000
                                                            </span>
                                                        </td>

                                                        <td
                                                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                            <div class="hs-dropdown ti-dropdown">
                                                                <button aria-label="button"
                                                                    id="hs-dropdown-custom-icon-trigger" type="button"
                                                                    class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                                    <svg class="ti-dropdown-icon"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                        </path>
                                                                    </svg>
                                                                </button>

                                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                                    aria-labelledby="hs-dropdown-custom-trigger"
                                                                    style="">
                                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                        Add Balance
                                                                    </a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                        Withdrawn Balance
                                                                    </a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                        Transfer
                                                                    </a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                        History
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </td>


                                                    </tr>



                                                </tbody>
                                                <!-- BODY end -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-2 -->

            <!-- Start::row-3 -->

            <!-- End::row-3 -->

            <!-- Start::row-3 -->

            <!-- End::row-3 -->

        </div>
        <!-- Start::main-content -->

    </div>
@endsection
