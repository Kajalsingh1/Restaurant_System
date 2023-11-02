<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Mainfood;
use Illuminate\Http\Request;
use App\Models\Items;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function itemview()
    {
        $data = Items::get();
        return view('backend.item.view', ['data' => $data, 'active' => 'item']);
    }

    public function additem()
    {
        $categories = Category::get();
        $mainfood=Mainfood::get();
        return view('backend.item.add', ['active' => 'item', 'categories' => $categories,'mainfoods'=>$mainfood]);
    }

    public function updateitem($id)
    {
        $items = Category::get();
        $mainfood=Mainfood::get();
        $data = Items::where('id', $id)->first();
        return view('backend.item.update', ['data' => $data, 'active' => 'item', 'items' => $items, 'mainfoods'=>$mainfood]);
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
    public function storeitem(Request $request)
    {
        $this->validate(
            $request,
            [
                'category' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|int',
                'imgpath' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'

            ]
        );
        // dd($request);
        $checkId = Items::orderBy('id', 'desc')->first();
        if ($checkId) {
            $olditem = $checkId->itemid;
            $firstPick = substr($olditem, 0, 3);
            $lastPick = substr($olditem, 3);
            $itemid = $firstPick . $lastPick + 1;
        } else {
            $itemid = "ITM1000";
        }


        $data = $request->input();
        $item = new Items;
        $item->itemid = $itemid;
        $item->category = $request->category;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;

        $path = $request->file('imgpath')->store('public/images');

        $item->imgpath = $path;

        $item->save();
        Alert::success('Success', 'Item added successfully');
        return redirect('admin/item');
    }



    public function edit(Request $request)
    {

        $this->validate(
            $request,
            [
                'category' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',


            ]
        );

        $data = $request->input();
        $item = Items::where('id', $request->id)->first();
        $item->category = $data['category'];
        $item->name = $data['name'];
        $item->description = $data['description'];
        $item->price = $data['price'];
        if ($request->imgpath) {
            $this->validate($request, [
                'imgpath' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);
            $path = $request->file('imgpath')->store('public/images');
            $item->imgpath = $path;
        }
        $item->save();
        Alert::success('Success', 'Category updated successfully');
        return redirect('admin/item');


    }

    public function delete($id)
    {
        $student = Items::where('id', $id)->first();
        $student->delete();
        Alert::success('Success', 'Item Deleted successfully');
        return redirect('admin/item');
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
    public static function catname($id){
        $data=Category::where('id',$id)->first();
        if($data){
            return $data->name;
        }else{
            $data=Mainfood::where('id',$id)->first();
            return $data->name;
        }
    }


}
