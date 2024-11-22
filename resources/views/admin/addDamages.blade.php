@extends('./welcome')
@section('admin.content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">


            </div>
            <!-- Page Header Close -->
            <!-- Start::row-2 -->

            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Add Damage</h5>
                        </div>
                        <div class="box-body">
                            <form>
                                <div class="grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0"> Product</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="Firstname">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Date</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="Date">
                                    </div>

                                </div>
                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Note</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                    </div>
                                </div>

                                <button type="submit" class="ti-btn ti-btn-primary">Add Damage</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End::row-2 -->

            <!-- Start::row-3 -->

            <!-- End::row-3 -->

            <!-- Start::row-3 -->

            <!-- End::row-3 -->

        </div>
        <!-- Start::main-content -->

    </div>
@endsection
