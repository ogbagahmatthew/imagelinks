@extends('layouts.app') 
@section('title', 'Available hotels | ImageLinks') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available hotels</h5>
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
                                            Room_Type
                                        </th> <th>
                                            Number_of_Guests
                                        </th>
                                        <th>
                                            Time_Check_In
                                        </th>
                                        <th>
                                            Time_Check_Out
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($hotels) >0)
                                        @foreach($hotels as $hotel)
                                        <tr>
                                            <td>
                                                {{$hotel->id}}
                                            </td>
                                            <td>
                                                {{$hotel->name}} 
                                            </td>
                                            <td>
                                                {{$hotel->email}} 
                                            </td>
                                            <td>
                                                {{$hotel->Room_Type}} 
                                            </td>
                                            <td>
                                                {{$hotel->Number_of_Guests}} 
                                            </td>
                                            <td>
                                                {{$hotel->Time_Check_In}} 
                                            </td>
                                            <td>
                                                {{$hotel->Time_Check_Out}} 
                                            </td>
                                            <!-- <td>
                                                {{$hotel->travel_class}} 
                                            </td>
                                            <td>
                                                {{$hotel->departure_on}} 
                                            </td><td>
                                                {{$hotel->journey_type}} 
                                            </td> -->
                                            <td class="text">
                                                <a href="{{url('/hotel')}}/{{$hotel->id}}" class="btn btn-warning">VIEW hotelS</a>
                                                {{-- <a href="{{url('/hotel')}}/{{$hotels->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No hotels found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection