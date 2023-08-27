<div class="row">
    <div class="order-2 order-lg-1 col-lg-12 bd-content">
        <div class="card">
            <div class="card-body">
               
                    <h1>Invoice</h1>
                    <p>Order ID: {{ $order->id }}</p>
                    <p>Product : {{ $order->product_id }}</p>
                    <p>Address: {{ $order->shipping_address }}</p>
                    <p>Total Amount: {{ $order->total }}</p>
                  
            </div>
        </div>
    </div>
</div>