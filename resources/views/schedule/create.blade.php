@extends('layouts.navbar')

@section('content')
<form action="{{ route('schedule.store') }}" method="post">
    @foreach ($programs as $program)
    <option value="{{ $program->p_id }}">{{ $program->p_name }}</option><br>
    @endforeach
    <input type="date" name="exc_date"></td>

    <button type="submit">Submit</button>
</form>
    
@endsection