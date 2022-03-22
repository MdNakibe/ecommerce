@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header">
                <h4>Product Page</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-header">
                <a href="{{ url('products')}}" class="btn btn-behance">Product List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Name</label>
                    <select class="form-select" name="cate_id">
                        <option value="">Select a Category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Sort Description</label>
                    <input type="text" class="form-control" name="small_description">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" name="original_price">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Selling Price </label>
                    <input type="number" name="selling_price">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Quality</label>
                    <input type="number" name="qty">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Tax</label>
                    <input type="number" name="tax">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
