@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit & Update Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Name</label>
                    <select class="form-select" name="cate_id" required>
                        <option value="">Select a Category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $products->slug }}" name="slug" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Sort Description</label>
                    <input type="text" class="form-control" value="{{ $products->small_description }}" name="small_description" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control" required>{{ $products->description }}</textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" value="{{ $products->original_price }}" name="original_price" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Selling Price </label>
                    <input type="number" value="{{ $products->selling_price }}" name="selling_price" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Quality</label>
                    <input type="number" value="{{ $products->qty }}" name="qty" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Tax</label>
                    <input type="number" value="{{ $products->tax }}" name="tax" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" value="{{ $products->status }}" name="status" >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" value="{{ $products->trending }}" name="trending" >
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control" required>{{ $products->meta_description }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" required rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                </div>
                @if ($products->image)
                <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Category Image Here" class="edit_category_image">
                @endif
                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
