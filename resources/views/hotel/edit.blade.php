@extends('layouts.navbar')

@section('content')

    <main>
        <div>
            <h1>Edit Hotel</h1>
            <form action="{{ route('hotel.update', $hotel->hotel_id) }}" method="post">
                @csrf
                @method('put')
                <div>
                    <input type="hidden" name="hotel_id">
                </div>
                <div>
                    <input type="text" name="hotel_name" value="{{ $hotel->hotel_name }}" id="">
                </div>
                <div>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </main>


@endsection
