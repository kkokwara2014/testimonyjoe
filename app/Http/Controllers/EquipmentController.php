<?php

namespace App\Http\Controllers;

use App\Equipcategory;
use App\Equipment;
use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;

class EquipmentController extends Controller
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
        $equipments = Equipment::latest()->get();
        $equipcategories=Equipcategory::orderBy('name','asc')->get();
        return view('admin.equipment.index', array('user' => Auth::user()), compact('equipments','equipcategories'));
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
    public function store(EquipmentStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            //for equipment image
            $equipmentimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($equipmentimage)->resize(600, 600)->save(public_path('equipment_images/' . $imagefilename));

           $equipment=new Equipment;
           $equipment->name=$request->name;
           $equipment->slug=Str::slug($request->name);
           $equipment->description=$request->description;
           $equipment->price=$request->price;
           $equipment->equipcategory_id=$request->equipcategory_id;
           $equipment->user_id=Auth::user()->id;
           $equipment->image=$imagefilename;
           $equipment->save();

       }

        return redirect()->route('equipment.index')->with('success','New Equipment added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        $equipment = Equipment::find($equipment->id);
        return view('admin.equipment.show', array('user' => Auth::user()), compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        $equipment = Equipment::where('id',$equipment->id)->first();
        $equipcategories=Equipcategory::orderBy('name','asc')->get();
        return view('admin.equipment.edit', array('user' => Auth::user()), compact('equipment','equipcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentUpdateRequest $request, Equipment $equipment)
    {
        if ($request->hasFile('image')) {
            //for equipment image
            $equipmentimage=$request->file('image');
            $imagefilename = time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($equipmentimage)->resize(600, 600)->save(public_path('equipment_images/' . $imagefilename));

           $equipment=Equipment::find($equipment->id);
           $equipment->name=$request->name;
           if ($request->existing_name!=$request->name) {
                $equipment->slug=Str::slug($request->name);
            }
           $equipment->slug=$equipment->slug;
           $equipment->description=$request->description;
           $equipment->price=$request->price;
           $equipment->equipcategory_id=$request->equipcategory_id;
           $equipment->user_id=Auth::user()->id;
           $equipment->image=$imagefilename;
           $equipment->save();

       }else{
        $equipment=Equipment::find($equipment->id);
        $equipment->name=$request->name;
        if ($request->existing_name!=$request->name) {
             $equipment->slug=Str::slug($request->name);
         }
        $equipment->slug=$equipment->slug;
        $equipment->description=$request->description;
        $equipment->price=$request->price;
        $equipment->equipcategory_id=$request->equipcategory_id;
        $equipment->user_id=Auth::user()->id;
        $equipment->image=$request->existing_image;
        $equipment->save();
       }


        return redirect()->route('equipment.index')->with('success','Equipment updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //deleting files from folder
        File::delete([public_path('equipment_images/' . $equipment->image)]);

        //deleting  files from the database
        $equipment->delete();

        //redirecting page
        return redirect()->back()->with('deleted','Equipment deleted successfully!');
    }
}
