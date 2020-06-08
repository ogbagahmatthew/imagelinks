@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['FlightsController@update', $applicants->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $applicants->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('from',  'from')}}
            {{Form::text('from', $applicants->from, ['class' =>'form-control', 'placeholder' => " from"])}}
        </div>
        <div class="form-group">
            {{Form::label('to',  'to')}}
            {{Form::text('to', $applicants->to, ['class' =>'form-control', 'placeholder' => " to"])}}
        </div>


        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $applicants->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('adults',  'adults')}}
            {{Form::text('adults', $applicants->adults, ['class' =>'form-control', 'placeholder' => " adults"])}}
        </div>
        <div class="form-group">
            {{Form::label('children',  'children')}}
            {{Form::text('children', $applicants->children, ['class' =>'form-control', 'placeholder' => " children"])}}
        </div>
        <div class="form-group">
            {{Form::label('travel_class',  'travel_class')}}
            {{Form::text('travel_class', $applicants->travel_class, ['class' =>'form-control', 'placeholder' => " travel_class"])}}
        </div>
        <div class="form-group">
            {{Form::label('departure_on',  'departure_on')}}
            {{Form::text('departure_on', $applicants->departure_on, ['class' =>'form-control', 'placeholder' => " departure_on"])}}
        </div>
        <div class="form-group">
            {{Form::label('journey_type',  'journey_type')}}
            {{Form::text('journey_type', $applicants->journey_type, ['class' =>'form-control', 'placeholder' => " journey_type"])}}
        </div>



<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection