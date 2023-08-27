<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Shops;
use App\Models\Store;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    // Register 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|string',
            'role_name' => 'nullable|string',
        ]);

        try {
            $role = Role::where('name', $request->role)->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Invalid role.'], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $role->id, // Assign the role based on the retrieved role
            'role_name' => $role->name, // Assign the role based on the retrieved role
        ]);
        $user->role_name = $role->name; // Set the 'role_name' property

        $token = $user->createToken('Token')->accessToken;
        return response()->json(['token' => $token, 'user' => $user], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = auth()->user();
            $role = Role::find($user->role);
            $shops = $user->shops()->get();
            $stores = $user->stores()->get();

            // Create arrays to store the shop and store IDs
            $shopIdsArray = $shops->pluck('id')->toArray();
            $shopIds = implode(',', $shopIdsArray);
            
            // Get all store IDs as a comma-separated string
            $storeIdsArray = $stores->pluck('id')->toArray();
            $storeIds = implode(',', $storeIdsArray);

            $response = [
                'token' => $user->createToken('Token')->accessToken,
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'status' => $user->status,
                'avatar' => $user->avatar,
                'settings' => $user->settings,
                'phone' => $user->phone,
                'dob' => $user->dob,
                'address' => $user->address,
                'country' => $user->country,
                'country_code' => $user->country_code,
                'currency_code' => $user->currency_code,
                'post_code' => $user->post_code,
                'company_name' => $user->company_name,
                'role_id' => $user->role,
                'role_name' => $role->name,
                'shops' => $shopIds, //Use the array of shop IDs
                'stores' => $storeIds, // Use the array of store IDs
            ];

            return response()->json($response, 200);
        } else {
            // Check if the email is incorrect
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json(['error' => 'Email Not found, Please check'], 401);
            }

            // Email exists, so the password must be incorrect
            return response()->json(['error' => 'Invalid Password, Please enter correct password'], 401);
        }
    }


    public function userData()
    {
        $user = auth()->user();
        return response()->json(['User' => $user], 200);
    }
}
