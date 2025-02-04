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
                @include('userProfile')
            </div>

            <!-- Statistics and Details -->
            <div class="col-lg-9 mtb100">
                <div class="row profile-card">

                    <div class="col-xl-12 col-lg-8">

                        <table class="min-w-full bg-white border border-gray-200">
                            <!-- Table Header -->
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Invoice No.</th>
                                        <th scope="col"> Name</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">status</th>
                                        <th scope="col">sub_total</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Row 1 -->
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $key++ }}</td>
                                            <td>{{ $item->order_number }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->sub_total }}</td>

                                        </tr>
                                    @endforeach

                                    <!-- Example Row 2 -->


                                    <!-- Additional rows can be added here -->
                                </tbody>
                            </table>

                        </table>



                    </div>





                </div>
                
            </div>
        </div>
    </div>
@endsection
