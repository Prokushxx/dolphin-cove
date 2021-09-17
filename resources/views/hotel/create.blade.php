@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Enter Hotel Name</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        </div>
    @endif
        <form action="{{ route('hotel.store') }}" method="post">
            @csrf
            <div>
                <input type="text" name="hotel_name" placeholder="Hotel name...">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</main>

@endsection
