@extends('layouts.app')

@section('page-title', 'Users Details')

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
        All Users
      </div>
      <div class="dropdown ms-auto">
        <div class="pull-right">
          <a class="btn btn-danger" href="{{ route('users.create') }}"> Create New User</a>
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
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Approval</th>
        <th>Status</th>
        <th class="text-end">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key => $user)
      <tr>
        <td><input class="form-check-input" type="checkbox"></td>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
          @foreach($user->getRoleNames() as $v)
          <label class="badge bg-success">{{ $v }}</label>
          @endforeach
          @endif
        </td>
        <td>
          <select name="status" id="status-select" data-item-id="{{ $user->id }}" class="form-control">
              <option value="">Select Status</option>
              <option value="approved" {{ $user->status === 'approved' ? 'selected' : '' }}>Approved</option>
              <option value="rejected" {{ $user->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
          </select>

        </td>
        <td>{{ $user->approval }}</td>
        <td>
          {{-- <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a> --}}
          <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
          {!! Form::close() !!}
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
