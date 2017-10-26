<?php

namespace App\Http\Controllers\Workstation;

use App\Workstation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkstationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('workstation.workstation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workstation.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workstation = new Workstation;

        $workstation->user_id = $request->user_id;
        $workstation->computer_id = $request->computer_id;
        $workstation->location = $request->location;
        $workstation->ip_address = $request->ip_address;
        $workstation->mac_address = $request->mac_address;

        $workstation->save();

        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function show(Workstation $workstation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function edit(Workstation $workstation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workstation $workstation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workstation $workstation)
    {
        //
    }
}
