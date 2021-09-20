<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = DB::table('schedules')
            ->join('programs', 'schedules.program_id', '=', 'programs.p_id')
            ->get();

        return view('schedule.index', ['schedules' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        return view('schedule.create', ['programs' => $programs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_id' => 'required',
            'exc_date' => 'required'
        ]);

        Schedule::create($validated);

        return redirect(route('schedule.index'))->with('message', 'Schedule created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('schedule.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current_schedule = DB::table('schedules')
            ->join('programs', 'schedules.program_id', '=', 'programs.p_id')
            ->where('schedules.schedule_id', '=', $id)
            ->select('p_id', 'schedule_id', 'p_name', 'exc_date')
            ->first();

        $programs = Program::all();
        return view('schedule.edit', compact('current_schedule', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'program_id' => 'required',
            'exc_date' => 'required'
        ]);


        $schedule = Schedule::find($id);
        $schedule->program_id = $request->program_id;
        $schedule->exc_date = $request->exc_date;
        $schedule->update();

        return redirect(route('schedule.index'))->with('message', 'Booking successfully created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::destroy($id);
        return  redirect()->back();
    }
}
