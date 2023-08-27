@extends('layouts.app')

@section('page-title', 'Edit Banner')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">
                    Edit Banner
                </div>
                <div class="dropdown ms-auto">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('banner.index') }}"> Back</a>
                    </div>
                </div>        
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger mt-3 mb-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-12 bd-content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $banner->title }}" class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img src="/image/{{ $banner->image }}" width="300px" class="mt-3">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pages</label>
                                <select name="pages" id="pages" class="form-control">
                                    <option value="{{ $banner->pages }}">{{ $banner->pages }}</option>
                                    <option value="Homepage">Homepage</option>
                                    <option value="Product">Product</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image Order</label>
                                <input type="number" name="image_order" value="{{ $banner->image_order }}" class="form-control" id="image_order">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Description</label>
                                <textarea class="form-control" style="height:100px" name="description" placeholder="Description">{{ $banner->description }}</textarea>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Update Banner</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection