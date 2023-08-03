@extends('admin.master')
@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Products Information</h4>
            {{-- <h6 class="card-subtitle">Data table example</h6> --}}
            <div class="table-responsive m-t-40 ">
                <table class="table table-striped border ">
                    <tr>
                        <th>Product Id:</th>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <th>Product Name:</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Year:</th>
                        <td>{{ $product->year }}</td>
                    </tr>

                    <tr>
                        <th>Product Brand:</th>
                        @foreach ($product->brands as $brand)
                            <td>{{ $brand->brand_name }}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th>Product Stock :</th>
                        <td>{{ $product->stock }}</td>
                    </tr>
                    <tr>
                        <th>Product Regular Price:</th>
                        <td>৳{{ $product->price }}</td>
                    </tr>

                    <tr>
                        <th>Product Feature Image:</th>
                        <td><img src="{{ asset($product->image) }}" alt="" height="100" width="120"></td>
                    </tr>
                    <tr>
                        <th>Product Other Image:</th>
                        <td>
                            @foreach ($product->otherImage as $images)
                                <img src="{{ asset($images->image) }}" alt="" height="100" width="120">
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Product Hit Count:</th>
                        <td>{{ $product->hit_count }}</td>
                    </tr>
                    <tr>
                        <th>Product Featured Status:</th>
                        <td>{{ $product->featured_status == 1 ? 'Featured' : 'Unfeatured' }}</td>
                    </tr>
                    <tr>
                        <th>Product Status:</th>
                        <td>{{ $product->status == 1 ? 'New' : 'Recondition' }}</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
@endsection
