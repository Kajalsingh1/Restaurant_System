<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Mainfood;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('frontend.menu');
        $items = array();
        $datas = Category::get();
        foreach ($datas as $data) {
            $res = Items::where('category', $data->id)->get();
            $items[] = $res;
        }

        $fooditem = array();
        $foods = Mainfood::get();
        foreach ($foods as $food) {
            $res = Items::where('category', $food->id)->get();
            $fooditem[] = $res;
        }
        // dd($item);
        // $item = Items::get();
        return view('frontend.menu', ['categories' => $datas, 'items' => $items, 'foods'=> $foods, 'fooditems' => $fooditem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
