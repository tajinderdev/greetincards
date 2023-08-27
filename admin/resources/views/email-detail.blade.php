@extends('layouts.app')

@section('head')
    <!-- Quill editor -->
    <link href="{{ url("libs/quill/quill.snow.css") }}" rel="stylesheet" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{ url("libs/tagsinput/bootstrap-tagsinput.css") }}" type="text/css">
@endsection

@section('page-title', 'Email Detail')

@section('header-action-button')
    <a href="#" data-bs-toggle="modal" data-bs-target="#compose" title="Compose Email" class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Compose Mail
    </a>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="mb-0">
                Advertising Internet Online
                <span class="badge bg-success badge-pill ms-1">Freelance</span>
            </h3>
            <div class="d-flex align-items-center my-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <img src="{{ url('assets/images/user/women_avatar5.jpg') }}"
                             class="rounded-circle"
                             alt="image">
                    </div>
                    <div>
                        <h6 class="mb-1">
                            Valentine Maton
                            <span class="d-sm-inline fw-normal d-none text-muted ms-2">&lt;elnora@gmail.com&gt;</span>
                        </h6>
                        <span class="small text-muted">to Lois Jimenez</span>
                    </div>
                </div>
                <div class="ms-auto d-none d-md-flex align-items-center gap-3">
                    <a href="#" data-bs-toggle="tooltip" title="Attachment">
                        <i class="bi bi-paperclip"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-star-fill text-warning"></i>
                    </a>
                    <span class="text-muted">4:14 AM</span>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Reply</a>
                            <a href="#" class="dropdown-item">Mark as spam</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <p>
                    <strong>Greetings 😃</strong>
                </p>
                <p>It is a long established fact that a reader will be distracted by the readable
                    content of
                    a page when looking at its layout.The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content
                    here',making it look like readable English.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration in some form, by injected humour, or randomised words which
                    don't
                    look even slightly believable.</p>
                <p>
                    <strong>Envato Design Team</strong>
                </p>
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
            <h6 class="mb-3">Reply</h6>
            <div class="mail-reply-editor mb-3"></div>
            <div class="mb-4">
                <div class="mail-reply-editor-toolbar">
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

    <div class="modal fade" tabindex="-1" role="dialog" id="compose">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Compose Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control tagsinput" placeholder="To"
                                   value="example@test.com.tr" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-4">
                            <div class="compose-quill-editor mb-3"></div>
                            <div class="d-flex justify-content-between">
                                <div class="compose-quill-toolbar">
                                <span class="ql-formats me-0">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-link"></button>
                                    <button class="ql-image"></button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Tagsinput -->
    <script src="{{ url("libs/tagsinput/bootstrap-tagsinput.js") }}"></script>
    <script src="{{ url("dist/js/examples/tagsinput.js") }}"></script>

    <!-- quill -->
    <script src="{{ url("libs/quill/quill.js") }}"></script>

    <!-- Mail example -->
    <script src="{{ url("dist/js/examples/mail.js") }}"></script>

@endsection
