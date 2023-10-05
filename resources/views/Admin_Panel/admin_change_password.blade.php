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
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                 
                  <div class="login_form">
                     <form action="{{ route('admin-change-password.update',$users->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @error('old-password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @error('new-password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('confirm_password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Old Password</label>
                                <input type="text" name="old-password" placeholder="old password">

                             </div>

                             <div class="field">
                                <label class="label_field">New Password</label>
                                <input type="text" name="new-password" placeholder="new password">

                             </div>

                           <div class="field">
                              <label class="label_field">Confirm Pass</label>
                              <input type="text" name="confirm_password" placeholder="confirm password">

                           </div>

                           <div class="field margin_0">
                              {{-- <label class="label_field hidden">hidden label</label> --}}
                              <button class="main_bt" type="submit">update profile</button>
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
