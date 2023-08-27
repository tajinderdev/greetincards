@extends('layouts.buyer')

@section('page-title', 'My Addresses')

@section('buyer-content')

    <div class="row g-4 mb-4">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Home</h5>
                        <a href="#">Edit</a>
                    </div>
                    <div>Josephin Villa</div>
                    <div>81 Fulton Park, Brazil/Pedro Leopoldo</div>
                    <div>
                        <i class="bi bi-telephone me-2"></i> 408-963-7769
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Workplace</h5>
                        <a href="#">Edit</a>
                    </div>
                    <div>Josephin Villa</div>
                    <div>29543 South Plaza, Canada/Sydney Mines</div>
                    <div>
                        <i class="bi bi-telephone me-2"></i> 484-948-8535
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
        <a class="btn btn-outline-primary btn-icon" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-plus-circle"></i> Add New Address
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <h6 class="card-title mb-4">Add New Address</h6>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Delivery Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">State</label>
                        <select id="billingState" class="form-select">
                            <option selected="">Select</option>
                            <option value="victoria">Victoria</option>
                            <option value="alaska">Alaska</option>
                            <option value="california">California</option>
                            <option value="texas">Texas</option>
                            <option value="queensland">Queensland</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection
