<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>List of Programns</h1>
        <table>
            <tr>
                <tr>Program Id</tr>
                <th>Name</th>
                <th>Modify</th>
            </tr>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->p_name }}</td>
                    <td>
                        <a href="{{ route('program.edit', $program->p_id) }}">edit</a>
                        <form class="" action=" {{ route('program.destroy', $program->program_id) }}" method="post"
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
</body>

</html>