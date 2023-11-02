<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $data = Reservation::get();
        return view('backend.reservation.view', ['data' => $data, 'active' => 'reservation']);
    }

    public function add()
    {
        $table = Reservation::get();
        return view('backend.reservation.add', ['active' => 'reservation', 'tables' => $table]);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'date' => 'required',
                'time' => 'required',
                'people' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'table' => 'required',

            ]
        );
        //dd($request->name);
        $data = $request->input();
        $reservation = new Reservation;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->people = $request->people;
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->table = $request->table;


        $reservation->save();
        Alert::success('Success','Data added successfully');
        return redirect('admin/reservation');
    }

    public function delete($id)
    {
        $event = Reservation::where('id', $id)->first();
        $event->delete();
        Alert::success('Success','Data Deleted successfully');
        return redirect('admin/reservation');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
