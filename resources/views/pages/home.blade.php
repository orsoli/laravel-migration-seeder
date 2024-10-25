{{-- Extends Layouts  --}}
@extends('layouts.app')

@section('page-description', 'Train Italy App')
@section('page-name','Laravel Migration Seeder')

@section('main-content')
    <div class="container">
        <div class="title py-5">
            <h1>
                TRAINS INFO TABLE
            </h1>
        </div>
        <div class="today">
            <p class="fw-bold text-secondary">
                Date: {{$currentDate}}
            </p>
        </div>
        <table class="table table-striped">
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
                    <td>{{$train->company}} </td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_number}}</td>
                    <td>{{$train->number_of_carriages}}</td>
                    <td>{{$train->on_time}}</td>
                    <td>{{$train->cancelled}}</td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
@endsection


