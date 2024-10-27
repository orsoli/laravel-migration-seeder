@extends('layouts.show_app')

@section('page-description', 'details for train')
@section('page-name', 'Show Details')

@section('main-content')
    {{-- Header --}}
    <header class="p-3">
        <nav class="navbar navbar-expand-lg bg-body-transparent">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand text-light" href="#">Tickets</a>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    {{-- Main --}}
    <main>
        <div class="container container-show d-flex flex-column justify-content-between py-5">
            <form class="row">
                <div class="col">
                    <label for="from-destination" >FROM</label>
                    <input type="text" class="form-control" id="from-destination" placeholder="{{$train->departure_station}}">
                </div>
                <div class="col">
                    <label for="to-destination" >TO</label>
                    <input type="text" class="form-control" id="to-destination" placeholder="{{$train->arrival_station}}">
                </div>
                <div class="col-2">
                    <label for="date">Time</label>
                    <input type="text" class="form-control" id="date" placeholder="{{$train->FormatedDepartureTime}}">
                </div>
                <div class="col-2">
                    <label></label>
                    <button class="btn btn-success form-control">Buy Ticket</button>
                </div>
            </form>
            <div class="row">
                <div class="col-4 d-flex justify-content-between bg-success opacity-75 p-5 gap-3">
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrmODeg6IZqMKjkcePf5XeZ88r_BFw_auB5A&s" alt="{{$train->company}} logo" height="100px" class="icon">
                    </div>
                    <div class="departentures-time">
                        <p class="fw-bold fs-5 p-0 m-0">
                            {{$train->FormatedDepartureTime}}
                        </p>
                        <p>Today</p>
                        <a href="#"><small>Next Trip ></small></a>
                    </div>
                </div>
                <div class="col-8 bg-dark opacity-75 p-5">
                    <div class="arrival-city">
                        <h5 class="fw-bold">
                            {{$train->arrival_station}}
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>'Description of this city.....'</p>
                        <div>
                            <p>'Attractive places.....'</p>
                            <a href="#"><small class="text-success">More Info..</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
