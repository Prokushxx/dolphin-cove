@extends('layouts.navbar')

@section('content')
  
<h1>View Programs</h1>

<table>
<tr>
  <th>Program name</th>
  <th>Program prie</th>
</tr>

@foreach ($programs as $prog)
  
<tr>
  <td>{{ $prog->p_name }}</td>
  <td>{{ $prog->p_costs }}</td>
  <td><a href="{{ route('program.edit',$programs->p_id) }}"><button>EDIT</button></a></td>
  {{-- @method('delete') --}}
  <td><a href="{{ route('program.destroy',$programs->p_id) }}"><button>Delete</button></a></td>
</tr>

@endforeach
</table>

@endsection