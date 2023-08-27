@extends('layouts.app')

@section('page-title', 'Order Detail')

@section('content')

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-5 d-flex align-items-center justify-content-between">
                        <span>Order No : <a href="#">{{ $order->order_number }}</a></span>
                        
                        <span class="badge bg-success">{{ $order->status }}</span>
                        
                    </div>
                    <div class="row mb-5 g-4">
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Order Created at</p>
                            {{ $order->created_at }}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Name</p>
                            {{ $order->status }}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Email</p>
                            sayres@sayres.com
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Contact No</p>
                            767-251-8637
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Delivery Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>{{ $order->shipping_address }}</div>
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
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Billing Address</h5>
                                    </div>
                                    <div>{{ $order->billing_address }}</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card widget">
                <h5 class="card-header">Order Items</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                {{-- <th>Quantity</th> --}}
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($product as $prod)
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="/image/{{ $prod->image }}" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>{{ $prod->name }}</td>
                                <td>₹1.190,90</td>
                                <td>₹1.190,90</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">₹{{ $order->subtotal }}</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4">₹{{ $order->shipping_cost > 500 ? 'Free Shipping' : $order->shipping_cost;}}</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(18%) :</div>
                        <div class="col-4">₹{{ $order->tax }}</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong>₹{{ $order->total }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Invoice</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Invoice No :</div>
                        <div class="col-6">
                            <a href="#">{{ $order->order_number}}</a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Seller GST :</div>
                        <div class="col-6">12HY87072641Z0</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Purchase GST :</div>
                        <div class="col-6">22HG9838964Z1</div>
                    </div>
                    <div class="text-center mt-4">
                        <a class="btn btn-outline-primary" href="{{ route('orders.invoice', $order->id) }}">Download Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Examples -->
    <script src="{{ url("dist/js/examples/orders.js") }}"></script>
@endsection
