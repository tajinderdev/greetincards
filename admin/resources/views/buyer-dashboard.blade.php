@extends('layouts.buyer')

@section('page-title', 'Buyer Dashboard')

@section('buyer-content')

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card bg-cyan text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-box-seam display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">45</h4>
                        <span>My Orders</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-purple text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-heart display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">5</h4>
                        <span>My Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-teal text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-wallet2 display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">$9,000</h4>
                        <span>My Profit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Income by Month</h6>
            <div id="profit"></div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Recent Activities</h6>
            <ul class="list-group list-group-flush">
                <li class="px-0 list-group-item d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-warning me-3">
                            <span class="avatar-text fw-bold rounded-circle">
                                <i class="bi bi-file-text"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 d-md-flex">
                        <div class="flex-fill mb-1 mb-lg-0">
                            <p class="mb-1">
                                Your billing information is not active.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                        </div>
                        <a href="#">Show</a>
                    </div>
                </li>
                <li class="px-0 list-group-item d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-warning me-3">
                            <span class="avatar-text rounded-circle">
                                <i class="bi bi-person"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 d-md-flex">
                        <div class="flex-fill mb-1 mb-lg-0">
                            <p class="mb-1">
                                Your subscription has expired.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                        </div>
                        <a href="#">Show</a>
                    </div>
                </li>
                <li class="px-0 list-group-item d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-warning me-3">
                            <span class="avatar-text rounded-circle">
                                <i class="bi bi-hdd"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 d-md-flex">
                        <div class="flex-fill mb-1 mb-lg-0">
                            <p class="mb-1">
                                Your storage space is running low
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Last Week
                            </span>
                        </div>
                        <a href="#">Show</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
