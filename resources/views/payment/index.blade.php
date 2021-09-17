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
        <h1>Reservations</h1>
        <table>
            <tr>
                <th>Company Name</th>

            </tr>
            <tr>
                @foreach ($collection as $item)
                    <td>Sandals</td>
                    <td>Walk-In</td>
                @endforeach
            </tr>
        </table>
    </div>
</body>
</html>
