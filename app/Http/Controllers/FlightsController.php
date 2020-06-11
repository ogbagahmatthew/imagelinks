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
            // 'name' => 'required',
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
            $flights= new Flights;
            $flights->name = $request->input('name');
            $flights->from = $request->input('from');
            $flights->to = $request->input('to');
            $flights->email= $request->input('email');
            $flights->adults = $request->input('adults');
            $flights->children = $request->input('children');
            $flights->travel_class = $request->input('travel_class');
            $flights->departure_on = $request->input('departure_on');
            $flights->journey_type = $request->input('journey_type');
            // $flightss->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            // dd($request);
            $flights->save();
            return redirect('bookings');
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
        $flights=Flights::find($id);
        return view('flights.edit')->with('flights', $flights);
       
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
            $flights=Flights::find($id);
            $flights->name = $request->input('name');
            $flights->from = $request->input('from');
            $flights->to = $request->input('to');
            $flights->email= $request->input('email');
            $flights->adults = $request->input('adults');
            $flights->children = $request->input('children');
            $flights->travel_class = $request->input('travel_class');
            $flights->departure_on = $request->input('departure_on');
            $flights->journey_type = $request->input('journey_type');
            // $flightss->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            // dd($request);
            $flights->save();
            return redirect('homepages');
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
