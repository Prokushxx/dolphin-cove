<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Patron;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::paginate(5);
        return view('hotel.index', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'hotel_name' => 'unique:hotels,hotel_name'
        ], [
            'unique' => '*This hotel already exists'
        ]);

        Hotel::create([
            'hotel_name' => $request->hotel_name,
        ]);

        if ($val) {
            $hotels = Hotel::all();
            return view('hotel.index', ['hotels' => $hotels]);
        } else {
            return back()->withErrors($val);
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
        $hotels = Hotel::find($id)
                    ->where('patron_id', '=', $id)
                    // ->pluck('patron_id')
                    ->join('hotels', 'hotel.hotel_id', '=', 'patron.patron_id')
                    ->select(['patrons.*', 'hotels.hotel_id']);
        
        // dd($showPatron);
        return view('hotel.show', ['hotels' => $hotels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hotel.edit', ['hotel' => $hotel]);
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
            'hotel_name' => 'required|unique:hotels,hotel_name,' . $id . ',hotel_id',
        ]);

        $hotel = Hotel::find($id);
        $hotel->hotel_name = $request->hotel_name;
        $hotel->save();

        return redirect(route('hotel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotels = Hotel::where('hotel_id', $id);
        $hotels->delete();
        return redirect(route('hotel.index'));
    }
}
