<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        return response()->json(['subcategories' => $subcategories]);
    }

    public function show($id)
    {
        $subcategory = Subcategory::find($id);
        return response()->json(['subcategory' => $subcategory]);
    }

    public function store(Request $request)
    {
        $subcategory = new Subcategory;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        return response()->json(['subcategory' => $subcategory],200);
    }

    public function update(Request $request, $id)
    {
       $subcategories = Subcategory::find($id);

        if(!empty($subcategories)){
           
            $subcategories->name = $request->name;
            $subcategories->description = $request->description;
            $subcategories->category_id = $request->category_id;
          
            $subcategories->update();
            return response()->json(['message' => 'Subcategory Updated Successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Subategory Not Found' ],404);
        }
    }

    // public function update(Request $request, $id)
    // {
    //     $subcategory = Subcategory::find($id);
    //     $subcategory->name = $request->name;
    //     $subcategory->description = $request->description;
    //     $subcategory->category_id = $request->category_id;
    //     $subcategory->update();
    //     return response()->json(['subcategory' => $subcategory]);
    // }

    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return response()->json(['message' => 'Subcategory deleted']);
    }
}
