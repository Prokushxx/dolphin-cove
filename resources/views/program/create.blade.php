<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProgramSelection</title>
</head>

<form action="{{ route('program.store') }}" method="post">
@csrf   
    <h1>Programs Selection</h1>
    <form>
        <div>
            <label for="p_name">p_name</label><br>
            <input type="text" id="p_name" name="p_name"><br>
        </div>
        <div>
            <label for="p_costs"></label><br>
            <input type="text" id="p_cost" name="p_costs">
        </div>
        <div>
        <input type="submit" value="Submit">
        </div>
    </form>
</form>