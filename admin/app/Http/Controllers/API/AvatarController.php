<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avatar;
use App\Models\User;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();

        return response()->json($avatars);
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
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);
        
        $user = auth()->user();
        $file = $request->file('file');
        $user_id = $request->input('user_id');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        
        $file->move(public_path('avatars'), $filename);
        
        $avatar = new Avatar([
            'filename' => $filename,
            'user_id' => $user_id,
        ]);
        
        $avatar->save(); // Save the Avatar model
        
        return response()->json($avatar, 201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avatar = Avatar::findOrFail($id);

        return response()->json($avatar);
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
        $avatar = Avatar::findOrFail($id);

        // print_r($avatar);
    
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('avatars'), $filename);
    
        $avatar->filename = $filename;
        $avatar->save();
    
        return response()->json($avatar);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Avatar::findOrFail($id);
        $avatar->delete();
        return response()->json(['success' => 'Avatar deleted successfully.'], 204);
    }
}
