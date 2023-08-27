<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;
use Spatie\Permission\Commands\Show;
use App\Models\Country;


class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = Shops::orderBy('id','DESC')->paginate(5);
        return view('shops.index',compact('shops'))     
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('shops.create', compact('countries'));
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
            'name' => 'required',
            'email' => 'required|email|unique:shops,email',
            'company_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required|numeric|min:11',
            'post_code' => 'required|numeric|min:7',
        ]);

        $input = $request->all();
        Shops::create($input);
        return redirect()->route('shops.index')->with('success','Shops Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shops $shop)
    {
        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required|numeric|min:11',
            'post_code' => 'required|numeric|min:7',
        ]);
    
        $input = $request->all();
        $shops = Shops::find($id);
        $shops->update($input);
    
        return redirect()->route('shops.index')
                        ->with('success','Shops Updated Successfully');
    }

    public function getShopsCount()
    {
        return Shops::count();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shops::find($id)->delete();
        return redirect()->route('shops.index')
                        ->with('success','Shops Deleted Successfully');
    }
}
