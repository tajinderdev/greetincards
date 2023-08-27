@extends('layouts.profile')

@section('page-title', 'Profile')

@section('profile-content')

    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Post Share</h6>
            <form class="d-flex">
                <div class="avatar avatar-sm me-3 flex-shrink-0">
                    <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                         class="rounded-circle" alt="...">
                </div>
                <div class="flex-grow-1">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Share something">
                        <button class="btn btn-primary" type="button">Share</button>
                    </div>
                    <div class="d-flex gap-1">
                        <button class="btn btn-icon" data-bs-toggle="tooltip" title="Location">
                            <i class="bi bi-geo-alt me-0"></i>
                        </button>
                        <button class="btn btn-icon" data-bs-toggle="tooltip" title="Image">
                            <i class="bi bi-image me-0"></i>
                        </button>
                        <button class="btn btn-icon" data-bs-toggle="tooltip" title="Video">
                            <i class="bi bi-play-circle me-0"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-3">
                <div class="d-flex">
                    <figure class="avatar me-3">
                        <img src="{{ url('assets/images/user/man_avatar3.jpg') }}"
                             class="rounded-circle" alt="...">
                    </figure>
                    <div class="d-inline-block align-self-center">
                        <div>Josy Lane</div>
                        <small class="text-muted">3 day ago</small>
                    </div>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" class="btn " data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Share</a>
                        <a href="#" class="dropdown-item">Edit</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloremque
                eveniet illo minus nemo obcaecati, voluptatem? At corporis cum dolorem eos
                impedit in magni officiis quibusdam, ratione sequi totam voluptatum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id
                ipsa
                nobis omnis, tenetur? Dolor officiis omnis quo?</p>
            <div class="d-flex gap-1 mt-4">
                <a href="#" class="btn btn-icon" title="Like" data-bs-toggle="tooltip">
                    <i class="bi bi-heart-fill text-danger"></i> 200
                </a>
                <a href="#" class="btn btn-icon" title="Comments" data-bs-toggle="tooltip">
                    <i class="bi bi-chat-dots"></i> 5
                </a>
                <a href="#" class="btn btn-icon" title="Share" data-bs-toggle="tooltip">
                    <i class="bi bi-share"></i> 10
                </a>
            </div>
            <div class="mt-4">
                <div class="card card-body mb-4">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <figure class="avatar avatar-sm me-3">
                                <img src="{{ url('assets/images/user/man_avatar4.jpg') }}" class="rounded-circle"
                                     alt="...">
                            </figure>
                            <div class="d-inline-block">
                                <div>Elva Cosgry</div>
                                <small class="text-muted">3 day ago</small>
                            </div>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" class="btn" data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, ducimus?</p>
                    <div class="d-flex gap-1">
                        <a href="#" class="btn btn-icon" title="Like" data-bs-toggle="tooltip">
                            <i class="bi bi-heart-fill text-danger"></i> 5
                        </a>
                        <a href="#" class="btn btn-link">Reply</a>
                    </div>
                </div>
                <div class="card card-body mb-4">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <figure class="avatar avatar-sm me-3">
                                <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle"
                                     alt="...">
                            </figure>
                            <div class="d-inline-block">
                                <div>Jenni Odlin</div>
                                <small class="text-muted">3 day ago</small>
                            </div>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" class="btn " data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad,
                        assumenda at atque corporis culpa earum id illum impedit laborum
                        maxime
                        minus nisi omnis quod sequi suscipit totam veritatis voluptatum.</p>
                    <div class="d-flex gap-1">
                        <a href="#" class="btn btn-icon" title="Like" data-bs-toggle="tooltip">
                            <i class="bi bi-heart"></i> 2
                        </a>
                        <a href="#" class="btn btn-link">Reply</a>
                    </div>
                </div>
                <form class="d-flex mt-3">
                    <div>
                        <figure class="avatar avatar-sm me-3">
                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                 class="rounded-circle" alt="...">
                        </figure>
                    </div>
                    <div class="flex-grow-1">
                        <div class="mb-3">
                            <textarea rows="2" class="form-control" placeholder="Post comment for @Adek"></textarea>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
