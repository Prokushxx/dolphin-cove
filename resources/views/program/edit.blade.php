@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Edit Hotel</h1>
        <form action="{{ route('program.update', $program->p_id) }}" method="post">
            @csrf
            <div>
                <input type="hidden" name="hotel_id">
            </div>
            <div>
                <input type="text" name="hotel_name">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</main>


@endsection