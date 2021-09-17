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
</body>

</html>
