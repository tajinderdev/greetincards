@extends('layouts.buyer')

@section('page-title', 'My Wishlist')

@section('buyer-content')

    <h5 class="mb-4">My Wishlist</h5>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-hover">
                <a href="#">
                    <img src="{{ url('assets/images/products/1.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title mb-3">Headphone</h5>
                    </a>
                    <div class="d-flex gap-3 mb-3 align-items-center">
                        <del class="text-muted">$800</del>
                        <h4 class="mb-0">$499,90</h4>
                    </div>
                    <div class="d-flex gap-2 mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <span>(19)</span>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn ms-auto text-danger">
                            <i class="bi bi-heart-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-hover">
                <a href="#">
                    <img src="{{ url('assets/images/products/3.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title mb-3">Digital clock</h5>
                    </a>
                    <div class="d-flex gap-3 mb-3 align-items-center">
                        <h4 class="mb-0">$1.190,90</h4>
                    </div>
                    <div class="d-flex gap-2 mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-muted"></i>
                        <span>(10)</span>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn ms-auto text-danger">
                            <i class="bi bi-heart-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-hover">
                <a href="#">
                    <img src="{{ url('assets/images/products/5.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title mb-3">Glasses</h5>
                    </a>
                    <div class="d-flex gap-3 mb-3 align-items-center">
                        <h4 class="mb-0">$1.599,00</h4>
                    </div>
                    <p>&nbsp;</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn ms-auto text-danger">
                            <i class="bi bi-heart-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-hover">
                <a href="#">
                    <img src="{{ url('assets/images/products/6.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title mb-3">Cake</h5>
                    </a>
                    <div class="d-flex gap-3 mb-3 align-items-center">
                        <h4 class="mb-0">$10,00</h4>
                    </div>
                    <div class="d-flex gap-2 mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-muted"></i>
                        <i class="bi bi-star-fill text-muted"></i>
                        <i class="bi bi-star-fill text-muted"></i>
                        <i class="bi bi-star-fill text-muted"></i>
                        <span>(1)</span>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn ms-auto text-danger">
                            <i class="bi bi-heart-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
