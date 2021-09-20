@extends('layouts.navbar')

@section('content')

    <main>
        <table class="table-content">
            <a href="{{ route('hotel.create') }}">Create Hotel</a>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Modify</th>
                </tr>
            </thead>
            @foreach ($hotels as $hotel)
            <tbody>
                <tr>
                    <td><a href="{{ route('hotel.show', $hotel->hotel_id) }}">{{ $hotel->hotel_name }}</a></td>
                    <td>
                        <a href="{{ route('hotel.edit', $hotel->hotel_id) }}">Edit</a>
                        <form class="" action=" {{ route('hotel.destroy', $hotel->hotel_id) }}" method="post"
                            onsubmit="return confirm('Are you sure you want to delete {{ $hotel->hotel_name }} hotel?');">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </main>

@endsection
