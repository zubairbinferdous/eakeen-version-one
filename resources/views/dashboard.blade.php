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

        .dashboard-cards {
            display: flex;
            justify-content: space-between;
            gap: 16px;
        }

        .card {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 8px;
            text-align: center;
            padding: 16px;
            width: calc(100% / 6 - 16px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card .icon {
            font-size: 24px;
            color: #ff8a00;
            margin-bottom: 8px;
        }

        .card .text {
            font-size: 16px;
            color: #333;
            margin-bottom: 4px;
        }

        .card .number {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }


        .card.highlighted .icon,
        .card.highlighted .number {}
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
                        <a href="{{ route('workPlaceList') }}" class="sidebar-option">
                            <i class="bi bi-bag-check"></i> Work Place
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

                        <div class="dashboard-cards">
                            <div class="card">
                                <div class="icon"><i class="fa fa-trash"></i></div>
                                <div class="text">Total Order</div>
                                <div class="number">1</div>
                            </div>
                            <div class="card">
                                <div class="icon"><i class="fa fa-star"></i></div>
                                <div class="text">My Wishlist</div>
                                <div class="number">0</div>
                            </div>
                            <div class="card">
                                <div class="icon"><i class="fa fa-refresh"></i></div>
                                <div class="text">Refund Success</div>
                                <div class="number">0</div>
                            </div>
                            <div class="card">
                                <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                                <div class="text">Product in Cart</div>
                                <div class="number">2</div>
                            </div>
                            <div class="card highlighted">
                                <div class="icon"><i class="fa fa-ticket"></i></div>
                                <div class="text">Coupon Used</div>
                                <div class="number">0</div>
                            </div>
                            <div class="card">
                                <div class="icon"><i class="fa fa-check"></i></div>
                                <div class="text">Completed Order</div>
                                <div class="number">0</div>
                            </div>
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
