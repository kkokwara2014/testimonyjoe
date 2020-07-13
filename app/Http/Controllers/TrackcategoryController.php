<?php

namespace App\Http\Controllers;

use App\Trackcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackcategoryController extends Controller
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
        $trackcategories = Trackcategory::orderBy('name','asc')->get();
        return view('admin.trackcategory.index', array('user' => Auth::user()), compact('trackcategories'));
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
        $trackcat=new Trackcategory;
        $trackcat->name=$request->name;
        $trackcat->save();

        return redirect()->route('trackcategory.index')->with('success','New Track Category added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trackcategory  $trackcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Trackcategory $trackcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trackcategory  $trackcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Trackcategory $trackcategory)
    {
        $trackcat=Trackcategory::where('id',$trackcategory->id)->first();
        return view('admin.trackcategory.edit',array('user' => Auth::user()),compact('trackcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trackcategory  $trackcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackcategory $trackcategory)
    {
        $trackcat=Trackcategory::find($trackcategory->id);
        $trackcat->name=$request->name;
        $trackcat->save();

        return redirect()->route('trackcategory.index')->with('success','Track Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trackcategory  $trackcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trackcategory $trackcategory)
    {
        $trackcategory->delete();

        return redirect()->back()->with('deleted','Track Category deleted successfully!');
    }
}
