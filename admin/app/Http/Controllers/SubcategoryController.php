<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $subcategories = Subcategory::with('category')->orderBy('id','DESC')->paginate(5);
        return view('subcategories.index',compact('subcategories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for subcategoryeating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly subcategoryeated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, subcategory $subcategory)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
        ]);

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->description = $request->description;
        $subcategory->save();
     

        return redirect()->route('subcategories.index')
                        ->with('success','Subcategory Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show( category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
         $categories = Category::all();

        return view('subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'slug' => 'required',
        ]);

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->description = $request->slug;
        $subcategory->update();

        return redirect()->route('subcategories.index')->with('success', 'Subcategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategories.index')->with('success', 'Subcategory deleted successfully.');
    }

    public function getSubcategories($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();

        return response()->json($subcategories);
    }

}
