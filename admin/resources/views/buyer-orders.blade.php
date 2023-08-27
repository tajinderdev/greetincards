@extends('layouts.buyer')

@section('page-title', 'My Orders')

@section('buyer-content')

    <div class="card widget mb-4">
        <h5 class="card-header">My Orders</h5>
        <div class="card-body">
            <div class="d-flex gap-4 align-items-center" data-bs-toggle="collapse"
                 aria-expanded="false" data-bs-target="#myOrders26598" role="button">
                <div><strong>Date</strong>: 2 May 2021</div>
                <div>2 Items</div>
                <div><strong>Total</strong>: $2.882,10</div>
                <div class="bi bi-chevron-down ms-auto"></div>
            </div>
            <div class="collapse show mt-4" id="myOrders26598">
                <hr class="mb-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/2.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Shoe</td>
                            <td>1</td>
                            <td>$500,30</td>
                            <td>$500,30</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/3.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Digital clock</td>
                            <td>2</td>
                            <td>$1.190,90</td>
                            <td>$2.381,80</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>Order number: <a href="#">#26598</a></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex gap-4 align-items-center" data-bs-toggle="collapse"
                 aria-expanded="false" data-bs-target="#myOrders53211" role="button">
                <div><strong>Date</strong>: 10 May 2021</div>
                <div>1 Item</div>
                <div><strong>Total</strong>: $500,30</div>
                <div class="bi bi-chevron-down ms-auto"></div>
            </div>
            <div class="collapse" id="myOrders53211">
                <hr class="mb-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/6.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Shoe</td>
                            <td>1</td>
                            <td>$500,30</td>
                            <td>$500,30</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>Order number: <a href="#">#53211</a></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex gap-4 align-items-center" data-bs-toggle="collapse"
                 aria-expanded="false" data-bs-target="#myOrders53281" role="button">
                <div><strong>Date</strong>: 20 Apr 2021</div>
                <div>3 Items</div>
                <div><strong>Total</strong>: $1.286,50</div>
                <div class="bi bi-chevron-down ms-auto"></div>
            </div>
            <div class="collapse" id="myOrders53281">
                <hr class="mb-0">
                <div class="table-responsive">
                    <table class="table table-custom">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/8.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Headphone</td>
                            <td>1</td>
                            <td>$870,50</td>
                            <td>$870,50</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/9.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Perfume</td>
                            <td>2</td>
                            <td>$170,50</td>
                            <td>$341,00</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{ url('assets/images/products/10.jpg') }}" class="rounded"
                                         width="40" alt="...">
                                </a>
                            </td>
                            <td>Cookie</td>
                            <td>5</td>
                            <td>$15,00</td>
                            <td>$75,00</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown"
                                           class="btn btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>Order number: <a href="#">#53281</a></div>
            </div>
        </div>
    </div>

@endsection
