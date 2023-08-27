<?php

namespace App\Http\Controllers;

use App\Models\Hbanner;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Hbanner::orderBy('id','DESC')->paginate(5);
        return view('banner.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = Hbanner::pluck('title','title')->all();
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_order' => 'required',
            'description' => 'required',
            'pages' => 'required',
        ]);

        $input = $request->all();
        // dd($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Hbanner::create($input);
    
        return redirect()->route('banner.index')
                        ->with('success','Banner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hbanner $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Hbanner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hbanner $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Hbanner $banner)
    {
        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hbanner $banner)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_order' => 'required',
            'description' => 'required',
            'pages' => 'required',
        ]);
  
        $input = $request->all();
        // dd($input);
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $banner->update($input);
    
        return redirect()->route('banner.index')
                        ->with('success','Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hbanner::find($id)->delete();
        return redirect()->route('banner.index')
                        ->with('success','Banner deleted successfully');
    }
}
