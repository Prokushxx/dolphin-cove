<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/table.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: white;

        }

        .container {
            margin-left: 5%;
            margin-right: 5%;
        }

        /* Navbar section */

        .nav {
            width: 100%;
            height: 65px;
            position: fixed;
            z-index: 2;
            line-height: 65px;
            text-align: center;
            background-color: rgb(37, 86, 179);
        }

        .nav div.logo {
            width: 180px;
            height: 10px;
            position: absolute;
        }

        .nav div.logo a {
            text-decoration: none;
            color: #fff;
            font-size: 1.8em;
            text-transform: uppercase;
        }

        .nav div.logo a:hover {
            color: #c0c0c0;
        }

        .nav div.main_list {
            width: 600px;
            height: 65px;
            float: right;
        }

        .nav div.main_list ul {
            width: 100%;
            height: 65px;
            display: flex;
            list-style: none;
        }

        .nav div.main_list ul li {
            width: 120px;
            height: 65px;
        }

        .nav div.main_list ul li a {
            text-decoration: none;
            color: #fff;
            line-height: 65px;
            text-transform: uppercase;
        }

        .nav div.main_list ul li a:hover {
            color: #c0c0c0;
        }

        form button {
            display: inline-block;
            padding: 8px 12px;
            border: none;
            outline: none;
            border-radius: 6px;
            transition: 0.5s all;
        }

        form button:hover {
            color: #fff;
            background-color: rgb(2, 48, 134);
            cursor: pointer;
        }

        section {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: calc(100vh - 70px);
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
                        <button type="submit">Logout</button>
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
