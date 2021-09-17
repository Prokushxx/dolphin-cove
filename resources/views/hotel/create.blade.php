@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Enter Hotel Name</h1>
        <form action="{{ route('hotel.store') }}" method="post">
            @csrf
            <div>
                <input type="text" name="hotel_name">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</main>

@endsection
