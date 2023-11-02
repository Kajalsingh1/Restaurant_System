<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $data = Slider::get();
        return view('backend.slider.view', ['data' => $data, 'active' => 'slider']);
    }

    public function add()
    {
        return view('backend.slider.add',['active'=>'slider']);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'text1' => 'required',
                'text2' => 'required',


            ]
        );

        $data = $request->input();
        $slider = new Slider;
        // $path = $request->file('image')->store('public/category');
        $path = $request->file('image')->store('public/slider');
        $slider->image = $path;
        $slider->text1 = $request->text1;
        $slider->text2 = $request->text2;


        $slider->save();
        Alert::success('Success', 'Slider added successfully');
        return redirect('admin/slider');
    }

    public function update($id)
    {
        $data = Slider::where('id', $id)->first();
        return view('backend.slider.update', ['data' => $data, 'active' => 'slider']);
    }

   public function edit(Request $request)
   {
       $this->validate(
           $request,
           [
               'text1' => 'required',
               'text2' => 'required',
           ]
       );

       $data = $request->input();
       $slider = Slider::where('id', $request->id)->first();
       $slider->text1 = $data['text1'];
       $slider->text2 = $data['text2'];

       if ($request->image) {
           $this->validate($request, [
               'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
           ]);
        //    $path = $request->file('image')->store('public/images');
        $path = $request->file('image')->store('public/slider');
           $slider->image = $path;
       }
    //    dd($request->all());


       $slider->save();
       Alert::success('Success', 'Category updated successfully');
       return redirect('admin/slider');


   }

   public function delete($id){
    $slider = Slider::where('id',$id)->first();
    $slider->delete();
    Alert::success('Success', 'Slider Deleted successfully');
    return redirect('admin/slider');
}

}
