<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($id = null)
    {
        $user = new User();

        if ($id) {
            $users = $user->getUser($id);
            return response()->json(['users' => $users], 200);
        }

        $users = $user->getAllUsers();
        if (!empty($users)) {
            return response()->json(['users' => $users], 200);
        }

        return response()->json(['message' => 'No users found'], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'name' => 'string',
            'email' => 'string|email',
            'password' => 'string',
            'status' => 'string',
            'avatar' => 'string',
            'settings' => 'string',
            'phone' => 'required',
            'dob' => 'date',
            'address' => 'string',
            'company_name' => 'string',
            'country' => 'string',
            'country_code' => 'string',
            'currency_code' => 'string',
            'post_code' => 'string',
            'company_name' => 'string',
            'role' => 'string', // Adjusted validation rule for 'roles' field
            'role_name' => 'string', // Adjusted validation rule for 'role Name' field
        ]);

        $user = User::find($id);

        if ($user) 
        {
            try {
                $role = Role::where('name', $request->role)->firstOrFail();
            } catch (ModelNotFoundException $exception) {
                return response()->json(['error' => 'Invalid role.'], 422);
            }
    
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status,
                'avatar' => $request->avatar,
                'settings' => $request->settings,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'address' => $request->address,
                'country' => $request->country,
                'country_code' => $request->country_code,
                'currency_code' => $request->currency_code,
                'post_code' => $request->post_code,
                'company_name' => $request->company_name,
                'role' => $role->id, // Assign the role based on the retrieved role
                'role_name' => $role->name, // Assign the role based on the retrieved role
            ];

          

            // Update password if provided
            if ($request->has('password')) 
            {
                $data['password'] = bcrypt($request->password);
            }

            $user->update($data);

            return response()->json(['message' => 'User Updated Successfully'], 200);
        } 
        else 
        {
            return response()->json(['message' => 'User Not Found'], 404);
        }
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
        ]);

        $user = User::find($id);
        
        if ($user) 
        {
            $data = [
                'password' => $request->password,
                'new_password' => $request->new_password
            ];

        
            // Update password if provided
            if ($request->has('password')) 
            {
                $data['password'] = bcrypt($request->password);
            }

            $user->update($data);

            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['error' => 'Current password is incorrect'], 401);
            }
    
            $user->password = Hash::make($request->new_password);
            $user->save();
        }
        else
        {
            return response()->json(['message' => 'Password changed successfully'], 200);
        }
    }
    
}
