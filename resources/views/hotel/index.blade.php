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
        <h1>List of Hotels</h1>
        <table>
            <tr>
                <tr>Hotel Id</tr>
                <th>Name</th>
                <th>Modify</th>
            </tr>
            @foreach ($hotels as $hotel)
<<<<<<< HEAD
                <td>
                    {{ $hotel->hotel_id }}
                </td>
                <td>
                    {{ $hotel->hotel_name }}
                </td>
=======
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
>>>>>>> 2270ec20581842cf6cff3f08dd195492662a517c
            @endforeach
        </table>
    </div>
</body>

</html>
