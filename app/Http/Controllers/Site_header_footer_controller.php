<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\site_header_footer;
use App\Models\Index_model;


class Site_header_footer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = site_header_footer::where('id','1')->get();
        // dd($site);
        return view('Admin_Panel.site_header_footer',compact('sites'));
        // echo "index";
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
        echo "show";
    }

    /**
     * Display the specified resource.
     */
    public function show(resource $resource)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resource $resource)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $data = site_header_footer::find($id);

        $affectedRows = site_header_footer::where('id', $id)
        ->update([
            'gmail' => $request->input('gmail'), // Change field1 to the new value
            'number' => $request->input('number'),
            'address' => $request->input('address'),
            'location_link' => $request->input('location_link'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),

        ]);
        return back()->with('success','Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        echo "delete";
    }

    public static function moj()
    {
        $sites = Index_model::find('1');
        return $sites;
    }
    public static function test() {
        // echo "Testing controller function in view";
        $sites = site_header_footer::find('1');

        return $sites;

     }
}
