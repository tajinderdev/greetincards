@extends('layouts.app')

@section('page-title', 'Products Details')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                All Products
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    @can('product-create')
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    @endcan
                </div>
            </div>        
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success mt-3 mb-3">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table id="users" class="table table-custom table-lg">
        <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
                    id="defaultCheck1">
                </th>
                <th>No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Details</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category->name }}</td>
                <td> @if ($product->subcategory) 
                    {{ $product->subcategory->name}}
                    @endif 
                </td>
                <td><img src="/image/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->featured }}</td>
                <td>{{ $product->details }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @can('product-edit')
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('product-delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{!! $products->links() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

