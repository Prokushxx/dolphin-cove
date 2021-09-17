@extends('layouts.navbar')

@section('content')

<main>
   <div>
        <h1>List of Programs</h1>
        <table>
            <tr>
                <td>Program Id</td>
                <th>Program Name</th>
                <th>Modify</th>
            </tr>
            @foreach ($programs as $program)
                <tr>
                   <td>{{ $program->p_id }}</td>
                    <td>{{ $programs->p_name }}</td>
                    <td>
                        <a href="{{ route('program.edit', $hotel->hotel_id) }}">edit</a>
                        <form class="" action=" {{ route('program.destroy', $hotel->p_id) }}" method="post"
                            onsubmit="return confirm('Are you sure you want to delete {{ $program->p_name }} hotel?');">
                            @csrf
                            @method('DELETE')
                            <button class="">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</main>


@endsection