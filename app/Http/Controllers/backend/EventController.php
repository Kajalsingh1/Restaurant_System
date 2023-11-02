<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function eventview()
    {
        $data = Events::get();
        return view('backend.event.view', ['data' => $data, 'active' => 'event']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addevent()
    {
        return view('backend.event.add',['active'=>'event']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeevent(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'imgpath' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                // 'imgpath'=> 'required',

            ]
        );
        //dd($request->name);
        $data = $request->input();
        $event = new Events;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;

        // $event->imgpath = $request->imgpath;
        // $size = $request->file('imgpath')->getSize();
        // $name = $request->file('imgpath')->getClientOriginalName();

        $path=$request->file('imgpath')->store('public/event');
        $event->imgpath = $path;

        $event->save();
        Alert::success('Success','Item added successfully');
        return redirect('admin/event');
    }

    public function updateevent($id)
    {
        $data = Events::where('id', $id)->first();
        return view('backend.event.update', ['data' => $data, 'active' => 'event']);
    }

    public function edit(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
            ]
        );

        $data = $request->input();
        $event = Events::where('id', $request->id)->first();
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->startdate = $data['startdate'];
        $event->enddate = $data['enddate'];

        if ($request->imgpath) {
            $this->validate($request, [
                'imgpath' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);
            $path = $request->file('imgpath')->store('public/event');
            $event->imgpath = $path;
        }

        $event->save();
        Alert::success('Success', 'Category updated successfully');
        return redirect('admin/event');


    }

    public function delete($id)
    {
        $event = Events::where('id', $id)->first();
        $event->delete();
        Alert::success('Success','Item Deleted successfully');
        return redirect('admin/event');
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
    // public function edit(string $id)
    // {
    //     //
    // }

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
