@extends('layouts.navbar')

@section('content')
    <form action="{{ route('schedule.store') }}" method="post">
        @csrf
        <div>
            <label>Programs</label>
            <select name="program_id" id="program">
                @foreach ($programs as $program)
                    <option value="{{ $program->p_id }}">{{ $program->p_name }}</option>
                @endforeach
            </select>

            @error('program_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="exc_date">Program Date</label>
            <input type="date" name="exc_date">

            @error('exc_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

@endsection
