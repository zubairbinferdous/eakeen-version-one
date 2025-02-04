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
                        <div class="row">
                            @if ($workPlaceList)
                                <div class="col-md-12">

                                    <div class="alert alert-success">
                                        You have task to do.
                                    </div>
                                    <div class="">
                                        <ol>
                                            <li>
                                                {{ $dataTask->task_one }}
                                            </li>
                                            <li>
                                                {{ $dataTask->task_two }}
                                            </li>
                                            <li>
                                                {{ $dataTask->task_three }}
                                            </li>
                                            <li>
                                                {{ $dataTask->task_four }}
                                            </li>
                                            <li>
                                                {{ $dataTask->task_five }}
                                            </li>


                                        </ol>
                                    </div>

                                </div>
                            @else
                                @foreach ($data as $item)
                                    <div class="col-md-4">

                                        <form action="{{ route('WorkPlaceApply') }}" method="get">
                                            @csrf
                                            <div class="affiliate-card " style="margin-bottom: 20px;">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <span>{{ $item->packages_name }}</span>

                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="price">{{ $item->packages_amount }} BDT</h4>
                                                        <p>{{ $item->packages_name }} Package</p>
                                                        <p>Payment on {{ $item->payment_type }}</p>
                                                        <p>{{ $item->number }}</p>
                                                        <h5>Task:</h5>
                                                        <ul>
                                                            <li>{{ Str::limit($item->task_one, 15, '...') }}</li>
                                                            <li>{{ Str::limit($item->task_two, 15, '...') }}</li>
                                                            <li>{{ Str::limit($item->task_three, 15, '...') }}</li>
                                                            <li>{{ Str::limit($item->task_four, 15, '...') }}</li>
                                                            <li>{{ Str::limit($item->task_five, 15, '...') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main py-18 w-100 rounded-8">
                                                    Apply for Work Place
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                @endforeach
                            @endif
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
