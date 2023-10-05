<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index_model;


class Site_index_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Index_model::where('id','1')->get();
        // dd($site);
        return view('Admin_Panel.site_index_form',compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "crreate";
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
        echo "show";
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
         $data = Index_model::find($id);


        // dd($data);


        // if ($request->hasFile('f1_image') || $request->hasFile('s2_image') || $request->hasFile('t3_image') || $request->hasFile('cat_1_image') || $request->hasFile    ('cat_2_image') || $request->hasFile('cat_3_image'))
        //     {
        //         $i1 = $request->file('f1_image');
        //         $img1 = uniqid() . '.' . $i1->getClientOriginalExtension();
        //         $licencePath = $i1->move('public/Site_Images', $img1);

        //         $i2 = $request->file('s2_image');
        //         $img2 = uniqid() . '.' . $i2->getClientOriginalExtension();
        //         $licencePath = $i2->move('public/Site_Images', $img2);

        //         $i3 = $request->file('t3_image');
        //         $img3 = uniqid() . '.' . $i3->getClientOriginalExtension();
        //         $licencePath = $i3->move('public/Site_Images', $img3);

        //         $i4 = $request->file('cat_1_image');
        //         $img4 = uniqid() . '.' . $i4->getClientOriginalExtension();
        //         $licencePath = $i4->move('public/Site_Images', $img4);

        //         $i5 = $request->file('cat_2_image');
        //         $img5 = uniqid() . '.' . $i5->getClientOriginalExtension();
        //         $licencePath = $i5->move('public/Site_Images', $img5);

        //         $i6 = $request->file('cat_3_image');
        //         $img6 = uniqid() . '.' . $i6->getClientOriginalExtension();
        //         $licencePath = $i6->move('public/Site_Images', $img6);

        //     }
        //     else
        //     {
        //         //  $affectedRows = Index_model::where('id', $id);
        //         $img1=$data->one_1st_image;
        //         $img2=$data->two_1st_image;
        //         $img3=$data->third_1st_image;
        //         $img4=$data->first_image;
        //         $img5=$data->second_image;
        //         $img6=$data->third_image;
        //     }

            if ($request->hasFile('f1_image'))
            {
                $i1 = $request->file('f1_image');
                $img1 = uniqid() . '.' . $i1->getClientOriginalExtension();
                $licencePath = $i1->move('public/Site_Images', $img1);
            }
            else
            {
                $img1=$data->one_1st_image;
            }

            if ($request->hasFile('s2_image'))
            {
                $i2 = $request->file('s2_image');
                $img2 = uniqid() . '.' . $i2->getClientOriginalExtension();
                $licencePath = $i2->move('public/Site_Images', $img2);
            }
            else
            {
                $img2=$data->two_1st_image;

            }

            if ($request->hasFile('t3_image'))
            {
                $i3 = $request->file('t3_image');
                $img3 = uniqid() . '.' . $i3->getClientOriginalExtension();
                $licencePath = $i3->move('public/Site_Images', $img3);
            }
            else
            {
                $img3=$data->third_1st_image;

            }

            if ($request->hasFile('cat_1_image'))
            {
                $i4 = $request->file('cat_1_image');
                $img4 = uniqid() . '.' . $i4->getClientOriginalExtension();
                $licencePath = $i4->move('public/Site_Images', $img4);
            }
            else
            {
                $img4=$data->first_image;

            }

            if ($request->hasFile('cat_2_image'))
            {
                $i5 = $request->file('cat_2_image');
                $img5 = uniqid() . '.' . $i5->getClientOriginalExtension();
                $licencePath = $i5->move('public/Site_Images', $img5);
            }
            else
            {
                $img5=$data->second_image;

            }

            if ($request->hasFile('cat_3_image'))
            {
                $i6 = $request->file('cat_3_image');
                $img6 = uniqid() . '.' . $i6->getClientOriginalExtension();
                $licencePath = $i6->move('public/Site_Images', $img6);
            }
            else
            {
                $img6=$data->third_image;

            }


        // echo "update";
        echo $id;
        $affectedRows = Index_model::where('id', $id)
        ->update([
            'site_name' => $request->input('site_title'), // Change field1 to the new value
            'one_1st_title' => $request->input('f1_main_title'),
            'one_2nd_title' => $request->input('f1_second_title'),
            'one_3rd_description' => $request->input('f1__desc'),
            'two_1st_title' => $request->input('s2_main_title'),
            'two_2nd_title' => $request->input('s2_second_title'),
            'two_3rd_description' => $request->input('s2_desc'),
            'third_1st_title' => $request->input('t3_main_title'),
            'third_2nd_title' => $request->input('t3_second_title'),
            'third_3rd_description' => $request->input('t3_desc'),
            'second_main_title' => $request->input('cat_main_title'),
            'second_description' => $request->input('cat_desc'),
            'first_title' => $request->input('cat_1_title'),
            'second_title' => $request->input('cat_2_title'),
            'third_title' => $request->input('cat_3_title'),

            'one_1st_image' => $img1,
            'two_1st_image' => $img2,
            'third_1st_image' => $img3,
            'first_image' => $img4,
            'second_image' => $img5,
            'third_image' => $img6,

        ]);
        return back()->with('success','Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "delete";
    }
}
