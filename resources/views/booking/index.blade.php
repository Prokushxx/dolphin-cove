@extends('layouts.navbar')

@section('content')
    <main>

        <H1>BOOKINGS</H1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div>
            <a href="{{ route('booking.create') }}">Create Booking</a>
        </div>


        <div>
            <table>
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>HOTEL</th>
                    <th>PROGRAM</th>
                    <th>COSTS</th>
                    <th>PROGRAM DATE</th>
                    <th>TOUR COMPANY</th>
                    <th>DATE BOOKED</th>
                    <th>PAYMENT STATUS</th>
                    <th>PAYMENT METHOD</th>
                    <th>OPTIONS</th>
                    </th>
                </tr>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->f_name }}</td>
                        <td>{{ $booking->l_name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->hotel_name }}</td>
                        <td>{{ $booking->p_name }}</td>
                        <td>{{ $booking->p_costs }}</td>
                        <td>{{ $booking->exc_date }}</td>
                        <td>{{ $booking->company_name }}</td>
                        <td>{{ $booking->date_booked }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>{{ $booking->payment_method }}</td>

                        <td>
                            <a href="{{ route('booking.edit', $booking->booking_id) }}">Edit</a>
                            <form class="" action=" {{ route('booking.destroy', $booking->booking_id) }}"
                                method="post"
                                onsubmit="return confirm('Are you sure you want to delete {{ $booking->f_name }}\'s booking?');">
                                @csrf
                                @method('DELETE')
                                <button class="">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </table>
        </div>

        <div>

        </div>
    </main>
@endsection
