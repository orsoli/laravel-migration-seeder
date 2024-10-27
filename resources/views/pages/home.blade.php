{{-- Extends Layouts  --}}
@extends('layouts.app')

@section('favicon','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrmODeg6IZqMKjkcePf5XeZ88r_BFw_auB5A&s')
@section('page-description', 'Train Italy App')
@section('page-name','Laravel Migration Seeder')

@section('main-content')
    <div class="container  py-5">
        <div class="title text-light py-5">
            <h1 class="fw-bold">
                DEPARTURES
            </h1>
        </div>
        <div class="today">
            <p class="fw-bold text-light">
                Date: {{$currentDate}}
            </p>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    @forelse ($headerTableItems as $headerItem)
                        <th scope="col">{{$headerItem}}</th>
                    @empty
                        <p>
                            Have no header table item
                        </p>
                    @endforelse
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train )
                        <tr>
                            <th scope="row">{{$loop->iteration}} </th>

                            <td>
                                <a href="{{route('show', $train->id)}}">
                                    <img src="{{$train->icon_url}}" alt="{{$train->company}}" id="train-logo">
                                    <span class="fw-bold">{{$train->company}}</span>
                                </a>
                            </td>
                            <td>{{$train->train_number}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->FormatedDepartureTime}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->FormatedArrivalTime}}</td>
                            <td>{{$train->number_of_carriages}}</td>
                            <td>{{$train->OnTimeString}}</td>
                            <td>{{$train->CancelledString}}</td>
                        </tr>
                @empty
                    <div class="no-data d-flex justify-content-center align-items-center bg-black text-danger text-center bg-opacity-75 position-absolute top-0 end-0 bottom-0 start-0">
                        <h1>
                            Error: No data in table
                        </h1>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection


