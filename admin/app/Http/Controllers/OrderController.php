<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf as PDF;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::orderBy('id','DESC')->paginate(5);
        return view('orders.index',compact('orders'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $user = User::all();
        $product = Product::all();
        return view('orders.details', compact('order','user', 'product'));

    }


    public function generateInvoicePdf($id)
{
    $order = Order::findOrFail($id);
    $pdf = PDF::loadView('orders.invoice', compact('order'));
    return $pdf->download('invoice.pdf');
}

    public function getOrderCount()
    {
        return Order::count();
    }

    public function getDeliveredCount()
    {
        return Order::where('status', 'completed')->count();
    }

    public function getTotalSales()
    {
    //     $total = DB::table('orders')->sum('total');
    //     $totalSales = '₹' . number_format($total, 2);
    //     return view('dashboard', ['totalSales' => $totalSales]);
        return Order::sum('total');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('orders.index')
                        ->with('success','Order Deleted Successfully');
    }
}
