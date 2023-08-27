<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Designer;

class DesignerController extends Controller
{


    public function index($id = null)
    {
        $user = new User();

        if ($id) {
            $users = $user->getDesigner($id);
            return response()->json(['Designer' => $users], 200);
        }

        $users = User::where('role', 4)->get();
        if (!empty($users)) {
            return response()->json(['Designers' => $users], 200);
        }

        return response()->json(['message' => 'No Designers Found'], 404);
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
        'name' => 'required|string',
        'dob' => 'required|date',
        'email' => 'required|email',
        'address' => 'required|string',
        'country' => 'required|string',
        'phone' => 'required|numeric|min:11',
        'post_code' => 'required|numeric|min:7',
      ]);

       // Associate the shop with the logged-in user   
       $user = auth()->user();

       // Check if a store with the given email already exists for the user
       if ($user->designers()->where('email', $request->email)->exists()) {
           return response()->json(['error' => 'A Designer already created for the current user.'], 400);
       }
       $designer = $user->designers()->create($validatedData);

  
      if(!empty($designer)){
          $designers = $request->all();
          return response()->json([ 'Designers' => $designer], 200);
      }
      else{
          return response()->json([ 'message' => 'Designer Not Created'], 401);
  
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
            'name' => 'required|string',
            'email' => 'required|email',
            'dob' => 'required|date',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|string',
            'country' => 'required|string',
            'post_code' => 'required|numeric|min:7',
            'role' => 'required|numeric',
        ]);

        $users = User::find($id);

        if($users){
            $input = $request->all();
            $users->update($input);
            return response()->json(['message' => 'Designer Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Designer Not Found' ],404);
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
        $users = User::find($id);
        if(!empty($users)) {
            $users->delete();
            return response()->json(['message' => 'Designer Deleted Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Designer Not Found' ],404);
        }
    }
}
