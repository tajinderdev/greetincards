@extends('layouts.app')

@section('page-title', 'Stores Details')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                All Stores
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    @can('product-create')
                    <a class="btn btn-success" href="{{ route('stores.create') }}"> Create New Stores</a>
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

<div class="row">
    <div class="order-2 order-lg-1 col-lg-12 bd-content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="users" class="table table-custom table-lg">
                        <thead>
                            <tr>
                                <th>
                                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
                                    id="defaultCheck1">
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->email }}</td>
                                <td>{{ $store->company_name }}</td>
                                <td>{{ $store->address }}</td>
                                <td>{{ $store->country }}</td>
                                <td>{{ $store->phone }}</td>
                                <td>
                                    <form action="{{ route('stores.destroy',$store->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('stores.edit',$store->id) }}">Edit</a>
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
            </div>
        </div>
    </div>
</div>

{!! $stores->links() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

