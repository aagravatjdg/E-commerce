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
            <div class="container">
                <center>
                    @include('flash-message')
                </center>
            </div>
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{ asset('public/Profile_Image/' . $users->profile_pic) }}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="{{ route('admin-manage-seller.update',$users->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Name</label>
                                <input type="text" name="name" value="{{$users->name}}" />
                             </div>

                             <div class="field">
                                <label class="label_field">Number</label>
                                <input type="number" name="number" value="{{$users->number}}" />
                             </div>

                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" value="{{$users->email}}" />
                           </div>

                           <div class="field">
                            <label class="label_field">Status</label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                <option value="Active" {{ $users->status == 'Active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="Delete" {{ $users->status == 'Delete' ? 'selected' : '' }}>Delete
                                </option>
                            </select>
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
