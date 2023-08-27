<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\Country;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stores = Store::orderBy('id','DESC')->paginate(5);
        return view('stores.index',compact('stores'))     
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for Storeeating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('stores.create', compact('countries'));
     
    }

    /**
     * Store a newly Storeeated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:stores,email',
            'company_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required|numeric|min:11',
            'post_code' => 'required|numeric|min:7',
        ]);

        $input = $request->all();
        Store::create($input);
        return redirect()->route('stores.index')->with('success','Stores Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view('stores.edit', compact('store'));
    }

    public function getStoresCount()
    {
        return Store::count();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
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
        $store = Store::find($id);
        $store->update($input);
    
        return redirect()->route('stores.index')
                        ->with('success','Stores Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::find($id)->delete();
        return redirect()->route('stores.index')
                        ->with('success','Stores Deleted Successfully');
    }
}
