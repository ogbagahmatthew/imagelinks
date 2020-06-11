@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['HotelController@update', $hotels->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $hotels->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('room_type',  'room_type')}}
            {{Form::text('room_type', $hotels->room_type, ['class' =>'form-control', 'placeholder' => " room_type"])}}
        </div>


        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $hotels->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('number_of_guest',  'number_of_guest')}}
            {{Form::text('number_of_guest', $hotels->number_of_guest, ['class' =>'form-control', 'placeholder' => " number_of_guest"])}}
        </div>
        <div class="form-group">
            {{Form::label('time_check_in',  'time_check_in')}}
            {{Form::text('time_check_in', $hotels->time_check_in, ['class' =>'form-control', 'placeholder' => " time_check_in"])}}
        </div>
        <div class="form-group">
            {{Form::label('time_check_out',  'time_check_out')}}
            {{Form::text('time_check_out', $hotels->time_check_out, ['class' =>'form-control', 'placeholder' => " time_check_out"])}}
        </div>

<div style="padding-room_typep:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection