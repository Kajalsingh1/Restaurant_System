<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Events;
use App\Models\Table;
use App\Models\Reservation;
class HomeController extends Controller
{
    public function index(){
        // return view('frontend.home');
        $data = Category::get();
        $slider = Slider::get();
        $event = Events::get();
        $table = Table::get();
        return view('frontend.home', ['data' => $data,'sliders' => $slider, 'events'=> $event, 'table'=> $table]);

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
        return redirect('/');
    }
}
