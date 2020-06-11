<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels=Hotel::all();
        return view('hotels.index')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hotels.create');
    }

    /**
     * Snumber_of_guestsre a newly created resource in snumber_of_guestsrage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            // 'room_type' => 'required',
            'email' => 'required',
            'room_type' => 'required',
            'number_of_guests' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);
            $hotels= new Hotel;
            $hotels->name = $request->input('name');
            $hotels->room_type = $request->input('room_type');
            $hotels->number_of_guests = $request->input('number_of_guests');
            $hotels->email= $request->input('email');
            $hotels->time_in = $request->input('time_in');
            $hotels->time_out = $request->input('time_out');
            $hotels->created_at = new \DateTime();
            $hotels->save();
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
        $hotels=Hotel::find($id);
        return view('hotels.show')->with('hotels', $hotels);

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
        $hotels=Hotel::find($id);
        return view('hotels.edit')->with('hotels', $hotels);
    }

    /**
     * Update the specified resource in snumber_of_guestsrage.
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
            // 'room_type' => 'required',
            'email' => 'required',
            'room_type' => 'required',
            'number_of_guests' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            
            // 'journey_type' => 'required',
        ]);

        //Create new post
        // dd($request->image);
            $hotels=Hotel::find($id);
            $hotels->name = $request->input('name');
            $hotels->room_type = $request->input('room_type');
            $hotels->number_of_guests = $request->input('number_of_guests');
            $hotels->email= $request->input('email');
            $hotels->time_in = $request->input('time_in');
            $hotels->time_out = $request->input('time_out');
            $hotels->save();
            return redirect('bookings');
    }

    /**
     * Remove the specified resource room_type snumber_of_guestsrage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
