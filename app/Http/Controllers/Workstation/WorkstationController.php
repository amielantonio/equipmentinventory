<?php

namespace App\Http\Controllers\Workstation;

use App\Workstation;
use App\Employee;
use App\Computer;
use App\Diagnostic;
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
//        $workstations = new Workstation;
//
//        $allStations = $workstations->all();
//
//        $response = $allStations;


        $workstations = new Workstation;
        $computers = new Computer;
        $employees = new Employee;

        //Retrieve all resources
        $workstations = $workstations->all();

        //Instantiate Response
        $response = [];

        foreach( $workstations as $workstation ){
            $id = $workstation['id'];


            $response[ $id ] = $workstation;

            $response[ $id ]['employee'] = $employees->where( 'id', $workstation['employee_id'] )->get();
            $response[ $id ]['computer'] = $computers->where( 'id', $workstation['computer_id'] )->get();
        }


//        return response()->json( $response );

        return view('workstation.workstation', compact('response'));
    }


    public function stations()
    {
        $workstations = new Workstation;
        $computers = new Computer;
        $employees = new Employee;

        //Retrieve all resources
        $workstations = $workstations->all();

        //Instantiate Response
        $response = [];

        foreach( $workstations as $workstation ){
            $id = $workstation['id'];


            $response[ $id ] = $workstation;

            $response[ $id ]['employee'] = $employees->where( 'id', $workstation['employee_id'] )->get();
            $response[ $id ]['computer'] = $computers->where( 'id', $workstation['computer_id'] )->get();
        }


        return response()->json( $response );
    }

    /**
     * Display workstation resources
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(){
        $workstation = new Workstation;

        $workstations = $workstation->all();

        return response()->json( $workstations );
    }


    /**
     * Show the form to assign user to workstation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assign()
    {
        $employee = new Employee;
        $computer = new Computer;

        $employees = $employee->all();
        $computers = $computer->all();


        return view('workstation.assign-station', compact('employees', 'computers'));
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

        $workstation->employee_id = $request->employee_id;
        $workstation->computer_id = $request->computer_id;
        $workstation->location = $request->location;
        $workstation->network_type = $request->network_type;
        $workstation->ip_address = $request->ip_address;
        $workstation->mac_address = $request->mac_address;

        $workstation->save();

        return response()->json($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workstation.workstation-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function show(Workstation $workstation)
    {
        return response()->json( $workstation );
    }

    /**
     * Display the specified resource.
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
     *
     */
    public function saveWorkstationWithUser($sessionName, $data, $flash = false, Request $request){

        if( $flash ){
            $request->session()->flash($sessionName, $data);
        }else{
            $request->session()->put($sessionName, $data);
        }

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
