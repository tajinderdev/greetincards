@extends('layouts.app')

@section('page-title', 'Pricing Table')

@section('content')

    <div class="text-center my-5">
        <div class="row mb-5">
            <div class="col-md-6 m-auto">
                <p class="lead mb-0">Choose one of the plans that suits you. You will get a better service with the upgraded package.</p>
            </div>
        </div>

        <div class="btn-group mb-3" role="group">
            <input type="radio" class="btn-check" name="priceChangeSwitch" id="option1" value="1" checked>
            <label class="btn btn-lg btn-outline-primary" for="option1">Monthly</label>

            <input type="radio" class="btn-check" name="priceChangeSwitch" id="option2" value="2">
            <label class="btn btn-lg btn-outline-primary" for="option2">Yearly</label>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <span class="display-6 me-3">Free</span>
                        <span class="text-muted">1 month free</span>
                    </div>
                    <div class="mb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Video chat</del>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Voice chat
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                To be able to invite users
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Unlimited file exchange</del>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Creating a group</del>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Chat without limit
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Team work</del>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Start Trial</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-selected">
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <span class="display-6 me-3" data-price1-text="">$99</span>
                        <span class="text-muted" data-price1-label="">Monthly</span>
                    </div>
                    <div class="mb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Video chat</del>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Voice chat
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                To be able to invite users
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-x text-danger me-2"></i>
                                <del class="text-danger">Unlimited file exchange</del>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Creating a group
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Chat without limit
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Team work
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <span class="display-6 me-3" data-price2-text="">$199</span>
                        <span class="text-muted" data-price2-label="">Monthly</span>
                    </div>
                    <div class="mb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Video chat
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Voice chat
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                To be able to invite users
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Unlimited file exchange
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Creating a group
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Chat without limit
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check2 me-2"></i>
                                Team work
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Examples -->
    <script src="{{ url("dist/js/examples/pricing-table.js") }}"></script>
@endsection
