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
                     <form action="{{ route('seller-company-detail.store',$users->id)}}" method="POST" enctype="multipart/form-data">
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
                                <label class="label_field">Company Name</label>
                                <input type="text" name="Company_name" placeholder="Company Name">

                             </div>

                             <div class="field">
                                <label class="label_field">Company Logo</label>
                                <input type="file" name="Company_logo" placeholder="Company Logo">

                             </div>

                           <div class="field">
                              <label class="label_field">Company Licence Image</label>
                              <input type="file" name="Company_licence_image" placeholder="Company Licence Image">

                           </div>

                           <div class="field">
                            <label class="label_field">Address</label>
                            <input type="text" name="address" placeholder="Address">

                         </div>
                         <div class="field">
                            <label class="label_field">City</label>
                            <input type="text" name="city" placeholder="City">

                         </div>
                         <div class="field">
                            <label class="label_field">State</label>
                            <input type="text" name="state" placeholder="State">

                         </div>
                         <div class="field">
                            <label class="label_field">Zip Code</label>
                            <input type="text" name="zip_code" placeholder="Zip Code">

                         </div>


                           <div class="field margin_0">
                              <button class="main_bt" type="submit">Submit</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
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
</style>
