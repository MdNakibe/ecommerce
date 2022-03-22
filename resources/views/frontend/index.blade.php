
@extends('layouts.front')
@section('title')
    Welcome To RSLShope
@endsection

@section('content')
{{-- @include('layouts/inc/slider') --}}

<div class="py-5">
    <div class="container">
        <div>
            <h3>Recent Product</h3>
        </div>
        <div class="row">
            @foreach ($featured_products as $product )
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="Product-image" class="Product_image">
                        <div class="card-body">
                            <h4>{{$product->name}}</h4>
                            <small>{{ $product->selling_price }}</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
