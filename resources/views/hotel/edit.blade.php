@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Edit Hotel</h1>
        <form action="{{ route('hotel.update', $hotels->hotel_id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <input type="hidden" name="hotel_id">
            </div>
            <div>
                <input type="text" value="{{ $hotels->hotel_name }}" name="hotel_name" required>
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</main>


@endsection