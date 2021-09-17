@extends('layouts.navbar')

@section('content')

<main>
    <div>
        <h1>Enter Program Name</h1>
        <form action="{{ route('program.store') }}" method="post">
            @csrf
            <div>
                <input type="text" name="program_name">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</main>

@endsection
