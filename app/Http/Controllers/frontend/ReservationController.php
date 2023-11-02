<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Table::get();
        return view('frontend.reservation', ['data' => $data]);

    }


    public function insert(Request $request)
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
        // dd($request->all());

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

        // dd('test');

        $reservation->save();
        return redirect('reservation');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
