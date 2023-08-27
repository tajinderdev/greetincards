<?php

namespace App\Http\Controllers;

use App\Models\Dvouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DealsVouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $vouchers = Dvouchers::orderBy('id','DESC')->paginate(5);
        return view('vouchers.index',compact('vouchers'))     
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $voucher = Dvouchers::orderBy('id','DESC')->paginate(5);
        return view('vouchers.create',compact('voucher'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:dvouchers',
            'type' => 'required',
            'amount' => 'required|numeric',
            'discount_percentage' => 'required|numeric|between:0,100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $input = $request->all();
        // echo "<pre>";
        // print_r($input);
        // die;
        Dvouchers::create($input);
        return redirect()->route('vouchers.index')
                        ->with('success','Vocuher Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dvouchers $dvouchers
     * @return \Illuminate\Http\Response
     */
    public function show(Dvouchers $dvouchers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DealsVoucher $dvouchers
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvouchers $voucher)
    {

        return view('vouchers.edit', compact('voucher'));
    }

    public function getVouhersCount()
    {
        return Dvouchers::count();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dvoucher $dvouchers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'type' => 'required',
            'amount' => 'required|numeric',
            'discount_percentage' => 'required|numeric|between:0,100',
            'is_active' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
    
        $input = $request->all();
        $vouchers = Dvouchers::find($id);
        $vouchers->update($input);
    
        return redirect()->route('vouchers.index')
                        ->with('success','Voucher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DealsVoucher $dvouchers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dvouchers::find($id)->delete();
        return redirect()->route('vouchers.index')
                        ->with('success','Vocher deleted successfully');
    }
}
