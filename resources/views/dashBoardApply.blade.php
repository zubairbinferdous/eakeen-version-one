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

                        <div class="row gy-3 mt-5">

                            <div class="row mb-3">
                                <!-- Blood Group -->
                                <div class="col-md-6">
                                    <label for="bloodGroup" class="form-label">Blood Group<span
                                            class="text-danger">*</span></label>
                                    <select id="bloodGroup" class="form-select" required>
                                        <option selected disabled>Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <!-- Date of Birth -->
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth<span
                                            class="text-danger">*</span></label>
                                    <input type="date" id="dob" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Gender -->
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="gender" class="form-control" placeholder="Male" required>
                                </div>
                                <!-- WhatsApp Number -->
                                <div class="col-md-6">
                                    <label for="whatsapp" class="form-label">WhatsApp Number<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="whatsapp" class="form-control"
                                        placeholder="Enter your WhatsApp number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- NID Number -->
                                <div class="col-md-6">
                                    <label for="nidNumber" class="form-label">NID Number<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="nidNumber" class="form-control"
                                        placeholder="Enter your NID number" required>
                                </div>
                                <!-- NID Image Front -->
                                <div class="col-md-6">
                                    <label for="nidFront" class="form-label">NID Image Front<span
                                            class="text-danger">*</span></label>
                                    <input type="file" id="nidFront" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- NID Image Back -->
                                <div class="col-md-6">
                                    <label for="nidBack" class="form-label">NID Image Back<span
                                            class="text-danger">*</span></label>
                                    <input type="file" id="nidBack" class="form-control" required>
                                </div>
                                <!-- District -->
                                <div class="col-md-6">
                                    <label for="district" class="form-label">District<span
                                            class="text-danger">*</span></label>
                                    <select id="district" class="form-select" required>
                                        <option selected disabled>Select District</option>
                                        <option value="Bagerhat">Bagerhat</option>
                                        <option value="Bandarban">Bandarban</option>
                                        <option value="Barguna">Barguna</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Bogra">Bogra</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Chandpur">Chandpur</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Cox's Bazar">Cox's Bazar</option>
                                        <option value="Cumilla">Cumilla</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Gaibandha">Gaibandha</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Gopalganj">Gopalganj</option>
                                        <option value="Habiganj">Habiganj</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Jashore">Jashore</option>
                                        <option value="Jhalokati">Jhalokati</option>
                                        <option value="Jhenaidah">Jhenaidah</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Khagrachari">Khagrachari</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Kishoreganj">Kishoreganj</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Manikganj">Manikganj</option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Moulvibazar">Moulvibazar</option>
                                        <option value="Munshiganj">Munshiganj</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Naogaon">Naogaon</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Narayanganj">Narayanganj</option>
                                        <option value="Narsingdi">Narsingdi</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Netrokona">Netrokona</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Noakhali">Noakhali</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Panchagarh">Panchagarh</option>
                                        <option value="Patuakhali">Patuakhali</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangamati">Rangamati</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Satkhira">Satkhira</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Sirajganj">Sirajganj</option>
                                        <option value="Sunamganj">Sunamganj</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Thakurgaon">Thakurgaon</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Thana -->
                                <div class="col-md-6">
                                    <label for="thana" class="form-label">Thana<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="thana" class="form-control" placeholder="Enter Thana"
                                        required>
                                </div>
                                <!-- Payment Type -->
                                <div class="col-md-6">
                                    <label for="paymentType" class="form-label">Payment Type<span
                                            class="text-danger">*</span></label>
                                    <select id="paymentType" class="form-select" required>
                                        <option selected disabled>-- Select a Payment Type --</option>
                                        <option value="Bkash">Bkash</option>
                                        <option value="Rocket">Rocket</option>
                                        <option value="Nagad">Nagad</option>
                                    </select>
                                </div>
                            </div>





                        </div>

                        <button type="submit" class="btn btn-main mt-40 py-18 w-100 rounded-8 mt-56"> Apply for Affiliate
                        </button>

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
