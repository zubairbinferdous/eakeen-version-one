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
                            <h5 class="box-title">New Sub Category</h5>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('subCategoryAdd') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">


                                    <div class="space-y-2 product-1">
                                        <label class="ti-form-label mb-0">Category Name</label>
                                        <select class="ti-form-select product-search" name="category_id">
                                            <option value="">Select Category</option>

                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0"> Sub Category Name</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="sub category name"
                                            name="subcategory_name" required>
                                    </div>


                                </div>
                                <br><br>
                                <button type="submit" class="ti-btn ti-btn-primary">Add Sub Category</button>
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
