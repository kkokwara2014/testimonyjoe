<?php

namespace App\Http\Controllers;

use App\Albumcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $albumcategories=Albumcategory::latest()->get();
        return view('admin.category.index', compact('user','albumcategories'));
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
        $this->validate($request,[
            'name'=>'required'
        ]);

        $albumcat=new Albumcategory;
        $albumcat->name=$request->name;
        $albumcat->save();

        return redirect()->route('albumcategory.index')->with('success','New Album Category created Successfully!');
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
        $categories = Albumcategory::where('id', $id)->first();
        return view('admin.category.edit', array('user' => Auth::user()), compact('categories'));
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
        $this->validate($request,[
            'name'=>'required'
        ]);

        $albumcat=Albumcategory::find($id);
        $albumcat->name=$request->name;
        $albumcat->save();

        return redirect()->route('albumcategory.index')->with('success','New Album Category updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Albumcategory::where('id', $id)->delete();

        return redirect()->back();
    }
}
