<?php

namespace App\Http\Controllers;

use App\Http\Requests\PilotRequest;
use App\Models\Pilot;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show','All','']);
        // $this->middleware('auth')->only(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pilots = Pilot::paginate(11);

        // $Pilots=Pilot::all(); 
        return view("Pilot.index",compact('Pilots'));
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
    public function edit(Pilot $Pilot)
    {
        return view("Pilot.edit",compact('Pilot'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(PilotRequest $request, Pilot $Pilot)
    {
        $formFields = $request->validated();


    
     
            // $pilot->fill($formFields)->save();
            $Pilot->update($formFields);
            return to_route('Pilot.index')->with('success','le profile a ete bien Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilot $Pilot)
    {
        $Pilot->delete();

        return to_route('Pilot.index',$Pilot->id)->with('danger','le profile a ete bien supprimer');
    }
}
