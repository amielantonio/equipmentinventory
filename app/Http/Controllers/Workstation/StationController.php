<?php

namespace App\Http\Controllers\Workstation;

use App\Workstation;
use App\Employee;
use App\Computer;
use App\Diagnostic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StationController extends Controller
{
    /**
     * Display a listing of the Workstation with the corresponding user resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workstationResource = new Workstation;

        // Get all resources
        $workstations = $workstationResource->all();

        // Instantiate Response
        $response = [];


        // Iterate through workstation and get employee and computer resource
//        foreach( $workstations as $workstation ){
//
//            $response[$workstation->id]['workstation'] = $workstation;
//            $response[$workstation->id]['employee_resource'] = $workstation->find( $workstation->id )->employee;
//            $response[$workstation->id]['computer_resource'] = $workstation->find( $workstation->id )->computer;
//
//        }


        foreach( $workstations as $workstation ){

            $response['data'][] = [
                "workstation" => $workstation,
                "employee_resources" => $workstation->find( $workstation->id )->employee,
                "computer_resources" => $workstation->find( $workstation->id )->computer
            ];

        }

        return response()->json( $response );
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
        //
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
     * Display the specified resource for user.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function showWithUser(Workstation $workstation)
    {
        $compClass = new Computer;
        $empClass = new Employee;

        $response = "";


        return response()->json( $workstation );
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
        //
    }
}
