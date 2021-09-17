<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('program.index', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val=$request->validate([
            'p_name' => 'unique:programs,p_name',
      
        ],[
          'p_name.unique'=>'*This program already exists'
        ]);

        Program::create([
            'p_name' => $request->p_name,
            'p_costs' => $request->p_costs,
        ]);

        if ($val){
          $programs = Program::all();
          return view('program.index', ['programs' => $programs]);
        }

        else {
          return redirect()->back()->withErrors($val);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('program.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $program = Program::find($id);
        return view('program.edit', ['program' => $program]);
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
            'p_name' => 'required|unique:programs,p_name,' . $id . ',p_id'
        ]);

        $program = Program::find($id);
        $program->p_name = $request->p_name;
        $program->p_costs = $request->p_costs;
        $program->save();

        // dd($request->)
        $programs = Program::all();
        return view('program.index', ['programs' => $programs]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::destroy($id);
        redirect(route('program.index'));
    }
}
