@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Edit Hotel</h1>
        <form action="{{ route('hotel.update', $hotel->hotel_id) }}" method="post">
            @csrf
            <div>
                <input type="hidden" name="hotel_id">
            </div>
            <div>
                <select name="hotel_id">
                    @foreach ($hotels as $hotel)
                        <option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</main>


@endsection