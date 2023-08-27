<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;


class StoreController extends Controller
{
    public function index($id = null)
    {
        $store = new Store();

        if ($id) {
            $stores = $store->getStore($id);
            return response()->json(['Store' => $stores], 200);
        }

        $stores = $store->getAllStores();
        if (!empty($stores)) {
            return response()->json(['Stores' => $stores], 200);
        }

        return response()->json(['message' => 'No Store Found'], 404);
    }

    public function store(Request $request)
    {
        // Check if the user is authenticated and has a valid token
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthorized. Please log in to create a store.'], 401);
        }

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company_name' => 'required|string',
            'address' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string|min:11',
            'post_code' => 'required',
        ]);
        
        $user = auth()->user();

        // Check if a store with the given email already exists for the user
        if ($user->stores()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'A store already created for the current user.'], 400);
        }

        // Associate the store with the logged-in user
        $store = $user->stores()->create($validatedData);

        if ($store) {
            return response()->json(['store' => $store], 200);
            return response()->json(['message' => 'Store Created Successfully'], 200);
        } else {
            return response()->json(['message' => 'Error creating the store'], 500);
        }
    }

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

        $store = Store::find($id);

        if($store){
            $input = $request->all();
            $store->update($input);
            return response()->json(['message' => 'Store Update Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Store Not Found' ],404);
        }
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        if(!empty($store)) {
            $store->delete();
            return response()->json(['message' => 'Store deleted successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Store Not Found' ],404);
        }
    }
}
