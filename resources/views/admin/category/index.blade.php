@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header">
                <h4>Catagory Page</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-header">
                <a href="{{ url('add-category')}}" class="btn btn-behance">Add Category</a>
            </div>
        </div>
    </div>
    <div class="container-fluid card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped  view_upload">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            {{-- <th>Meta Title</th>
                            <th>Meta Descrip</th>
                            <th>Meta KeyWords</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                               <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="Image Here" class="cate-image">
                            </td>
                            {{-- <td>{{ $item->meta_title  }}</td>
                            <td>{{ $item->meta_descrip }}</td>
                            <td>{{ $item->meta_keywords }}</td> --}}
                            <td>
                                <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
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
