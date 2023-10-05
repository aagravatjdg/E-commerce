<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_model;
use App\Models\Payment_Model;


class Admin_manage_orders extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = Order_model::select('order_detail.*','seller_product.*','company_detail.*','users.*')
        // ->join('seller_product', 'order_detail.product_id', '=', 'seller_product.product_id')
        // ->join('company_detail', 'seller_product.company_id', '=', 'company_detail.company_id')
        // ->join('users', 'order_detail.user_id', '=', 'users.id')
        // ->get();

        $product  = Order_model::with('product','user')->get();

        // dd($product);

        return view('Admin_Panel.admin_manage_orders',compact('product'));

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
    public function show()
    {
        $pay  = Payment_Model::with('product','user')->get();
        // $product  = Order_model::with('product','user')->get();
        $array = [];
        foreach($pay as $a)
        // {
        //     $array[$a->id]= $a->status;
        // }
         $ppp=$a->status;
        // dd($array);  

        return view('Admin_Panel.admin_manage_payment',compact('ppp','pay'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=Order_model::where('id',$id)->get();
        return view('Admin_Panel.admin_edit_order',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users=Order_model::where('id',$id)->first();
        $affectedRows = Order_model::where('id', $id)
        ->update([
            'status' => $request->input('status'),
        ]);
        return redirect('admin-manage-orders')->with('success','Order Status Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Order_model::where('id',$id)->delete();
        return redirect('admin-manage-orders')->with('success', 'Order Deleted Successfully');
    }
}
