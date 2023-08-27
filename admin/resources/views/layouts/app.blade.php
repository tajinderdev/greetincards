<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if (!request()->segment(1)) GreetingCard | E-Commerce  @else @yield('page-title') - GreetingCard | E-Commerce @endif</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url("assets/images/favicon.png") }}"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ url("dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css") }}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{ url("dist/css/bootstrap-docs.css") }}" type="text/css">

    @yield('head')

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ url("dist/css/app.min.css") }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="top-menu dark2">

<!-- preloader -->
<div class="preloader">
    {{-- <img src="{{ url('assets/images/logo.svg') }}" alt="logo"> --}}
    <h1 style="color:red">GiftCard</h1>
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->
<div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
        <div class="align-items-center d-flex justify-content-between py-4">
            Notifications
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content">
        <div class="tab-content">
            <div class="tab-pane active" id="activities">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        You joined a group
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Storage is running low!
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        1 person sent a file
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Reports ready to download
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        2 steps verification
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="notes">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                This month's report will be prepared.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                An email will be sent to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                The meeting will be held.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                Conversation with users.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                Payment refund will be made to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                Payment form will be activated.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-primary btn-block">
                        <i class="bi bi-plus me-2"></i> Add Notes
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="alerts">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Signed in with a different device.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Your billing information is not active.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your subscription has expired.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your storage space is running low
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->
<div class="sidebar" id="settings">
    <div class="sidebar-header">
        <div>
            <i class="bi bi-gear me-2"></i>
            Settings
        </div>
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    <label class="form-check-label" for="flexCheckDefault1">
                        Remember next visits
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                    <label class="form-check-label" for="flexCheckDefault2">
                        Enable report generation.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                    <label class="form-check-label" for="flexCheckDefault3">
                        Allow notifications.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        Hide user requests
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                    <label class="form-check-label" for="flexCheckDefault5">
                        Speed up demands
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hide menus
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-primary">All Settings</a>
    </div>
</div>
<!-- ./ settings sidebar -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="{{ url('/') }}" class="menu-header-logo">
            <img src="{{ url('assets/images/logo.svg') }}" alt="logo">
        </a>
        <a href="{{ url('/') }}" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ url('assets/images/user/man_avatar3.jpg') }}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="{{ route('login') }}" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a @if(!request()->segment(1) || request()->is('dashboard')) class="active"
                   @endif href="{{ route('dashboard') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul>
                    <li>
                        {{-- <a @if(request()->is('orders')) class="active" @endif href="{{ route('orders') }}">List</a> --}}
                    </li>
                    <li>
                        <a @if(request()->is('order-detail')) class="active" @endif href="{{ route('order-detail') }}">Detail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('product-list')) class="active" @endif href="{{ route('product-list') }}">List
                            View</a>
                    </li>
                    <li>
                        <a @if(request()->is('product-grid')) class="active" @endif href="{{ route('product-grid') }}">Grid
                            View</a>
                    </li>
                    <li>
                        <a @if(request()->is('product-detail')) class="active"
                           @endif href="{{ route('product-detail') }}">Product Detail</a>
                    </li>
                    <li>
                        <a @if(request()->is('shopping-cart')) class="active"
                           @endif href="{{ route('shopping-cart') }}">Shopping
                            Cart</a>
                    </li>
                    <li>
                        <a @if(request()->is('checkout')) class="active"
                           @endif href="{{ route('checkout') }}">Checkout</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Buyer</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('buyer-dashboard')) class="active"
                           @endif href="{{ route('buyer-dashboard') }}">Dashboard</a>
                    </li>
                    {{-- <li>
                        <a @if(request()->is('buyer-orders')) class="active"
                           @endif href="{{ route('orders') }}">Orders</a>
                    </li> --}}
                    <li>
                        <a @if(request()->is('buyer-addresses')) class="active"
                           @endif href="{{ route('buyer-addresses') }}">Addresses</a>
                    </li>
                    <li>
                        <a @if(request()->is('buyer-wishlist')) class="active"
                           @endif href="{{ route('buyer-wishlist') }}">Wishlist</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
                <a @if(request()->is('customers')) class="active" @endif href="{{ route('customers') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span>Customers</span>
                </a>
            </li> --}}
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Invoices</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('invoices') }}"
                           @if(request()->segment(1) == 'invoices') class="active" @endif>List</a>
                    </li>
                    <li>
                        <a href="{{ route('invoice-detail') }}"
                           @if(request()->segment(1) == 'invoice-detail') class="active" @endif>Detail</a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Apps</li>
            <li>
                <a @if(request()->segment(1) == 'chats') class="active" @endif href="{{ route('chats') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-chat-square"></i>
                    </span>
                    <span>Chats</span>
                    <span class="badge bg-success rounded-circle ms-auto">2</span>
                </a>
            </li>
            <li>
                <a href="{{ route('email') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <span>Email</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->segment(1) == 'email') class="active" @endif href="{{ route('email') }}">
                            <span>Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'email-detail') class="active"
                           @endif href="{{ route('email-detail') }}">
                            <span>Detail</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ route('email-template') }}">
                            <span>Email Template</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('todo-list') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-check-circle"></i>
                    </span>
                    <span>Todo App</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->segment(1) == 'todo-list') class="active"
                           @endif href="{{ route('todo-list') }}">
                            <span>List</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'todo-detail') class="active"
                           @endif href="{{ route('todo-detail') }}">
                            <span>Details</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Pages</li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person"></i>
                    </span>
                    <span>Profile</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('profile-posts')) class="active"
                           @endif href="{{ route('profile-posts') }}">Post</a>
                    </li>
                    <li>
                        <a @if(request()->is('profile-connections')) class="active"
                           @endif href="{{ route('profile-connections') }}">Connections</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <span>Users</span>
                </a>
                <ul>
                    <li><a @if(request()->segment(1) == 'user-list') class="active"
                           @endif href="{{ route('user-list') }}">List View</a></li>
                    <li><a @if(request()->segment(1) == 'user-grid') class="active"
                           @endif href="{{ route('user-grid') }}">Grid View</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-lock"></i>
                    </span>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('login') }}" target="_blank">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" target="_blank">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('reset-password') }}" target="_blank">Reset Password</a>
                    </li>
                    <li>
                        <a href="{{ route('lock-screen') }}" target="_blank">Lock Screen</a>
                    </li>
                    <li>
                        <a href="{{ route('account-verified') }}" target="_blank">Account Verified</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-exclamation-octagon"></i>
                    </span>
                    <span>Error Pages</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('404') }}" target="_blank">404</a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'access-denied') class="active"
                           @endif href="{{ route('access-denied') }}">Access Denied</a>
                    </li>
                    <li>
                        <a href="{{ route('under-construction') }}" target="_blank">Under Construction</a>
                    </li>
                </ul>
            </li>
            <li>
                <a @if(request()->segment(1) == 'settings') class="active"
                   @endif href="{{ route('settings') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a @if(request()->segment(1) == 'pricing-table') class="active"
                   @endif href="{{ route('pricing-table') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Pricing Table</span>
                    <span class="badge bg-success ms-auto">New</span>
                </a>
            </li>
            <li>
                <a @if(request()->segment(1) == 'search-page') class="active"
                   @endif href="{{ route('search-page') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-search"></i>
                    </span>
                    <span>Search Page</span>
                </a>
            </li>
            <li>
                <a @if(request()->segment(1) == 'faq') class="active"
                   @endif href="{{ route('faq') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-question-circle"></i>
                    </span>
                    <span>FAQ</span>
                </a>
            </li>
            <li class="menu-divider">User Interface</li>
            <li>
                <a href="#" target="_blank">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>
                    <span>Components</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('accordion')) class="active"
                           @endif href="{{ route('accordion') }}">Accordion</a>
                    </li>
                    <li>
                        <a @if(request()->is('alert')) class="active"
                           @endif href="{{ route('alert') }}">Alerts</a>
                    </li>
                    <li>
                        <a @if(request()->is('badge')) class="active"
                           @endif href="{{ route('badge') }}">Badge</a>
                    </li>
                    <li>
                        <a @if(request()->is('breadcrumb')) class="active"
                           @endif href="{{ route('breadcrumb') }}">Breadcrumb</a>
                    </li>
                    <li>
                        <a @if(request()->is('buttons')) class="active"
                           @endif href="{{ route('buttons') }}">Buttons</a>
                    </li>
                    <li>
                        <a @if(request()->is('button-group')) class="active"
                           @endif href="{{ route('button-group') }}">Button Group</a>
                    </li>
                    <li>
                        <a @if(request()->is('card')) class="active"
                           @endif href="{{ route('card') }}">Card</a>
                    </li>
                    <li>
                        <a @if(request()->is('card-masonry')) class="active"
                           @endif href="{{ route('card-masonry') }}">Card Masonry</a>
                    </li>
                    <li>
                        <a @if(request()->is('carousel')) class="active"
                           @endif href="{{ route('carousel') }}">Carousel</a>
                    </li>
                    <li>
                        <a @if(request()->is('collapse')) class="active"
                           @endif href="{{ route('collapse') }}">Collapse</a>
                    </li>
                    <li>
                        <a @if(request()->is('dropdown')) class="active"
                           @endif href="{{ route('dropdown') }}">Dropdowns</a>
                    </li>
                    <li>
                        <a @if(request()->is('list-group')) class="active"
                           @endif href="{{ route('list-group') }}">List Group</a>
                    </li>
                    <li>
                        <a @if(request()->is('modal')) class="active"
                           @endif href="{{ route('modal') }}">Modal</a>
                    </li>
                    <li>
                        <a @if(request()->is('navs-tabs')) class="active"
                           @endif href="{{ route('navs-tabs') }}">Navs and Tabs</a>
                    </li>
                    <li>
                        <a @if(request()->is('pagination')) class="active"
                           @endif href="{{ route('pagination') }}">Pagination</a>
                    </li>
                    <li>
                        <a @if(request()->is('popovers')) class="active"
                           @endif href="{{ route('popovers') }}">Popovers</a>
                    </li>
                    <li>
                        <a @if(request()->is('progress')) class="active"
                           @endif href="{{ route('progress') }}">Progress</a>
                    </li>
                    <li>
                        <a @if(request()->is('spinners')) class="active"
                           @endif href="{{ route('spinners') }}">Spinners</a>
                    </li>
                    <li>
                        <a @if(request()->is('toasts')) class="active"
                           @endif href="{{ route('toasts') }}">Toasts</a>
                    </li>
                    <li>
                        <a @if(request()->is('tables')) class="active"
                           @endif href="{{ route('tables') }}">
                            <span>Tables</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('tooltip')) class="active"
                           @endif href="{{ route('tooltip') }}">Tooltip</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" target="_blank">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>
                    <span>Forms</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <span>Form Elements</span>
                        </a>
                        <ul>
                            <li>
                                <a @if(request()->is('forms')) class="active"
                                   @endif href="{{ route('forms') }}">Overview</a>
                            </li>
                            <li>
                                <a @if(request()->is('form-control')) class="active"
                                   @endif href="{{ route('form-control') }}">Form Controls</a>
                            </li>
                            <li>
                                <a @if(request()->is('select')) class="active"
                                   @endif href="{{ route('select') }}">Select</a>
                            </li>
                            <li>
                                <a @if(request()->is('checks-radios')) class="active"
                                   @endif href="{{ route('checks-radios') }}">Checks and Radios</a>
                            </li>
                            <li>
                                <a @if(request()->is('range')) class="active"
                                   @endif href="{{ route('range') }}">Range</a>
                            </li>
                            <li>
                                <a @if(request()->is('input-group')) class="active"
                                   @endif href="{{ route('input-group') }}">Input Group</a>
                            </li>
                            <li>
                                <a @if(request()->is('floating-label')) class="active"
                                   @endif href="{{ route('floating-label') }}">Floating Label</a>
                            </li>
                            <li>
                                <a @if(request()->is('forms-layout')) class="active"
                                   @endif href="{{ route('forms-layout') }}">Form Layout</a>
                            </li>
                            <li>
                                <a @if(request()->is('form-validation')) class="active"
                                   @endif href="{{ route('form-validation') }}">Validation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a @if(request()->is('form-wizard')) class="active"
                           @endif href="{{ route('form-wizard') }}">
                            <span>Wizard</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('form-repeater')) class="active"
                           @endif href="{{ route('form-repeater') }}">
                            <span>Repeater</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('file-upload')) class="active"
                           @endif href="{{ route('file-upload') }}">
                            <span>File Upload</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('ckeditor')) class="active"
                           @endif href="{{ route('ckeditor') }}">
                            <span>CKEditor</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('range-slider')) class="active"
                           @endif href="{{ route('range-slider') }}">
                            <span>Range Slider</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('select2')) class="active"
                           @endif href="{{ route('select2') }}">
                            <span>Select2</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('tags-input')) class="active"
                           @endif href="{{ route('tags-input') }}">
                            <span>Tags Input</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('input-mask')) class="active"
                           @endif href="{{ route('input-mask') }}">
                            <span>Input Mask</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('datepicker')) class="active"
                           @endif href="{{ route('datepicker') }}">
                            <span>Datepicker</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('clockpicker')) class="active"
                           @endif href="{{ route('clockpicker') }}">
                            <span>Clock Picker</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-heart"></i>
                    </span>
                    <span>Content</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('typography')) class="active"
                           @endif href="{{ route('typography') }}">
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('images')) class="active"
                           @endif href="{{ route('images') }}">
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('figures')) class="active"
                           @endif href="{{ route('figures') }}">
                            <span>Figures</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('avatar')) class="active"
                           @endif href="{{ route('avatar') }}">
                            <span>Avatar</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('icons')) class="active"
                           @endif href="{{ route('icons') }}">
                            <span>Icons</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('colors')) class="active" @endif href="{{ route('colors') }}">
                            <span>Colors</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Charts</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('apexchart')) class="active"
                           @endif href="{{ route('apexchart') }}">Apex Chart</a>
                    </li>
                    <li>
                        <a @if(request()->is('chartjs')) class="active"
                           @endif href="{{ route('chartjs') }}">Chartjs</a>
                    </li>
                    <li>
                        <a @if(request()->is('justgage')) class="active"
                           @endif href="{{ route('justgage') }}">Justgage</a>
                    </li>
                    <li>
                        <a @if(request()->is('morsis')) class="active"
                           @endif href="{{ route('morsis') }}">Morsis</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-paperclip"></i>
                    </span>
                    <span>Extensions</span>
                </a>
                <ul>
                    <li>
                        <a @if(request()->is('vector-map')) class="active"
                           @endif href="{{ route('vector-map') }}">
                            <span>Vector Map</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('datatable')) class="active"
                           @endif href="{{ route('datatable') }}">
                            <span>Datatable</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->is('sweet-alert')) class="active"
                           @endif href="{{ route('sweet-alert') }}">Sweet Alert</a>
                    </li>
                    <li>
                        <a @if(request()->is('lightbox')) class="active"
                           @endif href="{{ route('lightbox') }}">Lightbox</a>
                    </li>
                    <li>
                        <a @if(request()->is('introjs')) class="active"
                           @endif href="{{ route('introjs') }}">Introjs</a>
                    </li>
                    <li>
                        <a @if(request()->is('nestable')) class="active"
                           @endif href="{{ route('nestable') }}">Nestable</a>
                    </li>
                    <li>
                        <a @if(request()->is('rating')) class="active"
                           @endif href="{{ route('rating') }}">Rating</a>
                    </li>
                    <li>
                        <a @if(request()->is('code-highlighter')) class="active"
                           @endif href="{{ route('code-highlighter') }}">Code Highlighter</a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Other</li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-list"></i>
                    </span>
                    <span>Menu Item</span>
                </a>
                <ul>
                    <li><a href="#">Menu Item 1</a></li>
                    <li>
                        <a href="#">Menu Item 2</a>
                        <ul>
                            <li>
                                <a href="#">Menu Item 2.1</a>
                            </li>
                            <li>
                                <a href="#">Menu Item 2.2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="disabled">
                    <span class="nav-link-icon">
                        <i class="bi bi-hand-index-thumb"></i>
                    </span>
                    <span>Disabled</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    @include('components.header-with-top-menu')
    <!-- ./ header -->

    <!-- content -->
    <div class="content @yield('contentClassName')">
        @yield('content')
    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <div>© {{ date('Y') }} GreetingCard - <a href="" target="_blank">GiftCard</a></div>
        <div>
            <nav class="nav gap-4">
                
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="{{ url("libs/bundle.js") }}"></script>

@yield('script')

<!-- Main Javascript file -->
<script src="{{ url("dist/js/app.min.js") }}"></script>
<script src="{{ url("dist/js/countrystatecity.js") }}"></script>
<script>
    $(document).ready(function(){
        $('#category_id').on('change', function(){
            var id = $(this).val();
            if(id){
                $.ajax({
                    url: "{{ route('get-subcategories', '') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    success:function(data){
                        $('#subcategory_id').empty();
                        $.each(data, function(key, value){
                            $('#subcategory_id').append('<option value="'+ value.id +'">' + value.name + '</option>');
                        });
                    }
                });
            }else{
                $('#subcategory_id').empty();
            }
        });
    });
    </script>

<script>
    $(document).ready(function() {
        $('#status-select').on('change', function() {
            var itemId = $(this).data('item-id');
            var status = $(this).val();
            $.ajax({
                type: 'PUT',
                url: '/users/' + itemId + '/status',
                data: {
                    status: status,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    alert(data.success);
                }
            });
        });
    });
</script>
    
</body>
</html>
