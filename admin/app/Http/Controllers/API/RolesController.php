<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $role = new Role();
       
        if ($id) {
            $roles = $role->getRole($id);
            return response()->json(['roles' => $roles], 200);
        }

        $roles = $role->all();
        if (!empty($roles)) {
            return response()->json(['roles' => $roles], 200);
        }

        return response()->json(['message' => 'No roles found'], 404);
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
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name,
        ]);
        if($role){
            return response()->json([ 'roles' => $role], 200);

        }
        else{
            return response()->json([ 'message' => 'error'], 401);

        }
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
            'name' => 'required',
            'guard_name' => 'required',
        ]);
        $roles = Role::find($id);

        if($roles){
            $input = $request->all();
            $roles->update($input);
            return response()->json(['message' => 'Role Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Role Not Found' ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        if(!empty($roles)) {
            $roles->delete();
            return response()->json(['message' => 'Role deleted successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Role Not Found' ],404);
        }
    }
}
