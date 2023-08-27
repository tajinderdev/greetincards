@extends('layouts.app')

@section('head')
    <!-- Quill editor -->
    <link href="{{ url("libs/quill/quill.snow.css") }}" rel="stylesheet" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{ url("libs/tagsinput/bootstrap-tagsinput.css") }}" type="text/css">
@endsection

@section('page-title', 'Inbox')

@section('header-action-button')
    <button data-bs-toggle="modal" data-bs-target="#compose" title="Compose Email" class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Compose Mail
    </button>
@endsection

@section('content-header-action-button')
    <a href="#" data-bs-toggle="modal" data-bs-target="#compose" title="Compose Email" class="btn btn-primary btn-icon">
        <i class="bi bi-plus"></i> Compose Mail
    </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-9">
            <div class="row mb-4">
                <div class="col-md-7 d-flex gap-3">
                    <div>
                        <div class="input-group">
                            <div class="input-group-text bg-white">
                                <input class="form-check-input mt-0 email-check-all" type="checkbox" value=""
                                       aria-label="Checkbox for following text input">
                            </div>
                            <button class="btn btn-light bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                                <a class="dropdown-item" href="#">Mark as Unread</a>
                                <a class="dropdown-item" href="#">Add Star</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="btn bg-white" data-bs-toggle="dropdown">
                            <i class="bi bi-list-ul me-2"></i> Order by
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Date</a>
                            <a class="dropdown-item" href="#">From</a>
                            <a class="dropdown-item" href="#">Subject</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form class="mt-4 mt-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search emails">
                            <button class="btn btn-outline-light" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="email-list">
                <ul class="list-group">
                    <li class="list-group-item text-success" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar me-3">
                                <img src="{{ url('assets/images/user/man_avatar5.jpg') }}"
                                     class="rounded-circle" alt="image">
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Lucas Kriebel (via Twitter)</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Illum, labore?
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item text-success" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-info me-3">
                                <span class="avatar-text rounded-circle">Z</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Ecommerce website Paypal integration 😃</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                </div>
                                <i class="bi bi-paperclip"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-danger me-3">
                                <span class="avatar-text rounded-circle">S</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Randy, me (5)</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Corporis cumque dicta eligendi, in quasi recusandae.
                                </div>
                                <i class="bi bi-paperclip"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item text-success" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar me-3">
                                <img src="{{ url('assets/images/user/women_avatar3.jpg') }}"
                                     class="rounded-circle" alt="image">
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Andrew Zimmer ❤❤</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet.</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-warning me-3">
                                <span class="avatar-text rounded-circle">Z</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Charukaw, me (7)</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Asperiores esse et hic nesciunt quas ratione rem reprehenderit similique
                                    temporibus totam!
                                </div>
                                <i class="bi bi-paperclip"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-secondary me-3">
                                <span class="avatar-text rounded-circle">S</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Stack Exchange</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Lorem ipsum dolor sit amet.</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-success me-3">
                                <span class="avatar-text rounded-circle">K</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Facebook register completed 👍</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Hey John, Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Assumenda, esse.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star-fill text-warning"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-info me-3">
                                <span class="avatar-text rounded-circle">Z</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">Peter, me (3)</h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Assumenda cupiditate dolor earum est illo labore
                                    nesciunt officia provident quis tempora?
                                </div>
                                <i class="bi bi-paperclip"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" data-detail-url="{{ route('email-detail') }}">
                        <div class="flex-shrink-0">
                            <input class="form-check-input me-3" type="checkbox">
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <i class="add-star me-3 bi bi-star"></i>
                        </div>
                        <div class="d-none d-sm-block flex-shrink-0">
                            <figure class="avatar avatar-danger me-3">
                                <span class="avatar-text rounded-circle">S</span>
                            </figure>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h6 class="text-truncate mb-0">How To Set Intentions That Energize You
                                </h6>
                                <div class="ps-3 d-flex">
                                    <span class="text-nowrap text-muted">15 July</span>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-floating btn-sm" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Mark as Read</a>
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div class="text-truncate">Hey John, bah kivu decrete epanorthotic
                                    unnotched
                                    Argyroneta nonius veratrine preimaginary.
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
        <div class="col-lg-3">
            <div class="card sticky-top">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" href="#">
                                <span class="bi bi-envelope me-3"></span>
                                Inbox
                                <span class="badge bg-primary ms-auto">14</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="bi bi-check2 me-3"></span> Send
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="bi bi-pencil me-3"></span> Draft
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="bi bi-star me-3"></span> Starred
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                                <span class="bi bi-info-circle me-3"></span>
                                Spam
                                <span class="badge bg-primary ms-auto">14</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                                <span class="bi bi-trash me-3"></span> Trash
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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

    <!-- Quill -->
    <script src="{{ url("libs/quill/quill.js") }}"></script>

    <!-- App example codes -->
    <script src="{{ url("dist/js/examples/mail.js") }}"></script>

@endsection
