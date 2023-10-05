<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_model;


class Seller_manage_orders extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product  = Order_model::with('product','user')->get();
        return view('Seller_panel.seller-manage-orders',compact('product'));

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
