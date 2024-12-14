@extends('frontend.frontend')
@section('content_area')
    <section class="checkout py-80">
        <form action="{{ route('checkOutNow') }}" class="pe-xl-5" method="POST">
            @csrf
            <div class="container container-lg">
                {{-- <div class="border border-gray-100 rounded-8 px-30 py-20 mb-40">
                <span class="">Have a coupon? <a href="cart.html"
                        class="fw-semibold text-gray-900 hover-text-decoration-underline hover-text-main-600">Click here to
                        enter your code</a> </span>
            </div> --}}
                <div class="row">
                    <div class="col-xl-9 col-lg-8">

                        <div class="row gy-3">
                            <div class="col-sm-12">
                                <input type="text" class="common-input border-gray-100" placeholder="Name" name="name"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="number" class="common-input border-gray-100" placeholder="Phone"
                                    name="phone" required>
                            </div>

                            <div class="col-12">
                                <input type="email" class="common-input border-gray-100" placeholder="Email Address"
                                    name="email" required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="common-input border-gray-100" placeholder="City" name="city"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="common-input border-gray-100" placeholder="Post Code"
                                    name="PostCode" required>
                            </div>

                            <div class="col-12">
                                <textarea name="Address" class="common-input" id="" cols="30" rows="10" placeholder="Address"
                                    required></textarea>
                            </div>

                            <input type="hidden" value="{{ Cart::subtotal() }}" name="subTotal">

                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="checkout-sidebar">
                            <div class="bg-color-three rounded-8 p-24 text-center">
                                <span class="text-gray-900 text-xl fw-semibold">Your Orders</span>
                            </div>

                            <div class="border border-gray-100 rounded-8 px-24 py-40 mt-24">
                                <div class="mb-32 pb-32 border-bottom border-gray-100 flex-between gap-8">
                                    <span class="text-gray-900 fw-medium text-xl font-heading-two">Product</span>
                                    <span class="text-gray-900 fw-medium text-xl font-heading-two">Subtotal</span>
                                </div>




                                @foreach ($data as $item)
                                    <div class="flex-between gap-24 mb-32">
                                        <div class="flex-align gap-12">
                                            <span class="text-gray-900 fw-normal text-md font-heading-two w-144">
                                                {{ $item->name }}</span>
                                            <span class="text-gray-900 fw-normal text-md font-heading-two"><i
                                                    class="ph-bold ph-x"></i></span>
                                            <span
                                                class="text-gray-900 fw-semibold text-md font-heading-two">{{ $item->qty }}</span>
                                        </div>
                                        <span
                                            class="text-gray-900 fw-bold text-md font-heading-two">{{ $item->price * $item->qty }}</span>
                                    </div>
                                @endforeach



                                <div class="border-top border-gray-100 pt-30  mt-30">
                                    <div class="mb-32 flex-between gap-8">
                                        <span class="text-gray-900 font-heading-two text-xl fw-semibold">Subtotal</span>
                                        <span
                                            class="text-gray-900 font-heading-two text-md fw-bold">{{ Cart::subtotal() }}</span>
                                    </div>
                                    <div class="mb-0 flex-between gap-8">
                                        <span class="text-gray-900 font-heading-two text-xl fw-semibold">Total</span>
                                        <span
                                            class="text-gray-900 font-heading-two text-md fw-bold">{{ Cart::subtotal() }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-32">

                                <div class="payment-item">
                                    <div class="form-check common-check common-radio py-16 mb-0">
                                        <input class="form-check-input" type="radio" name="payment" id="payment3"
                                            required>
                                        <label class="form-check-label fw-semibold text-neutral-600" for="payment3">Cash on
                                            delivery</label>
                                    </div>
                                    {{-- <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                    <p class="text-gray-800">Make your payment directly into our bank account. Please use
                                        your Order ID as the payment reference. Your order will not be shipped until the
                                        funds have cleared in our account.</p>
                                </div> --}}
                                </div>
                            </div>

                            {{-- <div class="mt-32 pt-32 border-top border-gray-100">
                            <p class="text-gray-500">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described in our <a
                                    href="#" class="text-main-600 text-decoration-underline"> privacy policy</a> .
                            </p>
                        </div> --}}

                            <button type="submit" class="btn btn-main mt-40 py-18 w-100 rounded-8 mt-56">Place
                                Order</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </section>
@endsection
