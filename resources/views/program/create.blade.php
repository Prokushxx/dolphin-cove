@extends('layouts.navbar')
    @section('content')
<form action="{{ route('program.store') }}" method="post">
@csrf   
    <h1>Programs Selection</h1>
    <form>
        <div> 
          <input type="hidden" name="p_id" id="p_id">
          <span style="color: red">@error('p_name')
          {{ $message }}
        @enderror</span><br>
            <label for="p_name"> Program Name</label><br>
            <input type="text" id="p_name" name="p_name" value="{{ old('p_name') }}" required><br>
        </div>
        <div>
            <label for="p_costs">Program Cost</label><br>
            <input type="number" id="p_cost" name="p_costs" value="{{ old('p_costs') }}" required>
        </div>
        <div>
        <input type="submit" value="Submit">
        </div>
    </form>
</form>
@endsection