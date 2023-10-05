<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_model;


class Site_contact_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Contact_model::all();
        return view('Admin_Panel.admin_manage_contact',compact('data'));
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
        $data=new Contact_model();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');

        $data->save();

        return redirect()->back()->with('success','Data Added Successfully..!!!');
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
        $users=Contact_model::where('id',$id)->get();
        return view('Admin_Panel.admin_edit_contact',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users=Contact_model::where('id',$id)->get();

        $affectedRows = Contact_model::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect('site-contact')->with('success', 'Contact Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Contact_model::where('id',$id)->delete();
        return redirect('site-contact')->with('success', 'Contact Data Deleted Successfully');
    }
}
