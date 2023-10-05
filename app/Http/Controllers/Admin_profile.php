<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Admin_profile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin=auth()->user()->id;
        $users = User::find($admin);

        return view('Admin_Panel.admin_profile',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "hi";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo $id=auth()->user()->id;
        echo $a=$request->input('name');
        echo $b=$request->input('number');
        echo $c=$request->input('email');

        $request->validate([

            'name' => ['required', 'string', 'max:255'],
        ]);
        $user = User::findOrFail($id);
        if ($user->email == $c && $user->number == $b) {
            $user->name = $a;
            $user->save();
            session()->forget('name');

            session(['name' => $a]);

            return back()->with('success', 'Profile Updated Successfully');
        }
        else
        {
            $request->validate([

                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'number' => ['required', 'max:10', 'unique:users','min:10'],

            ]);
            $user->name = $a;
            $user->number = $b;
            $user->email = $c;
            $user->save();
            session(['name' => $a]);


            return back()->with('success', 'Profile Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
