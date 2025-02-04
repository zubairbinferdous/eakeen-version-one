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

        .card-body h5 {
            font-size: 18px;
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

                    <div class="col-xl-9 col-lg-8">

                        <div class="row gy-3">



                            @empty($member)
                                <form action="{{ route('affiliateApply') }}" method="get">
                                    @csrf
                                    <div class="col-md-4">
                                        <div class="affiliate-card">
                                            @foreach ($data as $item)
                                                <input type="hidden" name="Packages_amount"
                                                    value="{{ $item->Packages_amount }}">
                                                <input type="hidden" name="package_id" value="{{ $item->id }}">

                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <span>{{ $item->Packages_name }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="price">{{ $item->Packages_amount }} BDT</h4>
                                                        <p>{{ $item->Packages_name }} Affiliate Package</p>
                                                        <p>Payment on {{ $item->payment_type }}</p>
                                                        <p>{{ $item->number }}</p>
                                                        <h5>Instructions:</h5>
                                                        <ol>
                                                            <li>{{ $item->noteOne }}.</li>
                                                            <li>{{ $item->noteTwo }}.</li>
                                                        </ol>
                                                        <p>Afterward, click Apply and follow the instructions. Thank you!</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-main py-18 w-100 rounded-8 "> Apply for
                                            Affiliate
                                        </button>
                                    </div>
                                </form>
                            @else
                                <div class="container mt-5">
                                    <!-- Affiliate Link Section -->
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="">My Affiliate Link</h5>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    value="http://127.0.0.1:8000/register?Referral={{ Auth()->user()->Username }}"
                                                    readonly>
                                                {{-- <button class="btn btn-warning text-white" onclick="copyToClipboard()">COPY
                                                    CODE</button> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Referral List Section -->
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Refer List</h5>

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover align-middle">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col">SL</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Phone</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($refMember as $key => $user)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td><a href="{{ route('takeUserdata', $user->id) }}"
                                                                        class="text-primary text-decoration-none">{{ $user->name }}</a>
                                                                </td>

                                                                <td>{{ $user->phone }}</td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endempty

                        </div>


                    </div>

                    <div class="col-xl-3 col-lg-4">
                        @include('userCoin')
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function copyToClipboard() {
            const input = document.querySelector('.form-control');
            input.select();
            navigator.clipboard.writeText(input.value);
            alert('Affiliate link copied!');
        }
    </script>
@endpush
