<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Registration;
use Hash;
use Validator;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = Admin::count();
        return view('backend.login', ['active' => 'login', 'totaladmin' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        $count = Admin::count();
        if (!$count) {
            return view('backend.registration');
        } else {
            return redirect('admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|min:4|max:15',
                'retype_password' => 'required|same:password'
            ]
        );
        //dd($request->name);
        $data = $request->input();
        $student = new Admin;
        $student->name = $request->name;
        $student->email = $data['email'];
        $student->password = Hash::make($data['password']);
        $student->save();
        return redirect('admin/')->with('status', "Insert successfully");


    }

    /**
     * Display the specified resource.
     */
    public function login(Request $request)
    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth:: guard('admin')-> attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('admin');


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
