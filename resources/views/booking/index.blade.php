@extends('layouts.navbar')

@section('content')

<H1>LIST OF BOOKINGS</H1>

<table>
  <tr>
    
    <th>EMAIL</th>
    <th>BOOKING DATE</th>
    <th>HOTEL</th>
    <th>PROGRAM</th>
    <th>PAYMENT METHOD</th>
  
  </tr>
  @foreach ($booking as $data)
  <tr>
  <td>{{ $data->email }}</td>  
  <td>{{ $data->current_date }}</td>  
  <td>{{ $data->hotel_name }}</td>  
  <td>{{ $data->p_name }}</td>  
  <td>{{ $data->payment_method }}</td>  
  </tr>  

  @endforeach
</table>

@endsection