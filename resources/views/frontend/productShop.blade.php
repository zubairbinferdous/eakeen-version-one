@extends('frontend.frontend')
@section('content_area')
    <section class="product-details py-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xl-9">
                    <div class="row gy-4">
                        <div class="col-xl-6">
                            <img src="{{ asset($data->ProductImages) }}" alt="">


                        </div>
                        <div class="col-xl-6">
                            <div class="product-details__content">

                                <h5 class="mb-12">{{ $data->product_title }}
                                </h5>
                                <div class="flex-align flex-wrap gap-12">
                                    <span class="text-gray-900"> <span
                                            class="text-gray-400">SKU:</span>{{ $data->product_id }} </span>
                                </div>
                                <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>
                                <p class="text-gray-700">{{ $data->description }}</p>


                                @if ($data->discount_price)
                                    <div class="my-32 flex-align gap-16 flex-wrap">
                                        <div class="flex-align gap-8">
                                            <h6 class="mb-0">{{ $data->discount_price }}</h6>
                                        </div>
                                        <div class="flex-align gap-8">
                                            <span class="text-gray-700">Regular Price</span>
                                            <h6 class="text-xl text-gray-400 mb-0 fw-medium">{{ $data->actual_price }}</h6>
                                        </div>
                                    </div>
                                @else
                                    <div class="my-32 flex-align gap-16 flex-wrap">
                                        <div class="flex-align gap-8">
                                            <h6 class="mb-0">{{ $data->discount_price }}</h6>
                                        </div>
                                    </div>
                                @endif


                                <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>

                                <a href="https://www.whatsapp.com" class="btn btn-black flex-center gap-8 rounded-8 py-16">
                                    <i class="ph ph-whatsapp-logo text-lg"></i>
                                    Request More Information
                                </a>

                                <div class="mt-32">
                                    <span class="fw-medium text-gray-900">100% Guarantee Safe Checkout</span>
                                    <div class="mt-10">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="product-details__sidebar py-40 px-32 border border-gray-100 rounded-16">

                        <div class="mb-32">
                            <label for="stock" class="text-lg mb-8 text-heading fw-semibold d-block">Total Stock:
                                {{ $data->stock }}</label>
                            <span class="text-xl d-flex">
                                <i class="ph ph-location"></i>
                            </span>

                            <form class="shopIngCardProductData">

                                <div class="d-flex rounded-4 overflow-hidden">
                                    <button type="button"
                                        class="quantity__minus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex-center hover-bg-main-600 hover-text-white">
                                        <i class="ph ph-minus"></i>
                                    </button>
                                    <input type="number"
                                        class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-16"
                                        id="stock" value="1" min="1" name="qty" id="productQuantity">
                                    <button type="button"
                                        class="quantity__plus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex-center hover-bg-main-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="mb-32">
                            @if ($data->discount_price)
                                <div class="flex-between flex-wrap gap-8 border-bottom border-gray-100 pb-16 mb-16">
                                    <span class="text-gray-500">Price</span>
                                    <h6 class="text-lg mb-0">{{ $data->discount_price }}</h6>
                                </div>
                            @else
                                <div class="flex-between flex-wrap gap-8 border-bottom border-gray-100 pb-16 mb-16">
                                    <span class="text-gray-500">Price</span>
                                    <h6 class="text-lg mb-0">{{ $data->actual_price }}</h6>
                                </div>
                            @endif

                        </div>


                        <input type="hidden" name="productIdByCart" value="{{ $data->id }}" id="productId">

                        <button type="submit" class="btn btn-success" style="width: 100%">
                            <i class="ph ph-shopping-cart-simple text-lg"></i>
                            Add To Cart
                        </button>


                        </form>


                        <div class="mt-32">
                            <div class="px-32 py-16 rounded-8 border border-gray-100 flex-between gap-8">
                                <a href="#" class="d-flex text-main-600 text-28"><i
                                        class="ph-fill ph-chats-teardrop"></i></a>
                                <span class="h-26 border border-gray-100"></span>

                                <div class="dropdown on-hover-item">
                                    <button class="d-flex text-main-600 text-28" type="button">
                                        <i class="ph-fill ph-share-network"></i>
                                    </button>
                                    <div
                                        class="on-hover-dropdown common-dropdown border-0 inset-inline-start-auto inset-inline-end-0">
                                        <ul class="flex-align gap-16">
                                            <li>
                                                <a href="https://www.facebook.com"
                                                    class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-facebook-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com"
                                                    class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-twitter-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com"
                                                    class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-instagram-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.pinterest.com"
                                                    class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-linkedin-logo"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="pt-80">
                <div class="product-dContent border rounded-24">
                    <div class="product-dContent__header border-bottom border-gray-100 flex-between flex-wrap gap-16">
                        <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-description" type="button" role="tab"
                                    aria-controls="pills-description" aria-selected="true">Description</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-reviews" type="button" role="tab"
                                    aria-controls="pills-reviews" aria-selected="false">Reviews</button>
                            </li> --}}
                        </ul>
                        <a href="#"
                            class="btn bg-color-one rounded-16 flex-align gap-8 text-main-600 hover-bg-main-600 hover-text-white">
                            <img src="assets/images/icon/satisfaction-icon.png" alt="">
                            100% Satisfaction Guaranteed
                        </a>
                    </div>
                    <div class="product-dContent__box">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab" tabindex="0">
                                <div class="mb-40">
                                    <h6 class="mb-24">Product Description</h6>
                                    <p>Wherever celebrations and good times happen, the LAY'S brand will be there just as it
                                        has been for more than 75 years. With flavors almost as rich as our history, we have
                                        a chip or crisp flavor guaranteed to bring a smile on your face. </p>
                                    <p>Morbi ut sapien vitae odio accumsan gravida. Morbi vitae erat auctor, eleifend nunc
                                        a, lobortis neque. Praesent aliquam dignissim viverra. Maecenas lacus odio, feugiat
                                        eu nunc sit amet, maximus sagittis dolor. Vivamus nisi sapien, elementum sit amet
                                        eros sit amet, ultricies cursus ipsum. Sed consequat luctus ligula. Curabitur
                                        laoreet rhoncus blandit. Aenean vel diam ut arcu pharetra dignissim ut sed leo.
                                        Vivamus faucibus, ipsum in vestibulum vulputate, lorem orci convallis quam, sit amet
                                        consequat nulla felis pharetra lacus. Duis semper erat mauris, sed egestas purus
                                        commodo vel.</p>
                                    <ul class="list-inside mt-32 ms-16">
                                        <li class="text-gray-400 mb-4">8.0 oz. bag of LAY'S Classic Potato Chips</li>
                                        <li class="text-gray-400 mb-4">Tasty LAY's potato chips are a great snack</li>
                                        <li class="text-gray-400 mb-4">Includes three ingredients: potatoes, oil, and salt
                                        </li>
                                        <li class="text-gray-400 mb-4">Gluten free product</li>
                                    </ul>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-4">Made in USA</li>
                                        <li class="text-gray-400 mb-4">Ready To Eat.</li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">Product Specifications</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Product Type:
                                                <span class="text-gray-500"> Chips & Dips</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Product Name:
                                                <span class="text-gray-500"> Potato Chips Classic </span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Brand:
                                                <span class="text-gray-500"> Lay's</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                FSA Eligible:
                                                <span class="text-gray-500"> No</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Size/Count:
                                                <span class="text-gray-500"> 8.0oz</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Item Code:
                                                <span class="text-gray-500"> 331539</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium">
                                                Ingredients:
                                                <span class="text-gray-500"> Potatoes, Vegetable Oil, and Salt.</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">Nutrition Facts</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium"> Total Fat 10g 13%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium"> Saturated Fat 1.5g 7%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium"> Cholesterol 0mg 0%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium"> Sodium 170mg 7%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-medium"> Potassium 350mg 6%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <h6 class="mb-24">More Details</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Lunarlon midsole delivers ultra-plush
                                                responsiveness</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Encapsulated Air-Sole heel unit for lightweight
                                                cushioning</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Colour Shown: Ale Brown/Black/Goldtone/Ale
                                                Brown</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex-align gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Style: 805899-202</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            {{-- <div class="tab-pane fade" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h6 class="mb-24">Product Description</h6>
                                        <div
                                            class="d-flex align-items-start gap-24 pb-44 border-bottom border-gray-100 mb-44">
                                            <img src="assets/images/thumbs/comment-img1.png" alt=""
                                                class="w-52 h-52 object-fit-cover rounded-circle flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <div class="flex-between align-items-start gap-8 ">
                                                    <div class="">
                                                        <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                        <div class="flex-align gap-8">
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-gray-800 text-xs">3 Days ago</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                                <p class="text-gray-700">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour</p>

                                                <div class="flex-align gap-20 mt-44">
                                                    <button class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-thumbs-up"></i>
                                                        Like
                                                    </button>
                                                    <a href="#comment-form"
                                                        class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                        Replay
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start gap-24">
                                            <img src="assets/images/thumbs/comment-img1.png" alt=""
                                                class="w-52 h-52 object-fit-cover rounded-circle flex-shrink-0">
                                            <div class="flex-grow-1">
                                                <div class="flex-between align-items-start gap-8 ">
                                                    <div class="">
                                                        <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                        <div class="flex-align gap-8">
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-gray-800 text-xs">3 Days ago</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                                <p class="text-gray-700">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour</p>

                                                <div class="flex-align gap-20 mt-44">
                                                    <button class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-thumbs-up"></i>
                                                        Like
                                                    </button>
                                                    <a href="#comment-form"
                                                        class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                        Replay
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-56">
                                            <div class="">
                                                <h6 class="mb-24">Write a Review</h6>
                                                <span class="text-heading mb-8">What is it like to Product?</span>
                                                <div class="flex-align gap-8">
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="mt-32">
                                                <form action="#">
                                                    <div class="mb-32">
                                                        <label for="title" class="text-neutral-600 mb-8">Review
                                                            Title</label>
                                                        <input type="text" class="common-input rounded-8"
                                                            id="title" placeholder="Great Products">
                                                    </div>
                                                    <div class="mb-32">
                                                        <label for="desc" class="text-neutral-600 mb-8">Review
                                                            Content</label>
                                                        <textarea class="common-input rounded-8" id="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-main rounded-pill mt-48">Submit
                                                        Review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ms-xxl-5">
                                            <h6 class="mb-24">Customers Feedback</h6>
                                            <div class="d-flex flex-wrap gap-44">
                                                <div
                                                    class="border border-gray-100 rounded-8 px-40 py-52 flex-center flex-column flex-shrink-0 text-center">
                                                    <h2 class="mb-6 text-main-600">4.8</h2>
                                                    <div class="flex-center gap-8">
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="mt-16 text-gray-500">Average Product Rating</span>
                                                </div>
                                                <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow-1">
                                                    <div class="flex-align gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                                        <div class="progress w-100 bg-gray-100 rounded-pill h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-pill"
                                                                style="width: 70%"></div>
                                                        </div>
                                                        <div class="flex-align gap-4">
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">124</span>
                                                    </div>
                                                    <div class="flex-align gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">4</span>
                                                        <div class="progress w-100 bg-gray-100 rounded-pill h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-pill"
                                                                style="width: 50%"></div>
                                                        </div>
                                                        <div class="flex-align gap-4">
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">52</span>
                                                    </div>
                                                    <div class="flex-align gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">3</span>
                                                        <div class="progress w-100 bg-gray-100 rounded-pill h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-pill"
                                                                style="width: 35%"></div>
                                                        </div>
                                                        <div class="flex-align gap-4">
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">12</span>
                                                    </div>
                                                    <div class="flex-align gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">2</span>
                                                        <div class="progress w-100 bg-gray-100 rounded-pill h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-pill"
                                                                style="width: 20%"></div>
                                                        </div>
                                                        <div class="flex-align gap-4">
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                                    </div>
                                                    <div class="flex-align gap-8 mb-0">
                                                        <span class="text-gray-900 flex-shrink-0">1</span>
                                                        <div class="progress w-100 bg-gray-100 rounded-pill h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-pill"
                                                                style="width: 5%"></div>
                                                        </div>
                                                        <div class="flex-align gap-4">
                                                            <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('.shopIngCardProductData').on('submit', function(e) {
                e.preventDefault();
                let fromData = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    data: fromData,
                    url: '{{ route('addToCart') }}',
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
    </script>
@endpush
