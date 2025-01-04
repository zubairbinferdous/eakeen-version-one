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
                        <a href="" class="sidebar-option">
                            <i class="bi bi-people"></i> Affiliate
                        </a>
                        <a href="{{ route('UserOrder') }}" class="sidebar-option">
                            <i class="bi bi-bag-check"></i> My Order
                        </a>
                        {{-- <a href="#" class="sidebar-option">
                            <i class="bi bi-chat-left-text"></i> Support Ticket
                        </a>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-person"></i> My Account
                        </a>
                        <hr>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-bell"></i> Notification
                        </a> --}}

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

                        <div class="row gy-3">

                            <form action="{{ route('affiliateApply') }}" method="GET">
                                <div class="col-md-4">
                                    <div class="affiliate-card">
                                        <div class="card">
                                            <div class="card-header">
                                                <span>Basic</span>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="price">2000 BDT</h4>
                                                <p>Basic Affiliate Package</p>
                                                <p>Payment on Nagad</p>
                                                <p>01648837327</p>
                                                <h5>Instructions:</h5>
                                                <ol>
                                                    <li>Send money to the above Nagad number, then note the transaction
                                                        number
                                                        and
                                                        take
                                                        a screenshot.</li>
                                                    <li>Take a photo of both sides of your NID and keep it ready.</li>
                                                </ol>
                                                <p>Afterward, click Apply and follow the instructions. Thank you!</p>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-main mt-5 py-18 w-100 rounded-8 "> <a
                                            href="">Apply for
                                            Affiliate</a>
                                    </button>

                                </div>
                            </form>
                        </div>


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
