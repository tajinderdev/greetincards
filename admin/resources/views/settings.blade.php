@extends('layouts.app')

@section('page-title', 'Settings')

@section('header-action-button')
    <button class="btn btn-success btn-icon">
        <i class="bi bi-check-circle"></i> Save
    </button>
@endsection

@section('content')

    <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-8">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="mb-4">
                        <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                            <figure class="me-4 flex-shrink-0">
                                <img width="100" class="rounded-pill"
                                     src="/image/{{ Auth::user()->avatar }}" alt="...">
                            </figure>
                            <div class="flex-fill">
                                <h5 class="mb-3">{{ Auth::user()->name }}</h5>
                                <button class="btn btn-primary me-2">Change Avatar</button>
                                <button class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="Remove Avatar">
                                    <i class="bi bi-trash me-0"></i>
                                </button>
                                <p class="small text-muted mt-3">For best results, use an image at least
                                    256px by 256px in either .jpg or .png format</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Basic Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <input type="text" class="form-control" disabled value="{{ Auth::user()->role == 1 ? 'Admin' : 'Customer' }}">                                        
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <input type="text" class="form-control" disabled value="{{ Auth::user()->status }}">                                        

                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Contact</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" value="+65195892151">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control" value="http://laborasyon.com/">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Languages</label>
                                        <input type="text" class="form-control" value="http://laborasyon.com/">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" value="A-65, Belvedere Streets">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Post Code</label>
                                        <input type="text" class="form-control" value="1868">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control" value="United States">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Social</h6>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" class="form-control"
                                                   value="https://twitter.com/roxana-roussell">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control"
                                                   value="https://www.facebook.com/roxana-roussell">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" class="form-control"
                                                   value="https://www.instagram.com/roxana-roussell/">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">GitHub</label>
                                            <input type="text" class="form-control"
                                                   value="https://github.com/roxana-roussell">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Change Password</h6>
                            <div class="mb-3">
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password Repeat</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notification-settings" role="tabpanel"
                     aria-labelledby="notification-settings-tab">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Notifications</h6>
                            <h6 class="mb-4">Activity Notifications</h6>
                            <div class="mb-5">
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs1">
                                        <label class="form-check-label" for="cs1">Someone assigns me to a task</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs2">
                                        <label class="form-check-label" for="cs2">Someone mentions me in a
                                            conversation</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs3">
                                        <label class="form-check-label" for="cs3">Someone adds me to a project</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs4">
                                        <label class="form-check-label" for="cs4">Activity on a project I am a member
                                            of</label>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-4">Service Notifications</h6>
                            <div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs5">
                                        <label class="form-check-label" for="cs5">Monthly newsletter</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs6">
                                        <label class="form-check-label" for="cs6">Major feature enhancements</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs7">
                                        <label class="form-check-label" for="cs7">Minor updates and bug fixes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="integrations" role="tabpanel" aria-labelledby="integrations-tab">
                    <div class="card widget">
                        <div class="card-header">
                            <h6 class="card-title">Integrations</h6>
                        </div>
                        <div class="card-body p-0 overflow-hidden">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                <img src="{{ url('assets/svg/logo-integration-slack.svg') }}"
                                                     alt="...">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Slack</h5>
                                                <small class="text-muted">Permissions: Read, Write, Comment</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-danger mt-3 mt-md-0">Disconnect</button>
                                    </div>
                                </div>
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                <img src="{{ url('assets/svg/logo-integration-drive.svg') }}"
                                                     alt="...">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Google Drive</h5>
                                                <small class="text-muted">Permissions: Read, Write</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-success mt-3 mt-md-0">Connect</button>
                                    </div>
                                </div>
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                <img src="{{ url('assets/svg/logo-integration-dropbox.svg') }}"
                                                     alt="...">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Dropbox</h5>
                                                <small class="text-muted">Permissions: Read, Write, Upload</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-danger mt-3 mt-md-0">Disconnect</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card sticky-top mb-4 mb-md-0">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="true">
                                <i class="bi bi-person me-2"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab"
                               aria-controls="password" aria-selected="false">
                                <i class="bi bi-lock me-2"></i> Password
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="notification-settings-tab" data-bs-toggle="tab" href="#notification-settings"
                               role="tab"
                               aria-controls="notification-settings" aria-selected="false">
                                <i class="bi bi-bell me-2"></i> Notifications
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="integrations-tab" data-bs-toggle="tab" href="#integrations" role="tab"
                               aria-controls="integrations" aria-selected="false">
                                <i class="bi bi-arrow-down-up me-2"></i> Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
