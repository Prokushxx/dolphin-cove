<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservation</title>
</head>
<body>
  <table>
      <th>
        Company Name
      </th>
      @foreach ($reservations as $reservation )
       <tr>
         <td>{{$reservation->company_name}}</td>
         <a href="{{ route('reservation.edit', $reservation->company_id) }}">edit</a>
                <form class="" action=" {{route('reservation.destroy', $reservation->company_id)}}" method="post"
                     onsubmit="return confirm('Are you sure you want to delete {{$reservation->company_name}} company?');">
                    @csrf
                    @method('DELETE')
                    <button class="">
                    Delete
                   </button>
       </tr>
      @endforeach
    </table>
</body>
</html>