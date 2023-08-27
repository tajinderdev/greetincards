@extends('layouts.app')

@section('page-title', 'Profile')

@section('content')

    <div class="profile-cover bg-image mb-4" data-image="{{ url('assets/images/profile-bg.jpg') }}">
        <div
            class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
            <div class="avatar avatar-xl me-3">
                <img src="{{ url('assets/images/user/man_avatar3.jpg') }}" class="rounded-circle"
                     alt="...">
            </div>
            <div class="my-4 my-md-0">
                <h3 class="mb-1">Timotheus Bendan</h3>
                <small>Accountant</small>
            </div>
            <div class="ms-md-auto">
                <a href="{{ route('settings') }}" class="btn btn-primary btn-lg btn-icon">
                    <i class="bi bi-pencil small"></i> Edit Profile
                </a>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-7 col-md-12">
            <ul class="nav nav-pills mb-4">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile-posts') ? 'active' : '' }}" href="{{ url('profile-posts') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile-connections') ? 'active' : '' }}" href="{{ url('profile-connections') }}">Connections</a>
                </li>
            </ul>
            @yield('profile-content')
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row row-vertical-border text-center">
                        <div class="col-4 text-warning">
                            <h3>50</h3>
                            <span>Projects</span>
                        </div>
                        <div class="col-4 text-info">
                            <h3>10.596</h3>
                            <span>Connections</span>
                        </div>
                        <div class="col-4 text-success">
                            <h3>310</h3>
                            <span>Posts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex mb-4 align-items-center">
                        <h6 class="card-title mb-0">Recent Connections</h6>
                        <a href="#" class="ms-auto">View All</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center px-0">
                            <figure class="avatar avatar-state-primary me-3">
                                <img src="{{ url('assets/images/user/women_avatar5.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </figure>
                            <div class="flex-fill">
                                <h6 class="mb-1">Valentine Maton</h6>
                                <small class="text-muted">Engineer</small>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Message</a>
                                    <a href="#" class="dropdown-item">Block</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center px-0">
                            <figure class="avatar avatar-state-secondary me-3">
                                <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </figure>
                            <div class="flex-fill">
                                <h6 class="mb-1">Holmes Cherryman</h6>
                                <small class="text-muted">Human resources</small>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Message</a>
                                    <a href="#" class="dropdown-item">Block</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center px-0">
                            <figure class="avatar avatar-state-success me-3">
                                <img src="{{ url('assets/images/user/women_avatar1.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </figure>
                            <div class="flex-fill">
                                <h6 class="mb-1">Malanie Hanvey</h6>
                                <small class="text-muted">Real estate agent</small>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Message</a>
                                    <a href="#" class="dropdown-item">Block</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center px-0">
                            <figure class="avatar avatar-state-warning me-3">
                                <img src="{{ url('assets/images/user/women_avatar2.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </figure>
                            <div class="flex-fill">
                                <h6 class="mb-1">Kenneth Hune</h6>
                                <small class="text-muted">Engineer</small>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Message</a>
                                    <a href="#" class="dropdown-item">Block</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Online Friends</h6>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="avatar-group me-2">
                            <a href="#" class="avatar" data-bs-toggle="tooltip" title="Valentine Maton">
                                <img src="{{ url('assets/images/user/women_avatar1.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </a>
                            <a href="#" class="avatar" data-bs-toggle="tooltip" title="Holmes Cherryman">
                                <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </a>
                            <a href="#" class="avatar" data-bs-toggle="tooltip" title="Malanie Hanvey">
                                <img src="{{ url('assets/images/user/man_avatar2.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </a>
                            <a href="#" class="avatar" data-bs-toggle="tooltip" title="Kenneth Hune">
                                <img src="{{ url('assets/images/user/women_avatar2.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </a>
                            <a href="#" class="avatar" data-bs-toggle="tooltip" title="Kenneth Hune">
                                <img src="{{ url('assets/images/user/women_avatar3.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </a>
                        </div>
                        <span>+7 people</span>
                    </div>
                </div>
                <a href="#" class="card-footer text-center">View All</a>
            </div>
        </div>
    </div>

@endsection
