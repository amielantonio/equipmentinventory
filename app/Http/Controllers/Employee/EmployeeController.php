<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use App\Computer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeesCollection = new Employee();

        $employees = $employeesCollection::all();

        return view('employees.employees', compact('employees'));
    }


    /**
     * Display the list of resources
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(){

        $employee = new Employee;

        $employees = $employee->all();


        return response()->json( $employees );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $computer = new Computer;

        $computers = $computer->where('employee_id','=', NULL)->get();

        return view('employees.employee-form', compact( 'computers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee = new Employee;

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->contact = $request->contact;
        $employee->position = $request->position;
        $employee->computer_id = $request->computer_id;

        // Save
        $employee->save();

        return response()->json($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {

        return response()->json( $employee );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

        return view('employees.employee-form', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
