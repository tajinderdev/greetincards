<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $reviews = $product->reviews;
        return response()->json($reviews);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'customer_name' => 'required',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = $product->reviews()->create([
            'customer_name' => $request->customer_name,
            'content' => $request->content,
            'rating' => $request->rating,
        ]);

        return response()->json($review, 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, Review $review)
    {
        $request->validate([
            'customer_name' => 'required',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review->update([
            'customer_name' => $request->customer_name,
            'content' => $request->content,
            'rating' => $request->rating,
        ]);

        return response()->json($review);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Review $review)
    {
        $review->delete();
        return response()->json(null, 204);
    }
}
