@extends('layouts.navbar')

@section('content')

    <H1>LIST OF BOOKINGS</H1>

    <table>
        <tr>

            <th>EMAIL</th>
            <th>BOOKING DATE</th>
            <th>HOTEL</th>
            <th>PROGRAM</th>
            <th>PAYMENT METHOD</th>

        </tr>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->current_date }}</td>
                <td>{{ $booking->hotel_name }}</td>
                <td>{{ $booking->p_name }}</td>
                <td>{{ $booking->payment_method }}</td>
            </tr>

        @endforeach
    </table>

@endsection
