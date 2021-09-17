@extends('layouts.navbar')

@section('content')


<H1>CREATE PROGRAMS</H1>
<form action="{{ route('program.store') }}" method="POST">
@csrf
<br>
<input type="text" name="p_name" placeholder="Program name"><br>
<input type="number" name="p_costs" placeholder="Cost"><br>
<input type="submit" value="CREATE">
</form>

@endsection