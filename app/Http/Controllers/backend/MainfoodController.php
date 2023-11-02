<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mainfood;
use RealRashid\SweetAlert\Facades\Alert;
use Str;

class MainfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $data = Mainfood::get();
        return view('backend.mainfood.view', ['data' => $data, 'active' => 'mainfood']);
    }

    public function add()
    {
        $data = Mainfood::get();
        return view('backend.mainfood.add', ['active' => 'mainfood','data' => $data]);
    }

    public function updated($id)
    {
        $data = Mainfood::where('id', $id)->first();
        return view('backend.mainfood.update', ['data' => $data, 'active' => 'mainfood']);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string|min:3|max:255',

            ]
        );

        $mainfood = new Mainfood;
        $mainfood->id=Str::orderedUuid();
        $mainfood->name = $request->name;
        $mainfood->save();
        Alert::success('Success', 'Main Food added successfully');
        return redirect('admin/mainfood');
    }


    public function edit(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string|min:3|max:255',
 
            ]
        );

        $data = $request->input();
        $mainfood = Mainfood::where('id', $request->id)->first();
        $mainfood->name = $data['name'];
        $mainfood->save();
        Alert::success('Success', 'Main Food updated successfully');
        return redirect('admin/mainfood');


    }

    public function delete($id)
    {
        $mainfood = Mainfood::where('id', $id)->first();
        $mainfood->delete();
        Alert::success('Success','Main Food Deleted successfully');
        return redirect('admin/mainfood');
    }

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
