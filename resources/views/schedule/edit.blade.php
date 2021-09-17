@extends('layouts.navbar')

@section('content')
<form action="{{ route('schedule.update') }}" method="post">
    @foreach ($programs as $program)
    <option value="{{ $program->p_id }}">{{ $program->p_name }}</option><br>
    @endforeach
    <input type="date" name="exc_date"></td>

    <button type="submit">confirm</button>
</form>
    
@endsection