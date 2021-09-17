<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('reservation.update', $reservations->reservation_id) }}" method="post"></form>
  @csrf
  <table>
    <th>Edit Company</th>
    <tr>
      <td>
        <input type="hidden" name="reservation_id">
        <input type="text" name="reservation_name">
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit">Update</button>
      </td>
    </tr>
  </table>
  
</body>
</html>