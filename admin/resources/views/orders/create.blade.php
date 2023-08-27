@extends('layouts.app')

@section('page-title', 'Create Shops')

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
                        Create New Shops
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('shops.index') }}"> Back</a>
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
                <form action="{{ route('shops.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="companyname">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="company_name" value="{{ old('company_name', $shops->company_name ?? '') }}">
                        @error('company_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control" id="address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" id="country" value="{{ old('country') }}">
                            @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="post_code">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection