@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'FlightsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('from',  'from')}}
    {{Form::text('from','', ['class' =>'form-control', 'placeholder' => "from"])}}
 <!-- <select id="category1" name="category1" required=""> 
													<option value="category2">New York</option>
													<option value="category1">Dubai</option>
													<option value="category3">America</option> 
													<option value="category3">London</option>
													<option value="category3">Goa</option> 
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option> 
												</select>  -->
</div>

<div class="form-group">
    {{Form::label('to',  ' to')}}
    {{Form::text('to','', ['class' =>'form-control', 'placeholder' => " to"])}}
    <!-- <select id="category1" name="category1" required="">
													<option value="category2">New York</option>
													<option value="category1">Dubai</option>
													<option value="category3">America</option> 
													<option value="category3">London</option>
													<option value="category3">Goa</option> 
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option> 
												</select> -->
</div>



<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>


<div class="form-group">
    {{Form::label('adults',  ' adults')}}
    {{Form::text('adults','', ['class' =>'form-control', 'placeholder' => " adults"])}}
    <!-- <select id="category1" name="category1" required="">
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select> -->
</div>


<div class="form-group">
    {{Form::label('children',  ' children')}}
    {{Form::text('children','', ['class' =>'form-control', 'placeholder' => " children"])}}
    <!-- <select id="category1" name="category1" required=""> 
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select>  -->
</div>

<div class="form-group">
    {{Form::label('travel_class',  ' travel_class')}}
    {{Form::text('travel_class','', ['class' =>'form-control', 'placeholder' => " travel_class"])}}
     <!-- <select id="category2" name="category1" required="">
													<option value="category1">Economy class</option>
													<option value="category2">Premium Economy</option>
													<option value="category3">Business class</option>
													<option value="category3">First Class</option>
												</select>  -->
</div>

<div class="form-group">
    {{Form::label('departure_on',  ' departure_on')}}
    {{Form::text('departure_on','', ['class' =>'form-control', 'placeholder' => " departure_on"])}}
    <!-- <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required=""> -->
</div>

<!-- <div class="agileits_w3layouts_main_grid1">
	<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
</div> -->

<div class="form-group">
    {{Form::label('journey_type',  ' journey_type')}}
    {{Form::text('journey_type','', ['class' =>'form-control', 'placeholder' => " journey_type"])}}
     <!-- <select id="category1" name="category1" required="">
													<option value="category1">One Way</option>
													<option value="category2">Round trip</option> -->
												</select> 
</div>






{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection