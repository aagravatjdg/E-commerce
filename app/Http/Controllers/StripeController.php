<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order_model;
use App\Models\Payment_Model;


class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request,string $id)
    {
        $p_id=$id;
        $userid = auth()->user()->id;

        $product = Order_model::with('product', 'user')
            ->where('id', $p_id)
            ->get();
        
        foreach ($product as $data) {
             $name=$data->product->product_title;
             $price=$data->price;
             $qun=$data->quantity; 
             $pid=$data->product_id;
             $uname=$data->user_name; 
             $userid;

        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // $productname = $request->get('productname');
        // $totalprice = $request->get('total');
        $name;
        $price;
        // $two0 = "00";
        $total = "$price";

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'INR',
                        'product_data' => [
                            "name" => $name,
                        ],
                        'unit_amount'  => $price.'00',
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        $affectedRows = Order_model::where('id', $p_id)
        ->update([
            'count' => '1',
        ]);


        $data=new Payment_Model();

        $data->user_id=$userid;
        $data->user_name=$uname;
        $data->product_id=$pid;
        $data->product_name=$name;
        $data->product_price=$price;
        $data->product_quantity=$qun;
        $data->status='Done';

        $data->save();

        // return redirect()->back()->with('success','Data Added Successfully..!!!');

        return redirect()->away($session->url);
    }

    public function success()
    {
        
        return redirect('user_panel_order')->with('success','Payment Done Successfully');
        // return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
}
