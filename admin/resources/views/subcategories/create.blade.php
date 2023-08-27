@extends('layouts.app')

@section('page-title', 'Create Subcategory')

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
                        Create New Subcategory
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('subcategories.index') }}"> Back</a>
                        </div>
                    </div>        
                </div>
            </div>
        </div>   
    </div>
</div>

@if ($errors->any())
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
                <form action="{{ route('subcategories.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Subcategory</label>
                            {!! Form::text('name', null, array('placeholder' => 'Subcategory Name','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3"> 
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">-- Select a category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Icon Image</label>
                            {!! form::file('image',['class'=>'form-control','placeholder'=>''])!!}
                        </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Save Subcategory</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection