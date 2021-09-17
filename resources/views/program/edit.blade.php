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
</body>

</html>