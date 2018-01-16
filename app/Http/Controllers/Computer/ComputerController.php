<?php

namespace App\Http\Controllers\Computer;

use App\Computer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computer = new Computer;
//        $computers = $computer->all();




        return view('computers.computer', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('computers.computer-form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buildComputer()
    {
        return view('computers.build');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computer = new Computer;

        $computer->computer_name = $request->computer_name;
        $computer->operating_system = $request->operating_system;
        $computer->product_id = $request->product_id;
        $computer->system_type = $request->system_type;

        $computer->processor = $request->processor;
        $computer->ram = $request->ram;
        $computer->graphics_card = $request->graphics_card;

        $computer->peripherals = '['.
            "'mouse' =>" . "'". $request->mouse."'". ",".
            "'keyboard' =>" . "'". $request->keyboard."'". ",".
            "'monitor' =>" . "'". $request->monitor."'". ",".
            "'webcam' =>" . "'". $request->webcam."'". ",".
        ']';

        $computer->employee_id = $request->user_id;
        $computer->status = $request->status;

        $computer->save();

        return response()->json( $request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        return response()->json( $computer );
    }

    /**
     * Get all Computer resources
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(){
        $computer = new Computer;

        $computers = $computer->all();

        return response()->json( $computers );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        //
    }
}
