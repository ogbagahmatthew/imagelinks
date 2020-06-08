@extends('layouts.app') 
@section('title', 'Available Flights | ImageLinks') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Flights</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            From
                                        </th> <th>
                                            To
                                        </th>
                                        <th>
                                            Adults
                                        </th>
                                        <th>
                                            Children
                                        </th>
                                        <th>
                                            Travel_Class
                                        </th>
                                        <th>
                                            Departure_on 
                                        </th>
                                        <th>
                                            Journey_type
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($flights) >0)
                                        @foreach($flights as $flight)
                                        <tr>
                                            <td>
                                                {{$flight->id}}
                                            </td>
                                            <td>
                                                {{$flight->name}} 
                                            </td>
                                            <td>
                                                {{$flight->email}} 
                                            </td>
                                            <td>
                                                {{$flight->from}} 
                                            </td>
                                            <td>
                                                {{$flight->to}} 
                                            </td>
                                            <td>
                                                {{$flight->adults}} 
                                            </td>
                                            <td>
                                                {{$flight->children}} 
                                            </td>
                                            <td>
                                                {{$flight->travel_class}} 
                                            </td>
                                            <td>
                                                {{$flight->departure_on}} 
                                            </td><td>
                                                {{$flight->journey_type}} 
                                            </td>
                                            <td class="text">
                                                <a href="{{url('/flight')}}/{{$flight->id}}" class="btn btn-warning">VIEW flightS</a>
                                                {{-- <a href="{{url('/flight')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No flights found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection