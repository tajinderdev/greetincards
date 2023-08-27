@extends('layouts.app')

@section('page-title', 'Add Banner')

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
                        Add Banner
                    </div>
                    <div class="dropdown ms-auto">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('banner.index') }}"> Back</a>
                        </div>
                    </div>        
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
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            {!! form::file('image',['class'=>'form-control','placeholder'=>''])!!}
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pages</label>
                            <select name="pages" id="pages" class="form-control">
                                <option value="">Select Pages</option>
                                <option value="Homepage">Homepage</option>
                                <option value="Product">Product</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image Order</label>
                            <input type="number" name="image_order" class="form-control" id="image_order" value="">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image Order</label>
                            <select name="image_order" id="iorder">
                                <option value="">Select Order Number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style' => 'height:100px;')) !!}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Save Banner</button>
                        </div>
                    </div>
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