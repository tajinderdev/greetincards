@extends('layouts.app')

@section('page-title', 'Create Users')

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
                        Create New User
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>        
                </div>
            </div>
        </div>   
    </div>
</div>


@if (count($errors) > 0)
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
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Role</label>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                      
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Save User</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection