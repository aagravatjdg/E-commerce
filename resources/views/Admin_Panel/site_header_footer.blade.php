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
   <body class="inner_page login"><br><br>
    <div class="container-flude">
        <center>
            @include('flash-message')
        </center>
    </div>
      <div class="full_container" style="
      padding-top: 10%;
  ">
         <div class="container">
                        @foreach ($sites as $site)

            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="login_form">
                     <form action="{{ route('admin-manage-header-footer.update',$site->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <fieldset>


                             <div class="field">
                              <label class="label_field">Gmail</label>
                              <input type="text" name="gmail" value="{{$site->gmail}}" required/>
                             </div>

                             <div class="field">
                                <label class="label_field">Number</label>
                                <input type="number" name="number" value="{{$site->number}}" required/>
                             </div>



                         <div class="field">
                          <label class="label_field">Address</label>
                          <input type="text" name="address" value="{{$site->address}}" required/>
                            {{-- <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="1" required></textarea> --}}
                         </div>

                         <div class="field">
                            <label class="label_field">Shop Location Link</label>
                            <input type="text" name="location_link" value="{{$site->location_link}}" required/>
                           </div>

                         <div class="field">
                            <label class="label_field">Facebook</label>
                            <input type="text" name="facebook" value="{{$site->facebook}}" required/>
                         </div>

                         <div class="field">
                            <label class="label_field">Instagram</label>
                            <input type="text" name="instagram" value="{{$site->instagram}}" required/>

                         </div>

                       <div class="field">
                          <label class="label_field">Twitter</label>
                          <input type="text" name="twitter" value="{{$site->twitter}}" >
                       </div>



                     <div class="field">
                      <label class="label_field">Linkedin</label>
                      <input type="text" name="linkedin" value="{{$site->linkedin}}" required/>
                        {{-- <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="1" required></textarea> --}}
                     </div>





 <div class="field margin_0">
                              {{-- <label class="label_field hidden">hidden label</label> --}}
                              <button class="main_bt" type="submit">Update</button>
                              {{-- <input type="submit" class="main_bt" value="submit" name="submit"> --}}
                           </div>
                        </fieldset>
                     </form>
                     @endforeach
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
