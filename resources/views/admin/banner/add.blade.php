@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header">
                <h4>Banner Page</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-header">
                <a href="{{ url('banners')}}" class="btn btn-behance">Banner List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-banners') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Sort Description</label>
                    <input type="text" class="form-control" name="sort_desciption">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tranding</label>
                    <input type="checkbox" name="tranding">
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
