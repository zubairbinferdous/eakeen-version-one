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
    </style>


    <div class="container-fluid my-4 bg-light ">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-lg-3 mtb100">
                <div class="profile-card ">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="User Avatar">
                        <h5>zubair</h5>
                        <p class="text-muted">zubairbinft@gmail.com</p>
                        <p class="text-muted">01924495997</p>
                    </div>
                    <hr>
                    <nav>
                        <a href="{{ route('dashboard') }}" class="sidebar-option active-option">
                            <i class="bi bi-grid"></i> Dashboard
                        </a>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-people"></i> Affiliate
                        </a>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-bag-check"></i> My Order
                        </a>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-chat-left-text"></i> Support Ticket
                        </a>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-person"></i> My Account
                        </a>
                        <hr>
                        <a href="#" class="sidebar-option">
                            <i class="bi bi-bell"></i> Notification
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn=success">Logout</button>
                        </form>
                    </nav>
                </div>
            </div>

            <!-- Statistics and Details -->
            <div class="col-lg-9 mtb100">
                {{-- <div class="row g-3">
                    <!-- Stats Boxes -->
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-bag"></i>
                            <p>Total Order</p>
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-heart"></i>
                            <p>My Wishlist</p>
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-arrow-repeat"></i>
                            <p>Refund Success</p>
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-cart"></i>
                            <p>Product in Cart</p>
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-tag"></i>
                            <p>Coupon Used</p>
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box">
                            <i class="bi bi-check-circle"></i>
                            <p>Completed Order</p>
                            <h5>0</h5>
                        </div>
                    </div>
                </div> --}}

                <!-- Details Sections -->
                {{-- <div class="row g-3 mt-4">
                    <div class="col-lg-6">
                        <div class="profile-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>Purchase History</h6>
                                <a href="#" class="btn btn-sm btn-link">See All</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center text-muted">No Data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="profile-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>My Wishlist</h6>
                                <a href="#" class="btn btn-sm btn-link">See All</a>
                            </div>
                            <p class="text-center text-muted">No Data</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="profile-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>Recent Order</h6>
                                <a href="#" class="btn btn-sm btn-link">See All</a>
                            </div>
                            <p class="text-center text-muted">No Data</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="profile-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>Product in Cart</h6>
                                <a href="#" class="btn btn-sm btn-link">See All</a>
                            </div>
                            <p class="text-center text-muted">No Data</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
