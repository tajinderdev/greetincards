@extends('layouts.app')

@section('page-title', 'Banner Details')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

@if ($message = Session::get('success'))
  <div class="alert alert-success mt-3 mb-3">
    <p>{{ $message }}</p>
  </div>
@endif

<div class="card">
  <div class="card-body">
    <div class="d-md-flex gap-4 align-items-center">
      <div class="d-none d-md-flex">
        All Banner
      </div>
      <div class="dropdown ms-auto">
        <div class="pull-right">
          <a class="btn btn-danger" href="{{ route('banner.create') }}"> Add New Banner</a>
        </div>
      </div>        
    </div>
  </div>
</div>

<div class="table-responsive">
  <table id="users" class="table table-custom table-lg">
    <thead>
      <tr>
        <th>
          <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
          id="defaultCheck1">
        </th>
        <th>No</th>
        <th>Title</th>
        <th>Pages</th>
        <th>Description</th>
        <th>Image</th>
        <th>Image Order</th>
        <th class="text-end">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key => $banner)
      <tr>
        <td><input class="form-check-input" type="checkbox"></td>
        <td>{{ ++$i }}</td>
        <td>{{ $banner->title }}</td>
        <td>{{ $banner->pages }}</td>
        <td>{{ $banner->description }}</td>
        <td><img src="/image/{{ $banner->image }}" width="100px"></td>
        <td>{{ $banner->image_order}}</td>
        <td>
            <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
     
                {{-- <a class="btn btn-info" href="{{ route('banner.show',$banner->id) }}">Show</a> --}}
  
                <a class="btn btn-primary btn-sm" href="{{ route('banner.edit',$banner->id) }}">Edit</a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{!! $data->render() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
