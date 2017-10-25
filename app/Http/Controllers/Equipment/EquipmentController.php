<?php

namespace App\Http\Controllers\Equipment;

use App\Equipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipment.equipment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipment.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Server side validation
//        $request->validate([
//            'equipment_name' => 'required',
//            'category' => 'required',
//            'price' => 'required',
//            'on_hand' => 'required'
//        ]);
//
        $equipment = new Equipment;

        //Assign Value to Model
        $equipment->equipment_name = $request->equipment_name;
        $equipment->slug = str_slug($request->equipment_name, '-');
        $equipment->category = $request->category;
        $equipment->price = $request->price;
        $equipment->on_hand = $request->on_hand;
        $equipment->durability = $request->durability;
        $equipment->info = $request->info;

        // Save
        $equipment->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        $equipment = new Equipment;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
