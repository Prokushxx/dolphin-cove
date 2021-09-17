@extends('layouts.navbar')
    @section('content')
    <div>
        <h1>Edit Program</h1>
        <form action="{{ route('program.update', $program->p_id) }}" method="post">
            @csrf
           
            <div>
                <input type="hidden" name="p_id">
            </div>
            <div>
                <input type="text" name="p_name">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
@endsection