<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\flight;
use App\Models\Pilot;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show','','']);
        // $this->middleware('auth')->only(['show']);
    }

    public function index()
    {
        // $flights=flight::all(); 
         $flights = flight::paginate(11);
        return view("Flight.index",compact('flights'));
    }



    public function create()
    {
        //
        $Pilots=Pilot::all(); 
        return view("Flight.create",compact("Pilots"));
    }

    public function store(FlightRequest $request, Pilot $pilot)
    {
          //Recover pilot id
         $pilot = Pilot::find($request->pilot_id);
        // Check availability pilot
    if ($pilot && $pilot->availability == 1) {
        // Return an error response or redirect back if the pilot is not available
        return redirect()->back()->with('error', 'This pilot is currently unavailable.');
    }
 
          // Validate the form input
          $formFields = $request->validated();
          $fileName =$request->file('imageAirline' )->store('flights','public');
          $fileNamee =$request->file('imageCity')->store('flights','public');
          $formFields['imageAirline'] = $fileName;
         // Insert data into the database using Eloquent       
         $formFields['imageCity'] = $fileNamee;
         flight::create($formFields);
         $pilot->availability = 1;
         $pilot->save();
        //  dd($pilot);
         return redirect()->route('Flight.create' )->with('success','Votre compte est ' );
    }

    
    public function show(flight $Flight )
    {
        
        return view('Flight.show', compact('Flight'));
       
    }

 
    public function edit(flight $flight)
    {
        //
         
    }

 
    public function update(Request $request, flight $flight)
    {
        //
    }


    public function destroy(flight $flight)
    {
        //
    }
}
