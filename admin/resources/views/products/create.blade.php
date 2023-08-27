@extends('layouts.app')

@section('page-title', 'Create Products')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex gap-4 align-items-center">
                    <div class="d-none d-md-flex">
                        Create New Products
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>        
                </div>
            </div>
        </div>   
    </div>
</div>

@if ($errors->any())
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
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Slug</label>
                            {!! Form::text('slug', null, array('placeholder' => 'Slug','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" name="image" placeholder="" class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">-- Select a category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="form-group col-6">
                                <label for="subcategory_id">Subcategory</label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control" required>
                                    <option value="">-- Select a subcategory --</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            {!! Form::text('quantity', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Featured</label>
                            {!! Form::textarea('featured', null, array('placeholder' => 'Featured','class' => 'form-control','style' => 'height:100px;')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Details</label>
                            {!! Form::textarea('details', null, array('placeholder' => 'Details','class' => 'form-control','style' => 'height:100px;')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style' => 'height:100px;')) !!}
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Save Products</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

