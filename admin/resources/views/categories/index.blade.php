@extends('layouts.app')

@section('page-title', 'Category Details')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                All Category
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Categories</a>
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
                <th>Name</th>
                <th>Slug</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td><img src="/image/{{ $category->image }}" width="100px"></td>
                <td>
                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                        {{-- <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a> --}}
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                        @csrf                                                                                                                                                                                                                                                                                                                                                                   
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{!! $categories->links() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

