@extends("layouts.app")

@section("page-description", 'Passenger List')
@section('page-name', 'Passengers')

@section('main-content')
    <main>
        <h1>Passenger List</h1>
        <table class="table table-striped w-50 m-auto">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($passengers as $passenger)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$passenger->first_name}}</td>
                    <td>{{$passenger->last_name}}</td>
                    <td>{{$passenger->age}}</td>
                </tr>
                @empty
                    <h1>No passenger</h1>
                @endforelse
            </tbody>
        </table>
    </main>
@endsection
