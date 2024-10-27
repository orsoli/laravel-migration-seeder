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
        <div class="container container-show d-flex flex-column">

        </div>
    </main>
@endsection
