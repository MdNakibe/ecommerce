@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header">
                <h4>Products Page</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-header">
                <a href="{{ url('add-products')}}" class="btn btn-behance">Add Product</a>
            </div>
        </div>
    </div>
    <div class="container-fluid card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped  view_upload">
                    <thead>
                        <tr>
                            <th colspan=".5">ID</th>
                            <th colspan="1">Name</th>
                            <th colspan="3">Description</th>
                            <th colspan="1">Original Price</th>
                            <th colspan="1">Selling Price</th>
                            <th colspan="1">Quality</th>
                            <th colspan="1">Image</th>
                            {{-- <th>Meta Title</th>
                            <th>Meta Descrip</th>
                            <th>Meta KeyWords</th> --}}
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td colspan="">{{ $item->id }}</td>
                            <td colspan="1">{{ $item->name }}</td>
                            <td colspan="3">{{ $item->description }}</td>
                            <td>{{ $item->original_price }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td colspan="1">
                               <img src="{{ asset('assets/uploads/products/'.$item->image) }}" alt="Image Here" class="cate-image">
                            </td>
                            {{-- <td>{{ $item->meta_title  }}</td>
                            <td>{{ $item->meta_descrip }}</td>
                            <td>{{ $item->meta_keywords }}</td> --}}
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
