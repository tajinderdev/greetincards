@extends('layouts.app')

@section('page-title', 'Edit Vouchers')

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
                        Edit Vouchers
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
                {!! Form::model($voucher, ['method' => 'PATCH','route' => ['vouchers.update', $voucher->id]]) !!}
                {{-- <form method="POST" action="{{ route('vouchers.update', ['voucher' => $voucher->id]) }}"> --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $voucher->code }}" required>
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="type">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{  $voucher->type }}" required>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="amount">Amount</label>
                            <input type="number" step="0.01" class="form-control" name="amount" id="amount" value="{{ $voucher->amount }}">
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="discount_percentage">Discount Percentage</label>
                            <input type="number" class="form-control @error('discount_percentage') is-invalid @enderror" id="discount_percentage" name="discount_percentage" value="{{ $voucher->discount_percentage }}" required>
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

                    <div class="form-group  mt-3">
                        <label for="is_active">Active</label>
                        <select class="form-control @error('is_active') is-invalid @enderror" id="is_active" name="is_active" required>
                            <option value="Yes" {{ $voucher->is_active === 'Yes' ? 'selected' : '' }}>Yes</option>
                            <option value="No" {{ $voucher->is_active === 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Update</button>
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