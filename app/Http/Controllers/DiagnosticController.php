<?php

namespace App\Http\Controllers;

use App\Diagnostic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
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
        $diagnostics = new Diagnostic;

        $diagnostics->computer_id = $request->computer_id;
        $diagnostics->diagnostics_title = $request->diagnostics_title;
        $diagnostics->diagnostics_text = $request->diagnostics_text;
        $diagnostics->diagnostics_date = $request->diagnostics_date;
        $diagnostics->created_at = Carbon::now();
        $diagnostics->updated_at = Carbon::now();

        $diagnostics->save();

        return response()->json( $request );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diagnostic  $diagnostics
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnostic $diagnostics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diagnostic  $diagnostics
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnostic $diagnostics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diagnostic  $diagnostics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnostic $diagnostics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diagnostic  $diagnostics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnostic $diagnostics)
    {
        //
    }
}
