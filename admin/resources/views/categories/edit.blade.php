@extends('layouts.app')

@section('page-title', 'Edit Cateogry')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">
                    Edit Cateogry
                </div>
                <div class="dropdown ms-auto">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
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
                    <form action="{{ route('categories.update',$category->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                                <div class="form-group">
                                    <strong>Slug:</strong>
                                    <input class="form-control" name="slug" placeholder="Slug" value="{{ $category->slug }}"> 
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="image" accept="image/*">
                                <img src="/image/{{ $category->image }}" width="300px" class="mt-3">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                            <button type="Update" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection