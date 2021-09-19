<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <style>
        .w-5
        {
            display: none;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="#">COVE</a>
                </div>
                <div class="main_list" id="mainListDiv">
                    <ul>
                        <li><a href="{{ route('booking.index') }} ">booking</a></li>
                        <li><a href="{{ route('hotel.index') }} ">hotel</a></li>
                        <li><a href="{{ route('reservation.index') }} ">payment</a></li>
                        <li><a href="{{ route('program.index') }} ">program</a></li>
                        <li><a href="{{ route('reservation.index') }} ">reservation</a></li>
                        <li><a href="{{ route('schedule.index') }} ">schedule</a></li>
                    </ul>
                </div>
                <div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <section>

        @yield('content')

    </section>
</body>

</html>
