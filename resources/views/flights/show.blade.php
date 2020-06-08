@extends('layouts.app')
@section('title', 'flights | Findworka')
@section('content')
<div class="container">
    <h1>flight name:{{$flights->name}}</h1>
    <p><b>flight from</b>:{{$flights->from}}</p>
    <p><b>flight to</b>:{{$flights->to}}</p>
    <p><b>flight adults</b>:{{$flights->adults}}</p>
    <p><b>flight children</b>:{{$flights->children}}</p>
    <p><b>flight travel_class</b>:{{$flights->travel_class}}</p>
    <p><b>flight departure_on</b>:{{$flights->departure_on}}</p>
    <p><b>flight journey_type</b>:{{$flights->journey_type}}</p>
    <p><b>flight id</b>:{{$flights->id}}</p>
    <p><b>flight email</b>:{{$flights->email}}</p>
    <a class="btn btn-primary mb-3" href=""</a>
{!!Form::open(['action'=> ['flightsController@destroy', $flights->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{-- {{Form::hidden('_method','DELETE')}} --}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection