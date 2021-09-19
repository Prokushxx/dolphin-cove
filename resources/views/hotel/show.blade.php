@extends('layouts.navbar')

@section('content')

    <main>
        <table class="table-content">
            <a href="{{ route('hotel.create') }}">Create Hotel</a>
            <thead>
                <tr>
                    <th>Patron ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Hotel ID</th>
                </tr>
            </thead>
            @foreach ($showPatron as $patron)
            <tbody>
                <tr>
                    <td>{{ $patron['patron_id'] }}</td>
                    <td>{{ $patron['f_name'] }}</td>
                    <td>{{ $patron['l_name'] }}</td>
                    <td>{{ $patron['email'] }}</td>
                    <td>{{ $patron['created_at'] }}</td>
                    <td>{{ $patron['updated_at'] }}</td>
                    <td>{{ $patron['hotel_id'] }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </main>

@endsection
