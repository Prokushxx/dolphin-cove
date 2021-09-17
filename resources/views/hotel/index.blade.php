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
                <td>
                    {{ $hotel->hotel_id }}
                </td>
                <td>
                    {{ $hotel->hotel_name }}
                </td>
            @endforeach
        </table>
    </div>
</body>
</html>
