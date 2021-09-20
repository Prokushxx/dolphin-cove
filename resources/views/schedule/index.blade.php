@extends('layouts.navbar')

@section('content')
    <main>

        <H1>Schedules</H1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div>
            <a href="{{ route('schedule.create') }}">Create Schedule</a>
        </div>


        <div>
            <table>
                <tr>
                    <th>PROGRAM</th>
                    <th>PROGRAM DATE</th>

                    <th>OPTIONS</th>
                    </th>
                </tr>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->p_name }}</td>
                        <td>{{ date('jS F Y', strtotime($schedule->exc_date)) }}</td>

                        <td>
                            <a href="{{ route('schedule.edit', $schedule->schedule_id) }}">Edit</a>
                            <form class="" action=" {{ route('schedule.destroy', $schedule->schedule_id) }}"
                                method="post"
                                onsubmit="return confirm('Are you sure you want to delete this {{ $schedule->p_name }} schedule?');">
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

        <div>

        </div>
    </main>
@endsection
