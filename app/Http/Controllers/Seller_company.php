<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Party;




class Seller_company extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller=auth()->user()->id;
        $users = User::find($seller);
        return view('Seller_panel.seller_company',compact('users'));
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
        echo $id=auth()->user()->id;
        echo $count=Party::where('id',$id)->count();

        if($count===1)
        {
            return back()->with('warning', 'Your Company Profile has been send successfully to the admin, wait for approval..!!');
        }

        else
        {
            $request->validate([
                'Company_name' => 'required|min:2|',
                'address' => 'required|min:2|',
                'city' => 'required|min:2|',
                'state' => 'required|min:2|',
                'zip_code' => 'required|min:3|',
                'Company_logo' => 'required|mimes:jpeg,png,jpg,gif|max:5090|image',
                'Company_licence_image' => 'required|mimes:jpeg,png,jpg,gif|max:5090|image',
            ]);

             $party_id = rand();
             $item_id = substr($party_id,1,5);
             $party=new Party;

            $party->company_name = $request->input('Company_name');
            $party->address = $request->input('address');
            $party->city = $request->input('city');
            $party->state = $request->input('state');
            $party->zip = $request->input('zip_code');
            $party->company_id = $item_id;
            $party->id=$id;// Assign the authenticated user's ID to the party


            if ($request->hasFile('Company_logo'))
            {
                $logoFile = $request->file('Company_logo');
                $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
                $logoPath = $logoFile->move('public/Party_Logo', $logoName);

                // Store the file path in the party record
                $party->company_logo = $logoName;
            }

            // Check if Company Licence Image file was uploaded
            if ($request->hasFile('Company_licence_image'))
            {
                $licenceFile = $request->file('Company_licence_image');
                $licenceName = uniqid() . '.' . $licenceFile->getClientOriginalExtension();
                $licencePath = $licenceFile->move('public/Party_Licence', $licenceName);

                // Store the file path in the party record
                $party->company_licence = $licenceName;
            }

            // Save the party record to the database
            $party->save();
            return back()->with('success', 'Your company profile has been send successfully, now you can watch your status after some time');

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "store";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "destroy";
    }
}
