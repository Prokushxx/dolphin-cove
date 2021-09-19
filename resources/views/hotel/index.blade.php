@extends('layouts.navbar')

@section('content')

    <main>
        <div>
            <h1>List of Hotels</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Modify</th>
                </tr>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotels->hotel_name }}</td>
                        <td>
                            <a href="{{ route('hotel.edit', $hotels->hotel_id) }}">edit</a></td>
                            <form class="" action=" {{ route('hotel.destroy', $hotels->hotel_id) }}" method="post"
                                onsubmit="return confirm('Are you sure you want to delete {{ $hotelsKO->hotel_name }} hotel?');">
                                @csrf
                                @method('DELETE')
                               <td> <button class="">
                                    Delete
                                </button></td>
                            </form>
                    </tr>
                    @endforeach
                    <tr style="column-span: 4; text-align:center;"><td><button><a href="{{ route('hotel.create') }}">Create Hotel</a></button></td></tr>
                
            </table>
        </div>
    </main><br>

@endsection
