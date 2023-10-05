@extends('Admin_Layout.link')

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

      @section('admin-section')

   </head>
   <body class="inner_page login">
    <br><br>
      <div class="full_container">
         <div class="container">

            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                    <div class="container-flude">
                        <center>
                            @include('flash-message')
                        </center>
                    </div>
                  </div>
                  <div class="login_form">
                     <form action="{{ route('admin-manage-party.update',$users->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @error('company_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('state')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @error('zip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Company Name</label>
                                <input type="text" name="company_name" value="{{$users->company_name}}" />
                             </div>

                             <div class="field">
                                <label class="label_field">Address</label>
                                <input type="text" name="address" value="{{$users->address}}" />
                             </div>

                           <div class="field">
                              <label class="label_field">State</label>
                              <input type="text" name="state" value="{{$users->state}}" />
                           </div>

                           <div class="field">
                            <label class="label_field">City</label>
                            <input type="text" name="city" value="{{$users->city}}" />
                         </div>

                         <div class="field">
                            <label class="label_field">Zip Code</label>
                            <input type="number" name="zip" value="{{$users->zip}}" />
                         </div><br>

                           <div class="field margin_0">
                              {{-- <label class="label_field hidden">hidden label</label> --}}
                              <button class="main_bt" type="submit">Update Company</button>
                              {{-- <input type="submit" class="main_bt" value="submit" name="submit"> --}}
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      @endsection

   </body>
</html>
<style>
    .invalid-feedback{
        color: red;
    }
</style>
