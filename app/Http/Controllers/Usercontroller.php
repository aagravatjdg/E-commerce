<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller_Products;
use App\Models\Order_model;
use App\Models\Index_model;



use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sites = Index_model::where('id','1')->get();

        $role=auth()->user()->id;
        $image=auth()->user()->profile_pic;


        $users = User::find($role);

        session(['key' => $image]);
        return view('User_after_login_panel.index',compact('users','sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id=auth()->user()->id;
        $p_id=$request->input('product_id');
        $p_size=$request->input('product-size');
        $p_qty=$request->input('product-quanity');
        $p_name=$request->input('product_title');

        $shoes = Seller_Products::where('id',$p_id)->first();

        return view('User_after_login_panel.buy_now',compact('shoes','p_size','p_qty'));

        echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $role=auth()->user()->id;
        $image=auth()->user()->profile_pic;


        $users = User::find($role);

        session(['key' => $image]);
        return view('User_panel.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        echo $id=auth()->user()->id;
        $order=new Order_model();

        $p_id = request('p_id');

        $order->user_name=$request->input('name');
        $order->size=$request->input('size');
        $order->quantity=$request->input('quantity');
        $order->price=$request->input('price');
        $order->address=$request->input('address');
        $order->state=$request->input('state');
        $order->city=$request->input('city');
        $order->zip=$request->input('zip');
        $order->product_id=$p_id;
        $order->user_id=$id;
        // dd($order);
        $order->save();

        return redirect('index_user')->with('success','Order Placed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        echo "delete";
    }

    public function index_view(Request $request)
    {
        $sites = Index_model::where('id','1')->get();

               return view('User_after_login_panel.index',compact('sites'));
    }

    public function about_view(Request $request)
    {
               return view('User_after_login_panel.about');
    }

    public function contact_view(Request $request)
    {
               return view('User_after_login_panel.contact');
    }

    public function shop_view(Request $request)
    {
        $products=Seller_Products::where('status','Active')->get();

               return view('User_after_login_panel.shop',compact('products'));
    }

    public function shop_single_view($id)
    {
                // echo $id;
        $products=Seller_Products::where('id',$id)->get();

               return view('User_after_login_panel.shop-single',compact('products'));
    }
    public function abc()
    {
        echo "abc";
    }


}
