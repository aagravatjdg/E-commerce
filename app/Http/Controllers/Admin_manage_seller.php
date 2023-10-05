<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Admin_manage_seller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::where('user_type','Seller')->get();
        return view('Admin_Panel.admin_manage_seller',compact('user'));
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
        $user=User::find($id);
        return view('Admin_Panel.admin_seller_profile_view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=User::find($id);
        return view('Admin_Panel.admin_edit_seller',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $c = $request->input('email');
         $a = $request->input('name');
         $b = $request->input('number');
         $d = $request->input('status');


        $request->validate(
            [
                'name' => 'required|max:20|min:2',
                'number' => 'required|max:10|min:10',
            ]
        );
        $user = User::findOrFail($id);
        if ($user->email == $c) {
            $user->name = $a;
            $user->number = $b;
            $user->status = $d;
            $user->email = $c;
            $user->save();

            return redirect('admin-manage-seller')->with('success', 'Profile Updated Successfully');
        }
        else
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'number' => ['required', 'max:10','min:10'],
                'name'=>['required'],
            ]);
            $user->name = $a;
            $user->number = $b;
            $user->email = $c;
            $user->status = $d;

            $user->save();

            return redirect('admin-manage-seller')->with('success', 'Profile Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::where('id',$id)->update(['status' => 'Delete']);
        return redirect('admin-manage-seller')->with('success', 'User Deleted Successfully');

    }
}
