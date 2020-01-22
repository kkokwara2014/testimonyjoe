<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $equipment=Equipment::orderBy('created_at','desc')->get();

        return view('admin.equipment.index',compact('equipment','user'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request, [
            'title' => 'required',
            'albumcategory_id' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:10000',
            'filename' => 'required|file|max:5000|mimes:mp3,mp4,wma,wav',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 600)->save(public_path('equipment_images/' . $imageName));

            $formInput['image'] = $imageName;
        }

        $equipment = new Equipment;
        $equipment->name = $request->name;
        $equipment->price = $request->price;
        $equipment->description = $request->description;
        $equipment->user_id = $request->user_id;
        $equipment->image = $formInput['image'];

        $equipment->save();


        return redirect()->route('equipment.index');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::where('id',$id)->delete();

        return redirect()->back();
    }
}
