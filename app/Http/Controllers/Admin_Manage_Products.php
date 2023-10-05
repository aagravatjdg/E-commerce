<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller_Products;

use App\Models\Party;
// use App\Models\Order_model;




class Admin_Manage_Products extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product=Seller_Products::all();
        $product = Party::join('seller_product', 'company_detail.company_id', '=', 'seller_product.company_id')
    ->select('company_detail.*', 'seller_product.*')
    ->get();

        // echo $product->party->company_logo;
        return view('Admin_Panel.admin_manage_products',compact('product'));
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
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=Seller_Products::where('id',$id)->get();
        return view('Admin_Panel.admin_edit_product',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $id = auth()->user()->id;
        // $product = Seller_Products::where('product_id',$id)->get();
        // foreach($product as $as)
        // {
        //     $company_id = $as->company_id;
        //     $p_image = $as->p_front_image;
        //     $images = $as->product_images;


        // }

        // // $product = new Seller_Products;
        // $product->product_title = $request->input('product_title');
        // $product->brand_name = $request->input('brand_name');
        // $product->shoes_for = $request->input('shoes_for');
        // $product->description = $request->input('description');
        // $product->shoes_price = $request->input('shoes_price');
        // $product->specification = $request->input('specification');
        // $product->shoes_type = $request->input('shoes_type');
        // $shoeSizes = $request->input('size');
        // $product->company_id = $company_id;
        // $product->p_front_image = $p_image;
        // $product->product_images = $images;



        //         $product->shoes_size = json_encode($shoeSizes);



        //         // if ($request->hasFile('product_front_image')) {
        //         //     $logoFile = $request->file('product_front_image');
        //         //     $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
        //         //     $logoPath = $logoFile->move('public/Product_Main_Image', $logoName);

        //         //     // Store the file path in the party record
        //         //     $product->p_front_image = $logoName;
        //         // }


        //         // if($request->hasfile('product_images')) {
        //         //     foreach($request->file('product_images') as $file)
        //         //     {
        //         //         $name = uniqid() . '.' . $file->getClientOriginalExtension();
        //         //         $file->move('public/Product_Images', $name);

        //         //         $imgData[] = $name;
        //         //     }
                //     // $product = new Image();
        //         //     // $product->product_images = json_encode($imgData);
        //         //     $product->product_images = json_encode($imgData);
        //         // }
        //         // dd($product);

        //         $product->save();
        // echo $product = Seller_Products::where('product_id', $id)->first();
                    // $product = new Seller_Products;

        // $product = Seller_Products::where('product_id','16')->first();
        $product = Seller_Products::where('id',$id)->first();


// // Check if the record exists
// if ($product) {
//     // Retrieve the existing data
//     // $company_id = $product->company_id;
//     // $p_image = $product->p_front_image;
//     // $images = $product->product_images;

//     // Update the product properties with the new data from the form
//     $product->product_title = $request->input('product_title');
//     $product->brand_name = $request->input('brand_name');
//     $product->shoes_for = $request->input('shoes_for');
//     $product->description = $request->input('description');
//     $product->shoes_price = $request->input('shoes_price');
//     $product->specification = $request->input('specification');
//     $product->shoes_type = $request->input('shoes_type');
//     $shoeSizes = $request->input('size');
//     // Update company_id, p_front_image, and product_images with the existing values
//     // $product->company_id = $company_id;
//     // $product->p_front_image = $p_image;
//     // $product->product_images = $images;

//     // Convert the size array to JSON before updating
//     $product->shoes_size = json_encode($shoeSizes);
//     // dd($product);

//     // Save the updated data
//     $product->save();
//     echo "success";
// }
// else
// {
//     echo "something went wrong";
// }


        $affectedRows = Seller_Products::where('id', $id)
        ->update([
            'product_title' => $request->input('product_title'),
            'brand_name' => $request->input('brand_name'),
            'shoes_for' => $request->input('shoes_for'),
            'description' => $request->input('description'),
            'shoes_price' => $request->input('shoes_price'),
            'specification' => $request->input('specification'),
            'shoes_type' => $request->input('shoes_type'),
            'shoes_size' => json_encode($request->input('size')),
        ]);
        return back()->with('success','Data Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Seller_Products::where('id',$id)->delete();
        return redirect('admin-manage-products')->with('success', 'Product Deleted Successfully');
    }
}
