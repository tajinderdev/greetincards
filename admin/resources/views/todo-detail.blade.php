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

@section('page-title', 'Todo Detail')

@section('header-action-button')
    <a href="#" data-bs-toggle="modal" data-bs-animation="false" data-bs-target="#newTaskModal" title="Add New Task"
       class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Add Task
    </a>
@endsection

@section('content-header-action')
    <a href="#" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-bs-animation="false" title="2:44 AM">
        <i class="bi bi-check2"></i> Completed
    </a>
    <div class="dropdown">
        <a href="#" data-bs-toggle="dropdown" class="btn btn-light">
            <i class="bi bi-three-dots"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <a href="#" class="dropdown-item">Edit</a>
            <a href="#" class="dropdown-item text-danger">Delete</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-lg-flex justify-content-between mb-4">
                <h3 class="mb-3 mb-lg-0">Meetings with customers related to the project</h3>
            </div>
            <div class="d-md-flex align-items-center mb-4">
                <div>
                    <div class="avatar-group">
                        <div class="avatar avatar-primary" title="Polly Everist" data-bs-toggle="tooltip">
                            <span class="avatar-text rounded-circle">P</span>
                        </div>
                        <div class="avatar avatar-success" title="Godwin Adanez" data-bs-toggle="tooltip">
                            <span class="avatar-text rounded-circle">G</span>
                        </div>
                        <figure class="avatar" title="Lisle Essam" data-bs-toggle="tooltip">
                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </figure>
                        <figure class="avatar" title="Baxie Roseblade" data-bs-toggle="tooltip">
                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </figure>
                        <figure class="avatar" title="Mella Mixter" data-bs-toggle="tooltip">
                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </figure>
                    </div>
                </div>
                <div class="ms-auto mt-2 mt-md-0 d-flex align-items-center gap-3">
                    <span class="badge bg-warning badge-pill">Theme Support</span>
                    <a href="#" data-bs-toggle="tooltip" title="Attachments">
                        <i class="bi bi-paperclip"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-star-fill text-warning"></i>
                    </a>
                    <span class="text-muted">4:14 AM</span>
                </div>
            </div>
            <div class="mb-4">
                <p>Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion
                    entered windows off. Advantage dependent suspicion convinced provision him yet. Timed balls
                    match at by rooms we. Fat not boy neat left had with past here call. Court nay merit few nor
                    party learn. Why our year her eyes know even how. Mr immediate remaining conveying allowance do
                    or.</p>
                <p>Timed balls match at by rooms we. Fat not boy neat left had with past here call. Court nay merit
                    few nor party learn. Why our year her eyes know even how. Mr immediate remaining conveying
                    allowance do or.</p>
            </div>
            <h6 class="mb-3">Attachments</h6>
            <ul class="list-unstyled mb-4">
                <li class="mb-2">
                    <a href="#">
                        <i class="bi bi-paperclip me-1"></i>
                        uikit-design.psd
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#">
                        <i class="bi bi-paperclip me-1"></i>
                        uikit-design.sketch
                    </a>
                </li>
            </ul>
            <h6 class="mb-3">Share</h6>
            <div class="mb-4">
                <div class="todo-textarea-editor2 mb-3"></div>
                <div class="todo-textarea-toolbar2">
                    <span class="ql-formats me-0">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                    </span>
                </div>
            </div>
            <button class="btn btn-primary">Send</button>
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
                                                        <a href="#" data-bs-toggle="dropdown"
                                                           class="btn btn-light btn-sm"
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
                                                        <a href="#" data-bs-toggle="dropdown"
                                                           class="btn btn-light btn-sm"
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
    <!-- Quill -->
    <script src="{{ url("libs/quill/quill.js") }}"></script>

    <!-- Clockpicker -->
    <script src="{{ url("libs/clockpicker/bootstrap-clockpicker.min.js") }}"></script>

    <!-- Select2 -->
    <script src="{{ url("libs/select2/js/select2.min.js") }}"></script>

    <!-- Datepicker -->
    <script src="{{ url("libs/datepicker/daterangepicker.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/todo-list.js") }}"></script>
@endsection
