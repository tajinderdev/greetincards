<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $category = new Category();

        if ($id) {
            $categories = $category->getCategory($id);
            return response()->json(['categories' => $categories], 200);
        }

        $categories = $category->getAllCategory();
        if (!empty($categories)) {
            return response()->json(['categories' => $categories], 200);
        }

        return response()->json(['message' => 'No categories found'], 404);
    }

    // public function index($id=null)
    // {
    //     if($id){
    //         $category = new Category();
    //         $categories = $category->getCategory($id);
    //         return response()->json(['categories' => $categories], 200);
    //     }
    //     else
    //     {
    //         $category = new Category();
    //         $categories = $category->getAllCategory();
    //         if(!empty($categories)){
    //             return response()->json(['categories'=>$categories], 200);
    //         }
    //         else
    //         {
    //             return response()->json(['message' => 'categories not found'], 404);
    //         }
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        if($category){
            return response()->json([ 'category' => $category], 200);

        }
        else{
            return response()->json([ 'message' => 'error'], 401);

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
            'slug' => 'required',
        ]);
        $categories = Category::find($id);

        if($categories){
            $input = $request->all();
            $categories->update($input);
            return response()->json(['message' => 'Category Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Category Not Found' ],404);
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
        $categories = Category::find($id);
        if(!empty($categories)) {
            $categories->delete();
            return response()->json(['message' => 'Category deleted successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Category Not Found' ],404);
        }
    }
}
