@extends('layouts.app')

@section('page-title', 'Edit Subcategory')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">
                    Edit Subcateogry
                </div>
                <div class="dropdown ms-auto">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('subcategories.index') }}"> Back</a>
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
                    <form action="{{ route('subcategories.update',$subcategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" name="name" value="{{ $subcategory->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="mt-3"> 
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="{{ $subcategory->category->id }}">{{ $subcategory->category->name }}</option>
                                    <option value="">-- Select a category --</option>
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <strong>Slug:</strong>
                                    <input class="form-control" name="slug" placeholder="slug" value="{{ $subcategory->slug }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection