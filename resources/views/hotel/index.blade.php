@extends('layouts.app')

@section('content')

<main>
    <div>
        <h1>List of Hotels</h1>
        <table>
            <tr>
                <tr>Hotel Id</tr>
                <th>Name</th>
                <th>Modify</th>
            </tr>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->hotel_name }}</td>
                    <td>
                        <a href="{{ route('hotel.edit', $hotel->hotel_id) }}">edit</a>
                        <form class="" action=" {{ route('hotel.destroy', $hotel->hotel_id) }}" method="post"
                            onsubmit="return confirm('Are you sure you want to delete {{ $hotel->hotel_name }} hotel?');">
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
</main>

@endsection