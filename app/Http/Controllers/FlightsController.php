<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flights;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //
        $flights=Flights::all();
        return view('flights.index')->with('flights', $flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        //
        return view('flights.create');
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
        $this->validate($request,[
            'name' => 'required',
            // 'from' => 'required',
            'email' => 'required',
            'from' => 'required',
            'to' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'travel_class' => 'required',
            'departure_on' => 'required',
            'journey_type' => 'required',
        ]);

        //Create new post
        // dd($request->image);
            $flightss= new Flights;
            $flightss->name = $request->input('name');
            $flightss->from = $request->input('from');
            $flightss->to = $request->input('to');
            $flightss->email= $request->input('email');
            $flightss->adults = $request->input('adults');
            $flightss->children = $request->input('children');
            $flightss->travel_class = $request->input('travel_class');
            $flightss->departure_on = $request->input('departure_on');
            $flightss->journey_type = $request->input('journey_type');
            // $flightss->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            // dd($request);
            $flightss->save();
            return redirect('/');
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
        $flights=Flights::find($id);
        return view('flights.show')->with('flights', $flights);

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
        $this->validate($request,[
            'name' => 'required',
            // 'from' => 'required',
            'email' => 'required',
            'from' => 'required',
            'to' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'travel_class' => 'required',
            'departure_on' => 'required',
            'journey_type' => 'required',
        ]);

        //Create new post
        // dd($request->image);
            $flightss= new Flights;
            $flightss->name = $request->input('name');
            $flightss->from = $request->input('from');
            $flightss->to = $request->input('to');
            $flightss->email= $request->input('email');
            $flightss->adults = $request->input('adults');
            $flightss->children = $request->input('children');
            $flightss->travel_class = $request->input('travel_class');
            $flightss->departure_on = $request->input('departure_on');
            $flightss->journey_type = $request->input('journey_type');
            // $flightss->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            // dd($request);
            $flightss->save();
            return redirect('/');
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
