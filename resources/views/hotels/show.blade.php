@extends('layouts.app')
@section('title', 'hotels | Findworka')
@section('content')
<div class="container">
    <h1>hotel name:{{$hotels->name}}</h1>
    <p><b>hotel room_type</b>:{{$hotels->room_type}}</p>
    <p><b>hotel number_guests</b>:{{$hotels->number_guests}}</p>
    <p><b>hotel time_check_in</b>:{{$hotels->time_check_in}}</p>
    <p><b>hotel time_check_out</b>:{{$hotels->time_check_out}}</p>
    <p><b>hotel id</b>:{{$hotels->id}}</p>
    <p><b>hotel email</b>:{{$hotels->email}}</p>
    <a class="btn btn-primary mb-3" href=""</a>
{!!Form::open(['action'=> ['HotelController@destroy', $hotels->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{-- {{Form::hidden('_method','DELETE')}} --}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection