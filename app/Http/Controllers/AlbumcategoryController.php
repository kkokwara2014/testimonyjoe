<?php

namespace App\Http\Controllers;

use App\Albumcategory;
use App\Http\Requests\AlbumcategoryStoreRequest;
use App\Http\Requests\AlbumcategoryUpdateRequest;
use Illuminate\Support\Facades\Auth;

class AlbumcategoryController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumcategories = Albumcategory::orderBy('name','asc')->get();
        return view('admin.category.index', array('user' => Auth::user()), compact('albumcategories'));
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
    public function store(AlbumcategoryStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Albumcategory  $albumcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Albumcategory $albumcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Albumcategory  $albumcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Albumcategory $albumcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Albumcategory  $albumcategory
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumcategoryUpdateRequest $request, Albumcategory $albumcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Albumcategory  $albumcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Albumcategory $albumcategory)
    {
        //
    }
}
