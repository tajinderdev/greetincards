@extends('layouts.app')

@section('content')

    <div class="buyer-profile-cover bg-image mb-4" data-image="{{ url('assets/images/profile-bg.jpg') }}">
        <div
            class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
            <div class="avatar avatar-xl me-3">
                <img src="{{ url('assets/images/user/women_avatar3.jpg') }}" class="rounded-circle"
                     alt="...">
            </div>
            <div class="my-4 my-md-0">
                <h3 class="mb-1">Wendell Dikes</h3>
                <small>Buyer</small>
            </div>
            <div class="ms-md-auto">
                <a href="{{ route('settings') }}" class="btn btn-primary btn-lg btn-icon">
                    <i class="bi bi-pencil small"></i> Edit Account
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @yield('buyer-content')
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('buyer-dashboard')) active @endif" href="{{ route('buyer-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('buyer-orders')) active @endif" href="{{ route('buyer-orders') }}">My Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('buyer-addresses')) active @endif" href="{{ route('buyer-addresses') }}">My Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('buyer-wishlist')) active @endif" href="{{ route('buyer-wishlist') }}">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Apex chart -->
    <script src="{{ url("libs/charts/apex/apexcharts.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/buyer-dashboard.js") }}"></script>
@endsection
