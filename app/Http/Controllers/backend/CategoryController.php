<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $data = Category::get();
        return view('backend.category.view', ['data' => $data, 'active' => 'category']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('backend.category.add', ['active' => 'category']);
    }

    public function updated($id)
    {
        $data = Category::where('id', $id)->first();
        return view('backend.category.update', ['data' => $data, 'active' => 'category']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string|min:3|max:255',
                'imgpath' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

            ]
        );
        //dd($request->name);
        $category = new Category;
        $category->name = $request->name;
        $path = $request->file('imgpath')->store('public/category');
        $category->imgpath = $path;
        $category->save();
        Alert::success('Success', 'Category added successfully');
        return redirect('admin/category');
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
        $category = Category::where('id', $request->id)->first();
        $category->name = $data['name'];


        if ($request->imgpath) {
            $this->validate($request, [
                'imgpath' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);
            $path = $request->file('imgpath')->store('public/category');
            $category->imgpath = $path;
        }
        // dd($request->all());

        $category->save();
        Alert::success('Success', 'Category updated successfully');
        return redirect('admin/category');


    }

    public function delete($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        Alert::success('Success','Item Deleted successfully');
        return redirect('admin/category');

    }

    public function destroy(string $id)
    {
        //
    }


}
