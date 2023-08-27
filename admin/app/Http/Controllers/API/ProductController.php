<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * API For Product
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        if($id){
            $productss = new Product();
            $product = $product->getProduct($id);
            return response()->json(['product'=>$product], 200);
        }
        else
        {
            $productss = new Product();
            $products = $productss->getAllProduct();
            
            if($products){
                return response()->json(['products'=>$products], 200);
            }
            else
            {
                return response()->json(['message' => 'Product not found'], 404);
            }
        }
    }

    public function search(Request $request){
        $query = Product::query();

        // Apply category filter if provided
        if ($request->has('category')) {
            $category = $request->input('category');
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('name', $category);
            });
        }

        // Apply search query if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%$search%");
        }

        $products = $query->get();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'featured' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Product::create($input);
        return response()->json(['message' => 'Product created successfully.'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        if($products){
            return response()->json(['products'=>$products], 200);
        }else { 
            return response()->json(['message'=>'Product not found'], 404);
        }
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
            'slug' => 'required',
            'details' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'featured' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);
        $products = Product::find($id);
        if($products){
            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }else{
                unset($input['image']);
            }
            $products->update($input);
            return response()->json(['message' => 'Product update successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Product Not Found' ],404);
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
        $products = Product::find($id);
        if($products) {
            $products->delete();
            return response()->json(['message' => 'Product deleted successfully' ],200);
        }
        else
        {
            return response()->json(['message' => 'Product Not Found' ],404);
        }
    }
}
