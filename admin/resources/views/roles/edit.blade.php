@extends('layouts.app')

@section('page-title', 'Edit Roles')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                Edit New Role
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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
                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Permission</label>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection
