@extends('./welcome')
@section('admin.content')
    <div class="content">

        <div class="main-content">

            <div class="w-full h-screen bg-gray-100">
                <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">

                        <div class="mr-2 py-4 flex flex-wrap flex-grow justify-between">

                        </div>
                        <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <a href="{{ route('owner') }}"
                                class=" mb-5  inline-block px-4 py-2 border border-transparent text-sm leading-5 font-medium  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                                Create New Owner
                            </a>
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
                                                mobile
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                address
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">

                                                Invested
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                Withdrawn
                                            </th>
                                            <th class="px-6 py-3 text-left font-medium text-zinc-50">
                                                action
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- HEAD end -->
                                    <!-- BODY start -->
                                    <tbody class="bg-white">
                                        @foreach ($data as $item)
                                            <tr>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->mobile }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->address }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $item->invest }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $item->withdraw }}
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
                                                            <a class="ti-dropdown-item"
                                                                href="{{ route('deleteUser', $item->id) }}">
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
