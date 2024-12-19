<?php

namespace App\Http\Controllers;

use App\Http\Requests\PilotRequest;
use App\Models\Pilot;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show','','']);
        // $this->middleware('auth')->only(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Pilot.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PilotRequest $request)
    {

            $formFields = $request->validated();
            Pilot::create($formFields);
         return redirect()->route('Pilot.create' )->with('success','Votre compte est ' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function show(Pilot $pilot)
    {
        return view('Pilot.show', compact('pilot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilot $pilot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilot $pilot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilot $pilot)
    {
        //
    }
}
