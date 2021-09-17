@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Edit Hotel</h1>
        <form action="{{ route('hotel.update', $hotel->hotel_id) }}" method="post">
            @csrf
            <div>
                <input type="hidden" name="hotel_id">
            </div>
            <div>
                <input type="text" name="hotel_name">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>

</html>

@endsection