@extends('layouts.navbar')

@section('content')
    <main>
        <h1>Edit Program Schedule</h1>

        <form action="{{ route('schedule.update', $current_schedule->schedule_id) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="">Program</label>
                <select name="program_id" id="program">
                    @foreach ($programs as $program)
                        <option value="{{ $program->p_id }}"
                            {{ $program->p_id === $current_schedule->p_id ? 'selected' : '' }}>
                            {{ $program->p_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">Program Date</label>
                <input type="date" name="exc_date" value="{{ $current_schedule->exc_date }}">
            </div>

            <button type="submit">confirm</button>
        </form>
    </main>

@endsection
