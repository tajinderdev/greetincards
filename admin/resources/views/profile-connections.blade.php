@extends('layouts.profile')

@section('page-title', 'Profile')

@section('profile-content')

    <div class="row g-4">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/man_avatar4.jpg') }}"
                             class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Rosemary Krout</h6>
                        <div class="text-muted">Team Leader</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/women_avatar4.jpg') }}"
                             class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Miller Edwins</h6>
                        <div class="text-muted">Team Leader</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                             class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Cahra Smiz</h6>
                        <div class="text-muted">Agent</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/women_avatar5.jpg') }}" class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Burgess Attwool</h6>
                        <div class="text-muted">Contact</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Allx Life</h6>
                        <div class="text-muted">Agent</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                             class="rounded-circle" alt="...">
                    </div>
                    <div class="mb-4">
                        <h6>Marti Sorbey</h6>
                        <div class="text-muted">Developer</div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-person-plus"></i> Follow
                        </a>
                        <div class="dropup">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-outline-primary" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
