<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Party;
use App\Models\Seller_Products;


class Seller_manage_products extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $seller = auth()->user()->id;

         $no=Party::where('id',$seller)
        ->where('status','Not_verified')->get()->count();

         $yes=Party::where('id',$seller)
        ->where('status','Verified')->get()->count();

        if($no===1)
        {
            return back()->with('warning', 'You can not able to access this page first verified your company..!!');
        }
        if($yes===1)
        {
            $seller = auth()->user()->id;

            $users=Party::where('id',$seller)->get();
            return view('Seller_panel.seller_add_products',compact('users'));
        }
        else
        {
            echo "Something went wrong..!!";
        }
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
        // $id=auth()->user()->id;

        // $seller=Party::find($id);

        // echo $company_id=$seller->company_id;

        //     $product=new Seller_Products;

        //     $product->product_title = $request->input('product_title');
        //     $product->brand_name = $request->input('brand_name');
        //     $product->shoes_for = $request->input('shoes_for');
        //     $product->description = $request->input('description');
        //     $product->shoes_price = $request->input('shoes_price');
        //     $product->specification = $request->input('specification');
        //     $product->shoes_size = $request->input('size');
        //     $product->company_id=$company_id;

        //     if ($request->hasFile('product_front_image'))
        //     {
        //         $logoFile = $request->file('product_front_image');
        //         $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
        //         $logoPath = $logoFile->move('public/Product_Main_Image', $logoName);

        //         // Store the file path in the party record
        //         $product->p_front_image = $logoName;
        //     }
        //     $product->product_images = [];
        //     $images = $request->file('product_images');

        //     foreach ($images as $image) {
        //     $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        //     $image->move('public/Product_Images', $imageName);

        //         $product->product_images[] = $imageName;

        //     }
        //     $product->save();

        //     dd($product);


                            $id = auth()->user()->id;
                    $seller = Party::find($id);
                    $company_id = $seller->company_id;

                    $product = new Seller_Products;
                    $product->product_title = $request->input('product_title');
                    $product->brand_name = $request->input('brand_name');
                    $product->shoes_for = $request->input('shoes_for');
                    $product->description = $request->input('description');
                    $product->shoes_price = $request->input('shoes_price');
                    $product->specification = $request->input('specification');
                    $product->shoes_type = $request->input('shoes_type');

                // $ad=$product->shoes_size = $request->input('size');
                // $imgData[] = $ad;

                // $product->shoes_size = json_encode($imgData);

                $shoeSizes = $request->input('size');
                $product->shoes_size = json_encode($shoeSizes);


                // $product->shoes_size = json_encode($shoeSizes);


                $product->company_id = $company_id;

                if ($request->hasFile('product_front_image')) {
                    $logoFile = $request->file('product_front_image');
                    $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
                    $logoPath = $logoFile->move('public/Product_Main_Image', $logoName);

                    // Store the file path in the party record
                    $product->p_front_image = $logoName;
                }

                // $product_images = [];
                // if ($request->product_images){
                //     foreach($request->product_images as $key => $image)
                //     {
                //         $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                //         $image->move('public/Product_Images', $imageName);

                //         // $imageName = time().rand(1,99).'.'.$image->extension();
                //         // $image->move(public_path('images'), $imageName);

                //         $product_images[]['name'] = $imageName;
                //     }
                //     foreach ($product_images as $key => $image) {
                //         // Seller_Products::create($image);
                //     $product->product_images[] = $imageName;
                // $product->save();

                //     }
                // }

                if($request->hasfile('product_images')) {
                    foreach($request->file('product_images') as $file)
                    {
                        $name = uniqid() . '.' . $file->getClientOriginalExtension();
                        $file->move('public/Product_Images', $name);

                        $imgData[] = $name;
                    }
                    // $product = new Image();
                    // $product->product_images = json_encode($imgData);
                    $product->product_images = json_encode($imgData);
                }


                // $images = $request->file('product_images');

                // // $product->product_images = []; // Initialize an empty array to store image names

                // foreach ($images as $image) {
                //     $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                //     $image->move('public/Product_Images', $imageName);

                //     // Append the image name to the product_images array
                //     $product->product_images[] = $imageName;
                // }

                // // Convert the array to JSON before saving it in the database
                // $product->product_images = json_encode($product->product_images);


                $product->save();


        return redirect()->back()->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = Party::join('seller_product', 'company_detail.company_id', '=', 'seller_product.company_id')
        ->select('company_detail.*', 'seller_product.*')
        ->get();

        return view('Seller_panel.seller-manage-product',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=Seller_Products::where('id',$id)->get();
        return view('Seller_panel.seller_edit_product',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Seller_Products::where('id',$id)->first();
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
        return redirect('seller-products-list')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Seller_Products::where('id',$id)->delete();
        return redirect('seller-products-list')->with('success', 'Product Deleted Successfully');
    }
}


