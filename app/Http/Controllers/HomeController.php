<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $role=auth()->user()->user_type;

        if($role==='User')
        {
            echo "u are user";
            return redirect('user-panel');
        }

        elseif($role==='Seller')
        {
            echo "u are sessler";
            return redirect('seller-panel');
        }

        elseif($role==='Admin')
        {
            echo "U are admin";
            // return view('home');
            return redirect('admin-panel');

        }

        else
        {
            return redirect()->back();
        }
        // return view('home');
    }
}
