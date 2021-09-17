@extends('layouts.app')

@section('content')

<form action="" method="POST">

  @csrf
<input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>    
<input type="number" name="phone" placeholder="Phone Number" {{ old('phone') }}><br>   
<Label for="book_date">Booking Date</Label><br>   
<input type="date" name="book_date" placeholder="Booking Date"><br>   
<Label>HOTEL</Label><br>
<select name="hotel" id="hotel">
  <option value="sandals">Sandals</option><br>    
  <option value="Jamaica Grand">Jamaica Grand</option><br>    
  <option value="Jamaica Grand">RIU</option><br>    
  <option value="Jamaica Grand">None</option><br>   
</select><br>   
<Label>Program</Label><br>
<select name="Program" id="">
  <option value="Scuba">Scuba</option><br>    
  <option value="Swimming">Swimming</option><br>    
  <option value="Zip lining">Zip lining</option><br>    
  <option value="Diving">Diving</option><br>    
</select><br>   
<LAbel for="status">Status</LAbel><br>
<select name="status" id="">   
  <option value="Pending">Pending</option>   
  <option value="Paid">Paid</option>
</select><br>   
<label for="pay_method">Payment Method</label><br>
<select name="pay_method" id="">
  <option value="cash">Cash</option> 
  <option value="credit">Credit</option> 
</select><br>   
<input type="submit" value ="Submit Booking">
</form>

@endsection