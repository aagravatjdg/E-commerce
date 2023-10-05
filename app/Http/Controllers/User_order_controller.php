<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order_model;
use App\Models\Payment_Model;

// use App\Models\Seller_Products;




class User_order_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=auth()->user()->id;
        // $user = User::find($id);
        // $product  = Order_model::with('product')
        // // ->where('user_id', $id)
        // ->get();

        $product  = Order_model::with('product','user')
        ->where('user_id', $id)
        ->get();

        // $pay=Payment_Model::find('2');
        // dd($pay->status);
        return view('User_panel.user_manage_order',compact('product'));

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
