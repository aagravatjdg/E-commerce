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
                     {{-- <div class="center">
                        <img width="210" src="{{ asset('public/Profile_Image/' . $users->profile_pic) }}" alt="#" />
                     </div> --}}
                  </div>
                  @foreach($users as $users)

                  <div class="login_form">
                     <form action="{{ route('site-contact.update',$users->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Name</label>
                                <input type="text" name="name" value="{{$users->name}}" required/>
                             </div>

                             <div class="field">
                                <label class="label_field">Email</label>
                                <input type="text" name="email" value="{{$users->email}}" required/>
                             </div>

                             <div class="field">
                                <label class="label_field">Subject</label>
                                <input type="text" name="subject" value="{{$users->subject}}" required/>
                             </div>

                         <div class="field">
                            <label class="label_field">Message</label>
                            <textarea class="" id="exampleFormControlTextarea1" rows="3" name="message"  required>{{$users->message}}</textarea>
                         </div>

                           <div class="field margin_0">
                              {{-- <label class="label_field hidden">hidden label</label> --}}
                              <button class="main_bt" type="submit">Update Data</button>
                              {{-- <input type="submit" class="main_bt" value="submit" name="submit"> --}}
                           </div>
                        </fieldset>
                     </form>
                  </div>
                  @endforeach

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
    .check{
        padding-left: 100px;
    }
</style>
