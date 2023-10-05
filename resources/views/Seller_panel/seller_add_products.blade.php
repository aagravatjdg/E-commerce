@extends('Seller_Layout.link')

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      @section('seller-section')

   </head>
   <body class="inner_page login">
      <div class="full_container">
<br><br><br>
<br><br><br>
<div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="login_form">  
                    @foreach($users as $users)

                     <form action="{{ route('seller-manage-products.store',$users->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="container-flude">
                            <center>
                                @include('flash-message')
                            </center>
                        </div>
                        @error('Company_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @error('Company_logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('Company_licence_image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('city')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

     @error('state')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @error('zip_code')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


                        <fieldset>
                            <div class="field">
                                <label class="label_field">Product Title</label>
                                <input type="text" name="product_title" placeholder="Product Title" required>

                             </div>

                             <div class="field">
                                <label class="label_field">Brand Name</label>
                                <input type="text" name="brand_name" placeholder="Brand Name" required>

                             </div>

                           <div class="field">
                              <label class="label_field">Product Front Image</label>
                              <input type="file" name="product_front_image"   accept="image/*" required>
                           </div>

                           <div class="field">
                            <label class="label_field">Product Images</label>
                            <input type="file" name="product_images[]"  accept="image/*" multiple="multiple" required>
                         </div>

                         <div class="field">
                            <label class="label_field">Shoes For</label>
                            <select class="form-select" aria-label="Default select example" name="shoes_for" required>
                                <option value="">select</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                            </select>
                     </div>

                     <div class="field">
                        <label class="label_field">Shoes Type</label>
                        <select class="form-select" aria-label="Default select example" name="shoes_type" required>
                            <option value="">select</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Loafer">Loafer</option>
                            <option value="Casual">Casual</option>
                            <option value="Sneaker">Sneaker</option>
                            <option value="Heel">Heel</option>
                            <option value="New">New</option>
                            <option value="Formal">Formal</option>
                            <option value="Fency">Fency</option>
                            <option value="Trendy">Trendy</option>
                            <option value="College">College</option>
                        </select>
                 </div>


                         <div class="field">
                            <label class="label_field">Description:</label>
                            {{-- <input type="text" name="city" placeholder="City"> --}}

                            {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                            <textarea class="" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>


                         </div>
                         <div class="field">
                            <label class="label_field">Shoes Price</label>
                            <input type="number" name="shoes_price" placeholder="Shoes Price" required>

                         </div>
                         <div class="field">
                            <label class="label_field">Specification:</label>
                            <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="3" required></textarea>
                         </div>

                         <div class="field">
                            <label class="label_field">Shoes Size:</label>
                         </div>





                        <div class="check" required>
                            <input type="checkbox" id="vehicle1" name="size[]" value="5">
                            <label for="vehicle1"> 5</label><br>
                            <input type="checkbox" id="vehicle2" name="size[]" value="6">
                            <label for="vehicle2">6</label><br>
                            <input type="checkbox" id="vehicle3" name="size[]" value="7">
                            <label for="vehicle3"> 7</label><br>
                            <input type="checkbox" id="vehicle1" name="size[]" value="8">
                            <label for="vehicle1"> 8</label><br>
                            <input type="checkbox" id="vehicle2" name="size[]" value="9">
                            <label for="vehicle2"> 9</label><br>
                            <input type="checkbox" id="vehicle3" name="size[]" value="10">
                            <label for="vehicle3"> 10</label><br><br>
                        </div>




                           <div class="field margin_0">
                              <button class="main_bt" type="submit">Submit</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
                  @endforeach

               </div>
            </div>
         </div>
      </div>
      <br><br><br>
      <br><br><br>
      <br><br><br>

      @endsection
   </body>
</html>
<style>
    .invalid-feedback{
        color: red;
    }
    .check{
        padding-left: 110px;
    }
</style>
