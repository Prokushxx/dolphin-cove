@extends('layouts.navbar')

@section('content')

    <form action="{{ route('booking.store') }}" method="POST">

        @csrf
        <input type="email" name="email" placeholder="Enter customer email" value="{{ old('email') }}"><br>
        <Label>Hotel</Label><br>
        <select name="company_id" id="company">
            @foreach ($reservations as $company)
                <option value="{{ $company->company_id }}">{{ $company->company_name }}</option><br>
            @endforeach
        </select><br>
        <Label>Hotel</Label><br>
        <select name="hotel_id" id="hotel">
            @foreach ($hotels as $hotel)
                <option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option><br>
            @endforeach
        </select><br>
        <Label>Program</Label><br>
        <select name="schdule_id" id="">
            @foreach ($schedules as $schedule)
                <option value="{{ $schedule->schedule_id }}">{{ $schedule->p_name }}</option><br>
            @endforeach
        </select><br>
        <label for="status">Status</label><br>
        <select name="status" id="">
            <option value="pending">Pending</option>
            <option value="paid">Paid</option>
        </select><br>
        <label for="pay_method">Payment Method</label><br>
        <select name="payment_method" id="">
            <option value="cash">Cash</option>
            <option value="credit">Credit</option>
        </select><br>
        <input type="submit" value="Submit Booking">
    </form>

@endsection
