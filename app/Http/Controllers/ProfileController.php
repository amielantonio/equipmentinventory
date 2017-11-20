<?php

namespace App\Http\Controllers;

use App\Diagnostic;
use App\Profile;
use App\Workstation;
use App\Computer;
use App\Employee;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.

     * @return \Illuminate\Http\Response*
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //Workstation Workflow
        $workstation = new Workstation;

        //Get User station
        $currentProfile = $workstation->where('id', '=', $id)->get();
        // Instantiate Response
        $response = [];
        $computer = [];


        // Iterate through workstation and get employee and computer resource
        foreach( $currentProfile as $profile ){

            $response[$profile->id]['workstation'] = $profile;
            $response[$profile->id]['employee'] = $profile->find( $profile->id )->employee;
            $response[$profile->id]['computer'] = $profile->find( $profile->id )->computer;

            $computer = $profile->find( $profile->id )->computer;
        }
        //End Workstation Workflow

        //Return Computer Diagnostic History
        $diagnostics = $computer->diagnostics;

        return view('profile.profile', compact('response', 'diagnostics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
