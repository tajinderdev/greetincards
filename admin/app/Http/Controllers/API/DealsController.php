<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dvouchers;

class DealsController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $vouchers = Dvouchers::all();
       
        if (!empty($vouchers)) {
            return response()->json(['vouchers' => $vouchers], 200);
        }
        else 
        {
            return response()->json(['message' => 'No Vouchers found'], 404);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:dvouchers',
            'type' => 'required',
            'amount' => 'required|numeric',
            'discount_percentage' => 'required|numeric|between:0,100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $vouchers = Dvouchers::create($validatedData);
  
        if(!empty($vouchers)){
            $vouchers = $request->all();
            return response()->json([  'message' => 'Vouchers Created'], 200);
        }
        else{
            return response()->json([ 'message' => 'Vouchers Not Created'], 401);
    
        }
       
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
    
        $vouchers = Dvouchers::find($id);

        if($vouchers){
            $input = $request->all();
            $vouchers->update($input);
            return response()->json(['message' => 'Vouchers Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Vouchers Not Found' ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DealsVoucher $dvouchers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vouchers = Dvouchers::find($id);
        if(!empty($vouchers)) {
            $vouchers->delete();
            return response()->json(['message' => 'Vouchers Deleted Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Vouchers Not Found' ],404);
        }
    }
}
