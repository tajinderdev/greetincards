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
                    Edit Product
                </div>
                <div class="dropdown ms-auto">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </div>        
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
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
                    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Slug</label>
                                <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" placeholder="Slug">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image</label>
                                <input type="file" name="image" placeholder="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label for="subcategory_id">Subcategory</label>
                                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                                <input type="text" name="quantity" placeholder="Quantity" class="form-control" value="{{ $product->quantity }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Featured</label>
                                <textarea class="form-control" style="height:150px" name="featured" placeholder="Featured">{{ $product->featured }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Details</label>
                                <textarea class="form-control" style="height:150px" name="details" placeholder="Detail">{{ $product->details }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Description</label>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $product->details }}</textarea>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection