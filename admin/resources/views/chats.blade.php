@extends('layouts.app')

@section('page-title', 'Chats')

@section('header-action-button')
    <button class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> New Chat
    </button>
@endsection

@section('content')

    <div class="chat-block">

        <!-- begin::chat sidebar -->
        <div class="chat-sidebar">

            <!-- begin::chat sidebar search -->
            <div class="chat-sidebar-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">All Chats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">Calls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false">Contacts</a>
                    </li>
                </ul>
                <form class="my-4">
                    <input type="text" class="form-control" placeholder="Search">
                </form>
            </div>
            <!-- begin::chat sidebar search -->

            <!-- end::chat list -->
            <div class="chat-sidebar-content">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="chat-lists">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item active d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Cyril Ralston</p>
                                        <span class="text-muted">
                                            <i class="bi bi-image me-1"></i> Photo
                                        </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center unread-message">
                                    <div class="pe-3">
                                        <div class="avatar avatar-info avatar-state-danger">
                                            <span class="avatar-text rounded-circle">M</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Michelina Mackley</p>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center unread-message">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jessi Maylin</p>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                            <span class="avatar avatar-state-info">
                                                <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Hobie Kember</p>
                                        <span class="text-muted">
                                                <i class="bi bi-camera-video me-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-warning avatar-state-secondary">
                                            <span class="avatar-text rounded-circle">D</span>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-1">Dudley Laborde</p>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-success">
                                            <img src="{{ url('assets/images/user/man_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-1">Boony Gidden</p>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-danger">
                                            <img src="{{ url('assets/images/user/women_avatar3.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Vivianne Sothcott</p>
                                        <span class="text-muted">
                                                <i class="bi bi-image me-1"></i> Photo
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/images/user/man_avatar4.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Brandais Reisen</p>
                                        <span class="text-muted">
                                                <i class="bi bi-camera-video me-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1">Orelie Rockhall</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-down me-1 text-danger small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-camera-video text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-success">
                                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-1">Barbette Bolf</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow- 1">
                                    <p class="mb-1">Natale Janu</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-info avatar-state-secondary">
                                        <span class="avatar-text rounded-circle">T</span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-1">Terra Fehner</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-down me-1 text-danger small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-camera-video text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-info">
                                        <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1">Orelie Rockhall</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                         aria-labelledby="pills-contact-tab">
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-secondary avatar-state-danger">
                                            <span class="avatar-text rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Alene Ranyelld</p>
                                        <div class="text-muted">United Kingdom</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Chloette Fewster</p>
                                        <div class="text-muted">Estonia</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Stephanus Shergill</p>
                                        <div class="text-muted">Austria</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-info">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Elvyn Frowde</p>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-success avatar-state-secondary">
                                            <span class="avatar-text rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Alene Ranyelld</p>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ url('assets/images/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Chloette Fewster</p>
                                        <div class="text-muted">Spain</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-danger">
                                            <img src="{{ url('assets/images/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Stephanus Shergill</p>
                                        <div class="text-muted">Romania</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/images/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Elvyn Frowde</p>
                                        <div class="text-muted">New Zealand</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::chat list -->

        </div>
        <!-- end::chat sidebar -->

        <!-- begin::chat content -->
        <div class="chat-content empty-chat-wrapper">

            <div class="empty-chat">
                <div class="row mb-5">
                    <div class="col-md-4 m-auto">
                        <img class="img-fluid" src="{{ url('assets/svg/not-selected-chat.svg') }}" alt="image">
                    </div>
                </div>
                <p>Select chat to view messages</p>
            </div>

            <!-- begin::messages -->
            <div class="messages">
                <div class="message-item">
                    <div class="message-item-content">Hi!</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                    </div>
                    <span class="time small text-muted font-italic">Yesterday</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Hello! How are you today?</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content d-flex">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        <div>
                            <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">Download</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">View</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me message-media">
                    <img src="{{ url('assets/images/photo1.jpg') }}" alt="image">
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item message-item-divider">
                    <span>Today</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
            </div>
            <!-- end::messages -->

            <!-- begin::chat footer -->
            <div class="chat-footer">
                <form class="d-flex">
                    <div class="dropdown flex-shrink-0 me-3">
                        <button class="btn btn-primary btn-rounded" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Add Emoji</a>
                            <a href="#" class="dropdown-item">Attach files</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" autofocus placeholder="Write message...">
                    <button class="btn btn-primary btn-rounded flex-shrink-0 ms-3">Send</button>
                </form>
            </div>
            <!-- end::chat footer -->

        </div>
        <!-- begin::chat content -->

    </div>
    <!-- end::chat sidebar -->

@endsection

@section('script')
    <!-- Examples -->
    <script src="{{ url("dist/js/examples/chat.js") }}"></script>
@endsection
