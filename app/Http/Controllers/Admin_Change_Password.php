<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;



class Admin_Change_Password extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin=auth()->user()->id;
        $users = User::find($admin);
        return view('Admin_Panel.admin_change_password',compact('users'));
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

        $admin = auth()->user();
        $aadmin = $admin->password;

        $request->validate([
            'old-password' => ['required', new MatchOldPassword], // Assuming MatchOldPassword is a custom validation rule as previously discussed
            'new-password' => ['required', 'min:8'], // Add more password validation rules as needed
            'confirm_password' => ['same:new-password'],
        ]);

        $id = $request->input('old-password');
        $a = $request->input('new-password');
        $b = $request->input('confirm_password');

        $user = User::find($admin->id); // You can use find() directly if you want to update the authenticated user's password.

        $old = Hash::check($id, $aadmin);

        if (!$old) {
            // Passwords don't match, handle the error or return a response
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        // Update the user's password
        $user->password = Hash::make($a);
        $user->save();

        return back()->with('success', 'Password updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
