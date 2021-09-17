<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservation</title>
</head>
<body>
  <form action="{{route()}}">
    <button type="submit">Add Company</button>
    <table>
      @csrf
        <th>
          Company Name
        </th>
      @foreach ($reservations as $reservation )
       <tr>
         <td>{{ $reservation->company_name }}</td>
       </tr>
      @endforeach
    </table>
  </form>
</body>
</html>