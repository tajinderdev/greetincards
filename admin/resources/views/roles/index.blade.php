@extends('layouts.app')

@section('page-title', 'Roles Details')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                Role Management
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
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
        </tr>
        </thead>
        <tbody>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    {{-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> --}}
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{!! $roles->render() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

