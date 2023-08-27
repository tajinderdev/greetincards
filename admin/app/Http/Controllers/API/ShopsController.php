<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shops;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(){
    //     $shop = Shops::all();
    //     if (!empty($shop)) {
    //         return response()->json(['shops' => $shop], 200);
    //     }
    //     else 
    //     {
    //         return response()->json(['message' => 'No Shops found'], 404);
    //     }
    // }

    public function index($id = null)
    {
        $shop = new Shops();

        if ($id) {
            $shops = $shop->getShop($id);
            return response()->json(['users' => $shops], 200);
        }

        $shops = $shop->getAllShops();
        if (!empty($shops)) {
            return response()->json(['users' => $shops], 200);
        }

        return response()->json(['message' => 'No users found'], 404);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company_name' => 'required|string',
            'address' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string|min:11',
            'post_code' => 'required',
        ]);

        // Associate the shop with the logged-in user   
        $user = auth()->user();

        // Check if a store with the given email already exists for the user
        if ($user->shops()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'A Shop already created for the current user.'], 400);
        }

        $shop = $user->shops()->create($validatedData);

        if ($shop) {
            return response()->json(['shop' => $shop], 200);
            return response()->json(['message' => 'Shop Created Successfully'], 200);
        } else {
            return response()->json(['message' => 'Error creating the shop'], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required|numeric|min:11',
            'post_code' => 'required|numeric|min:7',
        ]);

        $shop = Shops::find($id);

        if($shop){
            $input = $request->all();
            $shop->update($input);
            return response()->json(['message' => 'Shop Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Shop Not Found' ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shops::find($id);
        if(!empty($shop)) {
            $shop->delete();
            return response()->json(['message' => 'Shop deleted successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Shop Not Found' ],404);
        }
    }
}
