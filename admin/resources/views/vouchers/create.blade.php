@extends('layouts.app')

@section('page-title', 'Create Vouchers')

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
                        Create New Vouchers
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('vouchers.index') }}"> Back</a>
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
                <form action="{{ route('vouchers.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control mt-2 @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="row mt-2">
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <input type="text" class="form-control mt-2 @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}" required>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label for="amount">Amount</label>
                            <input type="number" step="0.01" class="form-control mt-2" name="amount" id="amount" value="{{ old('amount', $voucher->amount ?? '') }}">
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label for="discount_percentage">Discount Percentage</label>
                            <input type="number" class="form-control mt-2 @error('discount_percentage') is-invalid @enderror" id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage') }}" required>
                            @error('discount_percentage')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="amount">Start Date</label>
                            <input type="date" class="form-control mt-2" name="start_date" id="start_date" value="{{ old('start_date', $voucher->start_date ?? '') }}" min="{{ date('Y-m-d') }}">
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="discount_percentage">End Date</label>
                            <input type="date"  class="form-control mt-2" name="end_date" id="end_date" value="{{ old('end_date', $voucher->end_date ?? '') }}" min="{{ date('Y-m-d') }}">
                            @error('end_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="is_active">Active</label>
                        <select class="form-control mt-2 @error('is_active') is-invalid @enderror" id="is_active" name="is_active" required>
                            <option value="1" @if(old('is_active') == 1) selected @endif>Yes</option>
                            <option value="0" @if(old('is_active') == 0) selected @endif>No</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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