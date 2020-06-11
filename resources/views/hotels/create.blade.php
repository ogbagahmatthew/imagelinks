@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'HotelController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('room_type',  ' room_type')}}
    {{Form::text('room_type','', ['class' =>'form-control', 'placeholder' => " room_type"])}}
    <!-- <select id="category" name="category" required="">
													<option value="none">None</option>
													<option value="category1">Single Room</option>
													<option value="category2">Double Room</option>
													<option value="category3">Suit Room</option>
													
												</select> -->
</div>



<div class="form-group">
    {{Form::label('email',  ' email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>


<div class="form-group">
    {{Form::label('number_of_guests',  ' number_of_guests')}}
    {{Form::text('number_of_guests','', ['class' =>'form-control', 'placeholder' => " number_of_guests"])}}
    <select id="category1" name="category1" required="">
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select> 
</div>


<div class="form-group">
    {{Form::label('time_in',  ' time_in')}}
    {{Form::text('time_in','', ['class' =>'form-control', 'placeholder' => " 2020-01-01"])}}
   
</div>

<div class="form-group">
    {{Form::label('time_out',  ' time_out')}}
    {{Form::text('time_out','', ['class' =>'form-control', 'placeholder' => " 2021-01-01"])}}
    
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection