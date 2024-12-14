@extends('frontend.frontend')
@section('content_area')
    <section class="cart py-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xl-9 col-lg-8">
                    <div class="cart-table border border-gray-100 rounded-8 px-40 py-48">
                        <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                            <table class="table style-three">
                                <thead>
                                    <tr>
                                        <th class="h6 mb-0 text-lg fw-bold">Delete </th>
                                        <th class="h6 mb-0 text-lg fw-bold">Product Name</th>
                                        <th class="h6 mb-0 text-lg fw-bold">Price</th>
                                        <th class="h6 mb-0 text-lg fw-bold">Quantity</th>
                                        <th class="h6 mb-0 text-lg fw-bold">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('removeItem', $item->rowId) }}" type="button"
                                                    class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                    <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                    Remove
                                                </a>
                                            </td>
                                            <td>
                                                <div class="table-product d-flex align-items-center gap-24">
                                                    <a href="product-details-two.html"
                                                        class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                        <img src="{{ $item->options->img }}" alt="">
                                                    </a>
                                                    <div class="table-product__content text-start">

                                                        <h6 class="title text-lg fw-semibold mb-8">
                                                            <a href="product-details.html" class="link text-line-2"
                                                                tabindex="0">{{ $item->name }}</a>
                                                        </h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-lg h6 mb-0 fw-semibold">{{ $item->price }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex rounded-4 overflow-hidden">
                                                    <button type="button" id=""
                                                        class="productDecrement quantity__minus
                                                        border border-end border-gray-100 flex-shrink-0 h-48 w-48
                                                        text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                        <i class="ph ph-minus"></i>
                                                    </button>
                                                    <input type="number"
                                                        class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4"
                                                        value="{{ $item->qty }}" data-rowid={{ $item->rowId }}
                                                        min="1" id="qtyValue">
                                                    <button type="button" id=""
                                                        class=" productIncrement quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                        <i class="ph ph-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-lg h6 mb-0 fw-semibold"
                                                    id="{{ $item->rowId }}">{{ $item->price * $item->qty }}</span>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="flex-between flex-wrap gap-16 mt-16">
                            <div class="flex-align gap-16">
                                <input type="text" class="common-input" placeholder="Coupon Code">
                                <button type="submit" class="btn btn-main py-18 w-100 rounded-8">Apply Coupon</button>
                            </div>
                            <button type="submit" class="text-lg text-gray-500 hover-text-main-600">Update Cart</button>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="cart-sidebar border border-gray-100 rounded-8 px-24 py-40">
                        <h6 class="text-xl mb-32">Cart Totals</h6>
                        <div class="bg-color-three rounded-8 p-24">
                            <div class="mb-32 flex-between gap-8">
                                <span class="text-gray-900 font-heading-two">Subtotal</span>
                                <span class="text-gray-900 fw-semibold subtotal">{{ Cart::subtotal() }}</span>
                            </div>
                            {{-- <div class="mb-32 flex-between gap-8">
                                <span class="text-gray-900 font-heading-two">Extimated Delivery</span>
                                <span class="text-gray-900 fw-semibold">Free</span>
                            </div>
                            <div class="mb-0 flex-between gap-8">
                                <span class="text-gray-900 font-heading-two">Extimated Taxs</span>
                                <span class="text-gray-900 fw-semibold">USD 10.00</span>
                            </div> --}}
                        </div>
                        <div class="bg-color-three rounded-8 p-24 mt-24">
                            <div class="flex-between gap-8">
                                <span class="text-gray-900 text-xl fw-semibold">Total</span>
                                <span class="text-gray-900 text-xl fw-semibold subtotal">{{ Cart::subtotal() }}</span>
                            </div>
                        </div>
                        <a href="{{ route('checkout') }}" class="btn btn-main mt-40 py-18 w-100 rounded-8">Proceed to
                            checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
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
