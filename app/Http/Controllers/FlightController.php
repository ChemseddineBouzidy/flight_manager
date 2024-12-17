<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights=flight::all(); 
        return view("post.index",compact('flights'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightRequest $request)
    {
          // Validate the form input
          $formFields = $request->validated();
          $fileName =$request->file('imageAirline' )->store('flights','public');
          $fileName =$request->file('imageCity')->store('flights','public');
          $formFields['imageAirline'] = $fileName;
         // Insert data into the database using Eloquent       
         $formFields['imageCity'] = $fileName;
         flight::create($formFields);
         
         return redirect()->route('post.create' )->with('success','Votre compte est ' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(flight $flight)
    {
        //
    }
}
