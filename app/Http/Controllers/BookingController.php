<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Patron;
use App\Models\Reservation;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings =
            DB::table('bookings')
            ->join('patrons', 'bookings.patron_id', '=', 'patrons.patron_id')
            ->join('reservations', 'bookings.company_id', '=', 'reservations.company_id')
            ->join('hotels', 'bookings.hotel_id', '=', 'hotels.hotel_id')
            ->join('schedules', 'bookings.schedule_id', '=', 'schedules.schedule_id')
            ->join('programs', 'schedules.program_id', '=', 'programs.p_id')
            ->select('booking_id', 'f_name', 'l_name', 'email', 'hotel_name', 'p_name', 'p_costs', 'exc_date', 'reservations.company_name', 'bookings.created_at as date_booked', 'status', 'payment_method')
            ->get();

        return view('booking.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservations = Reservation::all();
        $hotels = Hotel::all();
        // $patrons = Patron::all();

        $program_schedules = DB::table('schedules')
            ->join('programs', 'schedules.program_id', '=', 'programs.p_id')
            ->select('schedule_id', 'p_name', 'p_costs', 'exc_date')
            ->get();

        return view('booking.create', compact('reservations', 'program_schedules', 'hotels'));
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
            'patron_id' => 'required',
            'company_id' => 'required',
            'hotel_id' => 'required',
            'schedule_id' => 'required',
            'status' => 'required',
            'payment_method' => 'required'
        ]);

        Booking::create($validated);

        return redirect(route('booking.index'))->with('message', 'Booking successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $current_patron = Patron::find($booking->patron_id);

        $reservations = Reservation::all();
        $hotels = Hotel::all();
        // $patrons = Patron::all();

        $program_schedules = DB::table('schedules')
            ->join('programs', 'schedules.program_id', '=', 'programs.p_id')
            ->select('schedule_id', 'p_name', 'p_costs', 'exc_date')
            ->get();

        return view('booking.edit', compact('reservations', 'program_schedules', 'hotels', 'booking', 'current_patron'));
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
        $validated = $request->validate([
            'patron_id' => 'required',
            'company_id' => 'required',
            'hotel_id' => 'required',
            'schedule_id' => 'required',
            'status' => 'required',
            'payment_method' => 'required'
        ]);

        $booking = Booking::find($id);

        // $booking->booking_id = $request->booking_id;
        $booking->patron_id = $request->patron_id;
        $booking->company_id = $request->company_id;
        $booking->hotel_id = $request->hotel_id;
        $booking->schedule_id = $request->schedule_id;
        $booking->status = $request->status;
        $booking->payment_method = $request->payment_method;
        $booking->update();

        return redirect(route('booking.index'))->with('message', 'Booking successfully created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return  redirect()->back();
    }

    /**
     * Search the patron table for specific patron.
     *
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function name_search(Request $request)
    {
        $patron = Patron::where('email', $request->email)->first();
        if (str_contains(url()->previous(), 'edit')) {
            return redirect()->back()->with('patron', $patron);
        }

        if ($patron) {
            return redirect(route('booking.create'))->with('patron', $patron);
        }

        return redirect(route('booking.create'))
            ->with('error', 'No customer with that email');
    }
}
