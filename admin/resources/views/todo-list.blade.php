@extends('layouts.app')

@section('head')
    <!-- quill -->
    <link href="{{ url("libs/quill/quill.snow.css") }}" rel="stylesheet" type="text/css">

    <!-- Clockpicker -->
    <link rel="stylesheet" href="{{ url("libs/clockpicker/bootstrap-clockpicker.min.css") }}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ url("libs/datepicker/daterangepicker.css") }}" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url("libs/select2/css/select2.min.css") }}" type="text/css">
@endsection

@section('page-title', 'Todo List')

@section('header-action-button')
    <a href="#" data-bs-toggle="modal" data-bs-target="#newTaskModal" title="Add New Task" class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Add Task
    </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-9">
            <div class="row mb-4">
                <div class="col-md-7 d-flex">
                    <div class="me-3">
                        <div class="input-group">
                            <div class="input-group-text bg-white">
                                <input class="form-check-input todo-check-all mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            <button class="btn btn-light bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Favourites</a>
                                <a class="dropdown-item" href="#">Done</a>
                                <a class="dropdown-item" href="#">Deleted</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="btn bg-white" data-bs-toggle="dropdown">
                            <i class="bi bi-list-ul me-2"></i> Order by
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Date</a>
                            <a class="dropdown-item" href="#">User</a>
                            <a class="dropdown-item" href="#">Subject</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form class="mt-4 mt-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search todo list">
                            <button class="btn btn-outline-light" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="todo-list">
                <ul class="list-group">
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">How To Protect Your Computer Very Useful Tips</div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-danger">Social</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Jo Hugill"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Cullie Philcott"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3 todo-completed" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">How Hypnosis Can Help You</div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-warning">Theme Support</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Jo Hugill"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Cullie Philcott"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3 todo-completed" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Dealing With Technical Support 10
                                Useful Tips
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-info">Friends</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-primary avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                        <div class="avatar avatar-success avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Jo Hugill"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Cullie Philcott"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Get The Boot A Birds Eye Look Into
                                Mcse Boot Camps
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-danger">Social</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-success avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">
                                Buying Used Electronic Test Equipment.
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-success">Freelance</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-primary avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                        <div class="avatar avatar-success avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3 todo-completed" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Fix Responsiveness</div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-warning">Theme Support</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-warning avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <div class="avatar avatar-info avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">
                                Hypnotherapy For Motivation Getting The Drive Back
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-secondary">Coding</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Are You Struggling In Life</div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-warning">Theme Support</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-primary avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Believing Is The Absence Of Doubt
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-success">Freelance</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Success Steps For Your Personal Or
                                Business Life
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-danger">Social</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <div class="avatar avatar-secondary avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">Don't Let The Outtakes Take You
                                Out
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-warning">Theme Support</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-info avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item gap-3" data-detail-url="{{ url('todo-detail') }}">
                        <div class="flex-shrink-0">
                            <i class="todo-sortable-handle bi bi-grip-horizontal"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <div class="text-truncate">It is a good idea to think of your
                                PC as an office.
                            </div>
                            <div class="ps-3 d-flex gap-3 align-items-center flex-shrink-0">
                                <div class="d-sm-inline d-none">
                                    <div class="badge bg-warning">Theme Support</div>
                                </div>
                                <div class="d-sm-inline d-none">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-success avatar-sm" title="Godwin Adanez"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-bs-toggle="tooltip">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <div class="avatar avatar-primary avatar-sm" title="Polly Everist"
                                             data-bs-toggle="tooltip">
                                            <span class="avatar-text rounded-circle">P</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Detail</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Clone</a>
                                        <a class="dropdown-item" href="#">Make an Assignment</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-md-3">
            <div class="card sticky-top">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" href="#">
                                <span class="bi bi-list-ul me-3"></span>
                                All
                                <span class="badge bg-primary ms-auto">20</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="bi bi-pencil-square me-3"></span> My Task
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="bi bi-heart me-3"></span> Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                                <span class="bi bi-check-circle me-3"></span>
                                Done
                                <span class="badge bg-primary ms-auto">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                                <span class="bi bi-trash me-3"></span> Deleted
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Task title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tags</label>
                            <div class="col-sm-9">
                                <select class="task-tags-input" multiple>
                                    <option value="Theme Support">Theme Support</option>
                                    <option value="Freelance">Freelance</option>
                                    <option selected value="Social">Social</option>
                                    <option selected value="Friends">Friends</option>
                                    <option value="Coding">Coding</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row row-sm">
                            <label class="col-sm-3 col-form-label">Deadline</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control task-datepicker-input"
                                       placeholder="Date">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control task-time-input"
                                       placeholder="Time">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Participate</label>
                            <div class="col-sm-9 d-flex justify-content-between">
                                <div class="avatar-group">
                                    <figure class="avatar avatar-sm">
                                        <img src="{{ url('assets/images/user/women_avatar3.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </figure>
                                    <figure class="avatar avatar-danger avatar-sm">
                                        <span class="avatar-text rounded-circle">S</span>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <img src="{{ url('assets/images/user/women_avatar5.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </figure>
                                </div>
                                <div>
                                    <button type="button" class="btn" title="Add User" data-bs-toggle="dropdown">
                                        Add User
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end p-0">
                                        <div class="p-3">
                                            <h6 class="mb-3">Add user</h6>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" placeholder="Search..">
                                                <button class="btn btn-light" type="button" id="button-addon2">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                            <ul class="list-group list-group-flush mt-2">
                                                <li class="list-group-item d-flex align-items-center ps-0 pe-0">
                                                    <div class="me-2">
                                                        <figure class="avatar avatar-info avatar-sm">
                                                            <span class="avatar-text rounded-circle">V</span>
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Valentine Maton</h6>
                                                    </div>
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="bi bi-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center ps-0 pe-0">
                                                    <div class="me-2">
                                                        <figure class="avatar avatar-sm">
                                                            <img
                                                                src="{{ url('assets/images/user/women_avatar3.jpg') }}"
                                                                class="rounded-circle" alt="image">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Valentine Maton</h6>
                                                    </div>
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="bi bi-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center ps-0 pe-0">
                                                    <div class="me-2">
                                                        <figure class="avatar avatar-sm">
                                                            <img
                                                                src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                                class="rounded-circle" alt="image">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Valentine Maton</h6>
                                                    </div>
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown"
                                                           class="btn btn-light btn-sm ms-3" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="bi bi-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center ps-0 pe-0">
                                                    <div class="me-2">
                                                        <figure class="avatar avatar-sm">
                                                            <img src="{{ url('assets/images/user/man_avatar2.jpg') }}"
                                                                 class="rounded-circle" alt="image">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Valentine Maton</h6>
                                                    </div>
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown"
                                                           class="btn btn-light btn-sm ms-3" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="bi bi-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Clockpicker -->
    <script src="{{ url("libs/clockpicker/bootstrap-clockpicker.min.js") }}"></script>

    <!-- Select2 -->
    <script src="{{ url("libs/select2/js/select2.min.js") }}"></script>

    <!-- Datepicker -->
    <script src="{{ url("libs/datepicker/daterangepicker.js") }}"></script>

    <!-- JQuery ui -->
    <script src="{{ url("libs/jquery-ui/jquery-ui.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/todo-list.js") }}"></script>
@endsection
