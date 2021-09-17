@extends('layouts.navbar')
    @section('content')
    <div>
        <h1>Edit Program</h1>
        <form action="{{ route('program.update', $program->p_id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <input type="hidden" name="p_id">
            </div>
            <div>
              <Label>Program name</Label><br>
                <input type="text" name="p_name" value="{{ $program->p_name }}">
            </div>
            <div>
             <Label>Program Cost</Label><br>
              <input type="number" name="p_costs" value="{{ $program->p_costs }}">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
@endsection