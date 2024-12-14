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

                                        @foreach ($dataPos as $item)
                                            <tr class="hover:bg-gray-50 transition-all duration-200">

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->name }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="flex items-center justify-start space-x-2 rounded-md">
                                                        <button type="button"
                                                            class="productDecrement quantity__minus border border-gray-200 rounded-full p-2 hover:bg-main-600 hover:text-white transition-colors">
                                                            <i class="ph ph-minus"></i>
                                                        </button>

                                                        <input type="number"
                                                            class="quantity__input border border-gray-200 text-center w-20 px-3 rounded-md"
                                                            value="{{ $item->qty }}" data-rowid={{ $item->rowId }}
                                                            min="1" id="qtyValue">

                                                        <button type="button"
                                                            class="productIncrement quantity__plus border border-gray-200 rounded-full p-2 hover:bg-main-600 hover:text-white transition-colors">
                                                            <i class="ph ph-plus"></i>
                                                        </button>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="text-lg font-semibold text-gray-900">{{ $item->price }}</span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="text-lg font-semibold text-gray-900">{{ $item->price * $item->qty }}</span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <a href="{{ route('removeItem', $item->rowId) }}" class="">

                                                        <span class="font-medium">Remove</span>
                                                    </a>
                                                </td>


                                            </tr>
                                        @endforeach

                                    </tbody>

                                    <!-- BODY end -->
                                </table>
                            </div>
                        </div>

                        <div class="col-span-12">


                            <div class="box-body space-y-3">

                                <button type="button"
                                    class="hs-collapse-toggle w-full py-2 px-4 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
                                    id="hs-category-collapse" data-hs-collapse="#category-collapse" onclick="openModal()">
                                    Order Submit
                                </button>

                            </div>

                        </div>


                        <!-- Modal -->
                        <form action="{{ route('checkOutNow') }}" class="pe-xl-5" method="POST">
                            @csrf
                            <div id="orderModal"
                                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                                <div class="bg-white p-6 rounded-lg max-w-md w-full shadow-lg z-60">
                                    <h2 class="text-xl font-semibold mb-4">Order Submitted </h2>

                                    <!-- Form Inputs -->
                                    <div class="space-y-4">
                                        <div>
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Amount</label>
                                            <input type="text" id="name" name="amount"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Enter your name" readonly value="{{ Cart::subtotal() }}">
                                        </div>
                                        <div>
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Name</label>
                                            <input type="text" id="name" name="name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Enter your name" required>
                                        </div>
                                        <div>
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Name</label>
                                            <input type="text" id="name" name="phone"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Enter your name" required>
                                        </div>

                                        <div>
                                            <label for="payment" class="block text-sm font-medium text-gray-700">Payment
                                                Amount</label>
                                            <input type="text" id="payment" name="payment"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Enter payment amount" required>
                                        </div>

                                        <div class="space-y-3">
                                            <label for="note"
                                                class="block text-sm font-medium text-gray-700">Note</label>
                                            <textarea id="note" name="Address" rows="6"
                                                class="w-full border border-gray-300 rounded-md p-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary placeholder-gray-400 resize-none"
                                                placeholder="Enter your note here..."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="hidden" class="common-input border-gray-100" value="Dhaka"
                                            placeholder="City" name="city" required>
                                    </div>

                                    <div class="col-12">
                                        <input type="hidden" class="common-input border-gray-100"
                                            placeholder="Post Code" name="PostCode" required value="00000">
                                    </div>

                                    <input type="hidden" value="{{ Cart::subtotal() }}" name="subTotal">|

                                    <input type="hidden" value="pos" name="posData">

                                    <!-- Modal Buttons -->
                                    <div class="flex justify-end space-x-2 mt-4">
                                        <button class="px-4 py-2 bg-gray-500 text-white rounded-sm hover:bg-gray-600"
                                            onclick="closeModal()">Close</button>
                                        <button class="px-4 py-2 bg-primary text-white rounded-sm hover:bg-primary-dark"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

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
                                                    width="16" height="16" fill="currentColor"
                                                    viewBox="0 0 16 16">
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

                                        <form class="shopIngCardProductDataOne" class="mt-50">

                                            <input type="hidden" name="productId" value="{{ $item->id }}">

                                            <button type="submit"
                                                class="product-card__cart btn bg-green-500 text-white hover:bg-green-600 hover:text-black py-2 px-4 rounded-md flex items-center gap-2 text-sm font-medium">
                                                Add <i class="ph ph-shopping-cart"></i>
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>


                </div>
            </div>

            <!-- End::row-1 -->
        </div>
        <!-- Start::main-content -->


    </div>
@endsection


@push('script')
    <script>
        // Function to open the modal
        // Function to open the modal
        function openModal() {
            const modal = document.getElementById('orderModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('orderModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }


        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('.shopIngCardProductDataOne').on('submit', function(e) {
                // e.preventDefault();
                let fromData = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    data: fromData,
                    url: '{{ route('addToCartOne') }}',
                    success: function(data) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });


                        if ($.isEmptyObject(data.error)) {
                            console.log('Success Message:', data
                                .success); // Log success message

                            Toast.fire({
                                icon: 'success', // Updated to 'icon'
                                title: data.success,
                            });

                            if (data.cart_count !== undefined) {
                                $('#cartCount').text(data.cart_count);
                            }

                            console.log(data.cart_count)

                        } else {
                            console.log('Error Message:', data.error); // Log error message

                            Toast.fire({
                                icon: 'error', // Updated to 'icon'
                                title: data.error,
                            });
                        }
                    },
                    error: function(data) {

                    }
                })
            });
        });


        $(document).ready(function() {
            $('.productIncrement').on('click', function() {

                let input = $(this).siblings('#qtyValue');
                let rowId = input.data('rowid');
                let value = 0;

                if (input === 'string') {
                    let value = parseInt(input.val());
                } else {
                    value = input.val();
                }
                input.val(value)



                $.ajax({
                    url: "{{ route('increment') }}",
                    method: 'POST',
                    data: {
                        quantity: value,
                        rowId: rowId
                    },
                    success: function(data) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        if ($.isEmptyObject(data.error)) {
                            console.log('Success Message:', data
                                .success); // Log success message

                            Toast.fire({
                                icon: 'success', // Updated to 'icon'
                                title: data.success,
                            });

                            if (data.cart_count !== undefined) {
                                $('#cartCount').text(data.cart_count);
                            }

                            let ProductId = '#' + rowId;
                            $(ProductId).text(data.totalPrice);

                            $('.subtotal').text(data.subTotal)

                        } else {
                            console.log('Error Message:', data.error); // Log error message

                            Toast.fire({
                                icon: 'error', // Updated to 'icon'
                                title: data.error,
                            });
                        }

                    },
                    error: function(data) {

                    }
                })




            });
        })



        $(document).ready(function() {
            $('.productDecrement').on('click', function() {

                let input = $(this).siblings('#qtyValue');
                let rowId = input.data('rowid');
                let value = 0;



                if (input === 'string') {
                    let value = parseInt(input.val());
                } else {
                    value = input.val();
                }

                if (value < 1) {
                    value = 1
                }


                input.val(value)
                // console.log(value, rowId);


                $.ajax({
                    url: "{{ route('increment') }}",
                    method: 'POST',
                    data: {
                        quantity: value,
                        rowId: rowId
                    },
                    success: function(data) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        if ($.isEmptyObject(data.error)) {
                            console.log('Success Message:', data
                                .success); // Log success message

                            Toast.fire({
                                icon: 'success', // Updated to 'icon'
                                title: data.success,
                            });

                            if (data.cart_count !== undefined) {
                                $('#cartCount').text(data.cart_count);
                            }

                            let ProductId = '#' + rowId;
                            $(ProductId).text(data.totalPrice);

                            $('.subtotal').text(data.subTotal)

                        } else {
                            console.log('Error Message:', data.error); // Log error message

                            Toast.fire({
                                icon: 'error', // Updated to 'icon'
                                title: data.error,
                            });
                        }

                    },
                    error: function(data) {

                    }
                })




            });
        })
    </script>
@endpush
