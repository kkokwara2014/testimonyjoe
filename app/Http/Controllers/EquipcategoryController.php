<?php

namespace App\Http\Controllers;

use App\Equipcategory;
use App\Http\Requests\EquipcategoryStoreRequest;
use App\Http\Requests\EquipcategoryUpdateRequest;
use Illuminate\Support\Facades\Auth;

class EquipcategoryController extends Controller
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
        $equipcategories = Equipcategory::orderBy('name','asc')->get();
        return view('admin.equipcategory.index', array('user' => Auth::user()), compact('equipcategories'));
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
    public function store(EquipcategoryStoreRequest $request)
    {
        $equipcat=new Equipcategory;
        $equipcat->name=$request->name;
        $equipcat->save();

        return redirect()->route('equipcategory.index')->with('success','New Equipment Category added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipcategory  $equipcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Equipcategory $equipcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipcategory  $equipcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipcategory $equipcategory)
    {
        $equipcat=Equipcategory::where('id',$equipcategory->id)->first();

        return view('admin.equipcategory.edit',array('user' => Auth::user()),compact('equipcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipcategory  $equipcategory
     * @return \Illuminate\Http\Response
     */
    public function update(EquipcategoryUpdateRequest $request, Equipcategory $equipcategory)
    {
        $equipcat=Equipcategory::find($equipcategory->id);
        $equipcat->name=$request->name;
        $equipcat->save();

        return redirect()->route('equipcategory.index')->with('success','Equipment Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipcategory  $equipcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipcategory $equipcategory)
    {
        $equipcategory->delete();

        return redirect()->back()->with('deleted','Equipment Category deleted successfully!');
    }
}
