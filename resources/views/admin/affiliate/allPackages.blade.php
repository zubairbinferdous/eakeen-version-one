@extends('./welcome')
@section('admin.content')
    <div class="content">

        <div class="main-content">

            <div class="w-full h-screen bg-gray-100">
                <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">

                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">All Affiliate Packages</h5>
                                </div>

                                {{-- <div class="box-body">
                                    <form class="sm:grid grid-cols-12 gap-x-6 space-y-4 lg:space-y-0">

                                        <div
                                            class="col-span-12 lg:col-span-3 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                            <!-- <label class="w-32 ti-form-label mb-0"></label> -->
                                            <input type="email" class="my-auto ti-form-input" placeholder="Bill Number">
                                        </div>
                                        <div
                                            class="col-span-12 lg:col-span-3 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                            <!-- <label class="w-32 ti-form-label mb-0">Amount</label> -->
                                            <input type="password" class="ti-form-input" placeholder="Date">
                                        </div>

                                        <select class="ti-form-select col-span-12 lg:col-span-3 ">
                                            <option selected="">Customer</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>


                                        <select class="ti-form-select col-span-12 lg:col-span-3 ">
                                            <option selected="">Select Product</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>


                                        <div class="box_10">
                                            <button type="submit"
                                                class="col-span-12 lg:col-span-3 ti-btn ti-btn-primary">Search
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                            <div
                                class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                                <table class="w-full">
                                    <!-- HEAD start -->
                                    <thead>
                                        <tr
                                            class="bg-gray-300 border-b border-gray-200 text-xs leading-4  uppercase tracking-wider">

                                            <th class="px-6 py-3 text-left font-medium  text-zinc-50">
                                                #
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Packages Name
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Packages Amount

                                            </th>

                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Payment Type
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Number
                                            </th>


                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Status
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Note One
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Note Two
                                            </th>

                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <!-- HEAD end -->
                                    <!-- BODY start -->
                                    <tbody class="bg-white">
                                        @foreach ($data as $key => $item)
                                            <tr>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $key + 1 }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->Packages_name }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->Packages_amount }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->payment_type }}
                                                    </div>
                                                </td>


                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $item->number }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $item->status }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ Str::limit($item->noteOne, 5, '...') }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ Str::limit($item->noteTwo, 5, '...') }}
                                                    </span>
                                                </td>


                                                <td
                                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger"
                                                            type="button"
                                                            class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                            aria-labelledby="hs-dropdown-custom-trigger" style="">
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Edit
                                                            </a>
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Delete
                                                            </a>

                                                        </div>
                                                    </div>

                                                </td>

                                            </tr>
                                        @endforeach


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
@endsection
