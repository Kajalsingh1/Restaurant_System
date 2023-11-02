<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use RealRashid\SweetAlert\Facades\Alert;

class TableController extends Controller
{
    public function view()
    {
        $data = Table::get();
        return view('backend.table.view', ['data' => $data, 'active' => 'table']);
    }

    public function add()
    {
        return view('backend.table.add', ['active' => 'table']);
    }

    public function updated($id)
    {
        $data = Table::where('id', $id)->first();
        return view('backend.table.update', ['data' => $data, 'active' => 'table']);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string|min:3|max:255',

            ]
        );
        //dd($request->name);
        $category = new Table;
        $category->name = $request->name;
        $category->save();
        Alert::success('Success', 'Table added successfully');
        return redirect('admin/table');
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
        $category = Table::where('id', $request->id)->first();
        $category->name = $data['name'];
        $category->save();
        Alert::success('Success', 'Table updated successfully');
        return redirect('admin/table');


    }


    public function delete($id)
    {
        $category = Table::where('id', $id)->first();
        $category->delete();
        Alert::success('Success','Table Deleted successfully');
        return redirect('admin/table');

    }
}
