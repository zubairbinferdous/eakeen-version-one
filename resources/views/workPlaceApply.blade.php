@extends('frontend.frontend')
@section('content_area')
    <style>
        .profile-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .sidebar-option {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar-option:hover {
            background-color: #f8f9fa;
        }

        .sidebar-option i {
            margin-right: 10px;
            color: #ff6600;
        }

        .active-option {
            background-color: #ff6600;
            color: #fff;
        }

        .active-option i {
            color: #fff;
        }

        .mtb100 {
            margin: 100px 0px;
        }

        .ml100 {
            margin-left: 20px;
        }
    </style>


    <div class="container-fluid my-4 bg-light ">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-lg-3 mtb100">
                <div class="profile-card ">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="User Avatar">
                        <h5>{{ auth()->user()->name }}</h5>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                        <p class="text-muted">{{ auth()->user()->phone }}</p>
                    </div>
                    <hr>
                    <nav>
                        <a href="{{ route('dashboard') }}" class="sidebar-option active-option">
                            <i class="bi bi-grid"></i> Dashboard
                        </a>
                        <a href="{{ route('affiliate_system') }}" class="sidebar-option">
                            <i class="bi bi-people"></i> Affiliate
                        </a>
                        <a href="{{ route('UserOrder') }}" class="sidebar-option">
                            <i class="bi bi-bag-check"></i> My Order
                        </a>

                    </nav>
                    <form action="{{ route('logout') }}" method="POST" class="ml100">
                        @csrf
                        <div class="d-flex justify-center align-item-center mt10">
                            <button class="btn-success btn-sm btn ">Logout</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Statistics and Details -->
            <div class="col-lg-9 mtb100">
                <div class="row profile-card">
                    <div class="col-xl-9 col-lg-8">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('applyForWorkPlace') }}" method="POST">
                            @csrf
                            <div class="row gy-3 mt-5">
                                <!-- Blood Group -->
                                <div class="row mb-3">

                                    <!-- Payment Type -->
                                    <div class="col-md-6">
                                        <label for="paymentType" class="form-label">Payment Type<span
                                                class="text-danger">*</span></label>
                                        <select id="paymentType" class="form-select" required name="PaymentType">
                                            <option selected disabled>-- Select a Payment Type --</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="Rocket">Rocket</option>
                                            <option value="Nagad">Nagad</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="thana" class="form-label">Payment Number<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="thana" class="form-control"
                                            placeholder="Payment Number" required name="PaymentNumber">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="thana" class="form-label">Transaction Number<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="thana" class="form-control"
                                            placeholder="Transaction Number" required name="transationNumber">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="{{ $data->packages_amount }}" name="packagesAmount">
                            <input type="hidden" value="{{ $data->id }}" name="packages_id">
                            <input type="hidden" value="{{ Auth()->user()->id }}" name="user_id">
                            {{-- @dd($data) --}}


                            <button type="submit" class="btn btn-main mt-40 py-18 w-100 rounded-8 mt-56"> Apply for
                                working place
                            </button>


                        </form>
                    </div>

                    <div class="col-xl-3 col-lg-4">
                        <div class="checkout-sidebar">
                            <div class="bg-color-three rounded-8 p-24 text-center">
                                <span class="text-gray-900 text-xl fw-semibold">Your Coin</span>
                            </div>

                            <div class="border border-gray-100 rounded-8 px-24 py-40 mt-24">
                                <div class="mb-32 pb-32 border-bottom border-gray-100 flex-between gap-8">
                                    <span class="text-gray-900 fw-medium text-xl font-heading-two">coin : </span>
                                    <span class="text-gray-900 fw-medium text-xl font-heading-two">000</span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
