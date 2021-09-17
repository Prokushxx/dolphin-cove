@extends('layouts.navbar')
    @section('content')
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
@endsection