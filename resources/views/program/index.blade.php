@extends('layouts.navbar')
    @section('content')
    <div>
        <h1>List of Programns</h1>
        <table>
            <tr>
               
                <th>Name</th>
                <th>Modify</th>
            </tr>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->p_name }}</td>
                    <td>
                        <a href="{{ route('program.edit', $program->p_id) }}">edit</a>
                        <form class="" action=" {{ route('program.destroy', $program->p_id) }}" method="post"
                            onsubmit="return confirm('Are you sure you want to delete {{ $program->p_name }} program?');">
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
@endsection
