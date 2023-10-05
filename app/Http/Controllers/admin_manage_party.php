<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class admin_manage_party extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Party::all();
        return view('Admin_Panel.admin_manage_party',compact('user'));
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
        $user = Party::where('company_id', $id)->get();
        foreach($user as $a)
        {
          $id= $a->id;
        }

        $party = Party::with('user')
        ->where('id', $id)
        ->first(); // Retrieve a specific party by ID

        // echo $party->user->name;
        // echo $party->id;

        return view('Admin_Panel.admin_company_profile_view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=Party::find($id);
        return view('Admin_Panel.admin_edit_company',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'company_name' => 'required|min:2|',
            'address' => 'required|min:2|',
            'city' => 'required|min:2|',
            'state' => 'required|min:2|',
            'zip' => 'required|min:3|',
    ]);

        $a = $request->input('company_name');
         $b = $request->input('address');
         $c = $request->input('state');
         $d = $request->input('city');
         $e = $request->input('zip');



         $user = Party::findOrFail($id);
            $user->company_name = $a;
            $user->address = $b;
            $user->state = $c;
            $user->city = $d;
            $user->zip = $e;


            $user->save();

            return redirect('admin-manage-party')->with('success', 'Company Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Party::where('id',$id)->delete();
        return redirect('admin-manage-party')->with('success', 'Company Deleted Successfully');
    }

    public function company_verify($id)
    {
        $user=Party::find($id);
        $data = Party::where('company_id',$id)->update(['status' => 'Verified']);
        return redirect('admin-manage-party')->with('success', 'Company Verified Successfully..!!');


    }
}
