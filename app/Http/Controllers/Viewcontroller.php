<?php

namespace App\Http\Controllers;

use App\Models\Seller_Products;
use App\Models\Index_model;
use App\Models\Contact_model;


use Illuminate\Http\Request;



class Viewcontroller extends Controller
{
    //
    public function index_view(Request $request)
    {
        $sites = Index_model::where('id','1')->get();

               return view('site.index',compact('sites'));
    }

    public function about_view(Request $request)
    {
               return view('Site.about');
    }

    public function contact_view(Request $request)
    {
               return view('Site.contact');
    }

    public function shop_view(Request $request)
    {
        $products=Seller_Products::where('status','Active')->get();

               return view('Site.shop',compact('products'));
    }

    public function shop_single_view($id)
    {
                // echo $id;
        $products=Seller_Products::where('id',$id)->get();

               return view('Site.shop-single',compact('products'));
    }

    public function before_login()
    {
        return redirect('login')->
        with('error', 'Sorry first you have to register or login..!!');
    }

    public function contact_data(Request $request)
    {
        $data=new Contact_model();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');

        $data->save();

        return redirect()->back()->with('success','Data Added Successfully..!!!');
    }
}
