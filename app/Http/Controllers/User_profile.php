<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class User_profile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin=auth()->user()->id;
        $user = User::find($admin);

        return view('User_panel.User_profile',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create";
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
        $id=auth()->user()->id;
        $a=$request->input('name');
        $b=$request->input('number');
        $c=$request->input('email');

        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'max:10','min:10'],
        ]);
        $user = User::findOrFail($id);
        if ($user->email == $c) {

            $request->validate([

                'number' => ['required', 'max:10','min:10'],

            ]);

            $user->name = $a;
            $user->number = $b;

            $user->save();


            return back()->with('success', 'Profile Updated Successfully');
        }
        else
        {
            $request->validate([

                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'number' => ['required', 'max:10','min:10'],

            ]);
            $user->name = $a;
            $user->number = $b;
            $user->email = $c;
            $user->save();


            return back()->with('success', 'Profile Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "destroy";
    }
}
