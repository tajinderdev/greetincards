@extends('layouts.app')

@section('page-title', 'Vouchers Details')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
                All Vouchers
            </div>
            <div class="dropdown ms-auto">
                <div class="pull-right">
                    @can('product-create')
                    <a class="btn btn-success" href="{{ route('vouchers.create') }}"> Create New Voucher</a>
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
                                <th>Code</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Discount (%)</th>
                                <th>Is Active</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vouchers as $voucher)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $voucher->code }}</td>
                                <td>{{ $voucher->type }}</td>
                                <td>{{ $voucher->amount }}</td>
                                <td>{{ $voucher->discount_percentage }}</td>
                                <td>{{ $voucher->is_active }}</td>
                                <td>{{ $voucher->start_date }}</td>
                                <td>{{ $voucher->end_date }}</td>
                                <td>
                                    <form action="{{ route('vouchers.destroy',$voucher->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('vouchers.edit',$voucher->id) }}">Edit</a>
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

{!! $vouchers->links() !!}

@endsection

@section('script')
<!-- Prism -->
<script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

