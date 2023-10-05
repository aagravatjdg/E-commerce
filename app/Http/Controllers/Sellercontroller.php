<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Party;

use Illuminate\Http\Request;

class Sellercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role=auth()->user()->id;
        $image=auth()->user()->profile_pic;

        $users = User::find($role);

        return view('Seller_panel.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id=11;
        echo "create ";
        $party = Party::with('user')->find($id); // Retrieve a specific party by ID
        echo $party->user->email;
        echo $party->id;
        dd($party);

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
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "delete";
    }
}
