@extends('layouts.navbar')
@section('content')
    <div>
        <h1>List of Programns</h1>
        <table>
            <tr>
                <th>Program Id</th>
                <th>Nam</th>
                <th>Modify</th>
            </tr>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->p_name }}</td>
                    <td>
                        <a href="{{ route('program.edit', $program->p_id) }}">edit</a>
                    </td>
                      <td>  <form class="" action=" {{ route('program.destroy', $program->program_id) }}" method="post"
                            onsubmit="return confirm('Are you sure you want to delete {{ $program->p_name }} program?');">
                            @csrf
                            @method('DELETE')
                            <button class="">
                                Delete
                            </button></td>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
