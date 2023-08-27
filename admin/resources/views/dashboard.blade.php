@extends('layouts.app')

@section('page-title', 'Overview')

@section('head')
    <!-- Slick -->
    <link rel="stylesheet" href="{{ url("libs/slick/slick.css") }}" type="text/css">
@endsection

@section('header-action-button')
    <a class="btn btn-primary btn-icon"  href="{{ route('products.create') }}">
        <i class="bi bi-plus-circle"></i>  Add Product</a>
    </a>
@endsection

@section('content')

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-12 col-md-12">
            <div class="card widget">
                <div class="card-header">
                    <h5 class="card-title">Activity Overview</h5>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Ordered</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\OrderController')->getOrderCount() }} Orders</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-truck text-secondary"></i>
                                </div>
                                <h5 class="my-3">Completed</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\OrderController')->getDeliveredCount() }} Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-secondary" role="progressbar" 
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-bar-chart text-info"></i>
                                </div>
                                <h5 class="my-3">Sales</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\OrderController')->getTotalSales() }} ₹ Sales</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" 
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-person text-warning"></i>
                                </div>
                                <h5 class="my-3">Users</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\UserController')->getUserCount() }} users</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-person text-warning"></i>
                                </div>
                                <h5 class="my-3">Customer</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\UserController')->getCustomerCount() }} Customers</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Products</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\ProductController')->getProductCount() }} Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Stores</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\StoreController')->getStoresCount() }} Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Shops</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\ShopsController')->getShopsCount() }} Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Deals Vouchers</h5>
                                <div class="text-muted">{{ app('App\Http\Controllers\DealsVouchersController')->getVouhersCount() }} Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">Arrived</h5>
                                <div class="text-muted">34 Upgraded Boxed</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
     
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">Customer Rating</h6>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="display-6">3.0</div>
                        <div class="d-flex justify-content-center gap-3 my-3">
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <span>(318)</span>
                        </div>
                    </div>
                    <div class="text-muted d-flex align-items-center justify-content-center">
                        <span class="text-success me-3 d-block">
                            <i class="bi bi-arrow-up me-1 small"></i>+35
                        </span> Point from last month
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6 m-auto">
                            <div id="customer-rating"></div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-download"></i> Download Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 bg-purple">
                <div class="card-body text-center">
                    <div class="text-white-50">
                        <div class="bi bi-box-seam display-6 mb-3"></div>
                        <div class="display-8 mb-2">Products Sold</div>
                        <h5>{{ app('App\Http\Controllers\OrderController')->getTotalSales() }} Sold</h5>
                    </div>
                    <div id="products-sold"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card widget h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Your Top Countries
                        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip"
                           title="Sales performance revenue based by country"></a>
                    </h5>
                    <a href="#">View All</a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3"
                                     src="{{ url('assets/flags/united-states-of-america.svg') }}" alt="...">
                                <span>United States</span>
                            </div>
                            <span>$1.671,10</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="{{ url('assets/flags/venezuela.svg') }}" alt="...">
                                <span>Venezuela</span>
                            </div>
                            <span>$1.064,75</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="{{ url('assets/flags/salvador.svg') }}" alt="...">
                                <span>Salvador</span>
                            </div>
                            <span>$1.055,98</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="{{ url('assets/flags/russia.svg') }}" alt="...">
                                <span>Russia</span>
                            </div>
                            <span>$1.042,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<!-- Apex chart -->
<script src="{{ url("libs/charts/apex/apexcharts.min.js") }}"></script>

<!-- Slick -->
<script src="{{ url("libs/slick/slick.min.js") }}"></script>

<!-- Examples -->
<script src="{{ url("dist/js/examples/dashboard.js") }}"></script>


   <script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar',
                height: 400
            },
            series: [{
                name: 'Products Sold',
                data: [10, 20, 30, 40, 50] // Replace with your actual data
            }],
            xaxis: {
                categories: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'] // Replace with your actual categories
            }
        };

        var chart = new ApexCharts(document.querySelector('#sold'), options);
        chart.render();
    });

</script>
@endsection
