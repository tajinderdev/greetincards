@extends('layouts.app')

@section('page-title', 'Access Denied')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('contentClassName', 'align-items-center content d-flex justify-content-center text-center flex-column')

@section('content')

    <div class="row mb-5">
        <div class="col-md-3 m-auto">
            <figure>
                <img class="w-100" src="{{ url('assets/svg/access-denied.svg') }}" alt="image">
            </figure>
        </div>
    </div>
    <div class="display-6">Access Denied</div>
    <p class="text-muted my-4">You have been denied access to this page. Please check your permissions.</p>
    <div class="d-flex gap-3 justify-content-center">
        <a href="#" class="btn btn-primary">Home Page</a>
        <a href="#" class="btn bg-white">Back</a>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection

