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
      padding-top: 100%;
  ">
         <div class="container">
                        @foreach ($sites as $site)

            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="login_form">
                     <form action="{{ route('admin-manage-site_index.update',$site->id)}}" method="POST" enctype="multipart/form-data">
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
                                <label class="label_field">Site Title</label>
                                <input type="text" name="site_title" value="{{$site->site_name}}" required/>
                             </div>

                             <div class="field">
                                <h5>First Slide</h5>
                             </div>

                             <div class="field">
                              <label class="label_field">Main Title</label>
                              <input type="text" name="f1_main_title" value="{{$site->one_1st_title}}" required/>
                                {{-- <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="1" required></textarea> --}}
                             </div>

                             <div class="field">
                                <label class="label_field">Second Title</label>
                                <input type="text" name="f1_second_title" value="{{$site->one_2nd_title}}" required/>
                             </div>

                             <div class="field">
                                <label class="label_field">Description</label>
                                <textarea class="" id="exampleFormControlTextarea1" name="f1__desc" rows="3" required>
                                    {{$site->one_3rd_description}}
                                </textarea>
                             </div>

                           <div class="field">
                              <label class="label_field">Image</label>
                              <img src="{{ asset('public/Site_images/'. $site->one_1st_image) }}" alt="" height="150px" width="150px">
                              <input type="file" name="f1_image"   accept="image/*" >
                           </div><br><br><br>

                           <div class="field">
                            <h5>Second Slide</h5>
                         </div>

                         <div class="field">
                          <label class="label_field">Main Title</label>
                          <input type="text" name="s2_main_title" value="{{$site->two_1st_title}}" required/>
                            {{-- <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="1" required></textarea> --}}
                         </div>

                         <div class="field">
                            <label class="label_field">Second Title</label>
                            <input type="text" name="s2_second_title" value="{{$site->two_2nd_title}}" required/>
                         </div>

                         <div class="field">
                            <label class="label_field">Description</label>
                            <textarea class="" id="exampleFormControlTextarea1" name="s2_desc" rows="3" required>
                                {{$site->two_3rd_description}}
                            </textarea>
                         </div>

                       <div class="field">
                          <label class="label_field">Image</label>
                          <img src="{{ asset('public/Site_images/'. $site->two_1st_image) }}" alt="" height="150px" width="150px">
                          <input type="file" name="s2_image"   accept="image/*" >
                       </div><br><br><br>

                       <div class="field">
                        <h5>Third Slide</h5>
                     </div>

                     <div class="field">
                      <label class="label_field">Main Title</label>
                      <input type="text" name="t3_main_title" value="{{$site->third_1st_title}}" required/>
                        {{-- <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="1" required></textarea> --}}
                     </div>

                     <div class="field">
                        <label class="label_field">Second Title</label>
                        <input type="text" name="t3_second_title" value="{{$site->third_2nd_title}}" required/>
                     </div>

                     <div class="field">
                        <label class="label_field">Description</label>
                        <textarea class="" id="exampleFormControlTextarea1" name="t3_desc" rows="3" required>
                            {{$site->third_3rd_description}}
                        </textarea>
                     </div>

                   <div class="field">
                      <label class="label_field">Image</label>
                      <img src="{{ asset('public/Site_images/'. $site->third_1st_image) }}" alt="" height="150px" width="150px">
                      <input type="file" name="t3_image"   accept="image/*" >
                   </div><br><br><br>


                   <div class="field">
                    <h5>Categories Of Month</h5>
                 </div>

                 <div class="field">
                    <label class="label_field">Main Title</label>
                    <input type="text" name="cat_main_title" value="{{$site->second_main_title}}" required/>
                 </div>

                 <div class="field">
                    <label class="label_field">Description</label>
                    <textarea class="" id="exampleFormControlTextarea1" name="cat_desc" rows="8" required>
                        {{$site->second_description}}
                    </textarea>
                 </div>

                 <div class="field">
                    <label class="label_field">1st Image</label>
                    <img src="{{ asset('public/Site_images/'. $site->first_image) }}" alt="" height="150px" width="150px">
                    <input type="file" name="cat_1_image"   accept="image/*" >
                 </div><br><br><br>

                 <div class="field">
                    <label class="label_field">First Title</label>
                    <input type="text" name="cat_1_title" value="{{$site->first_title}}" required/>
                 </div>

                 <div class="field">
                    <label class="label_field">2nd Image</label>
                      <img src="{{ asset('public/Site_images/'. $site->second_image) }}" alt="" height="150px" width="150px">
                    <input type="file" name="cat_2_image"   accept="image/*" >
                 </div><br><br><br>

                 <div class="field">
                    <label class="label_field">Second Title</label>
                    <input type="text" name="cat_2_title" value="{{$site->second_title}}" required/>
                 </div>

                 <div class="field">
                    <label class="label_field">3rd Image</label>
                    <img src="{{ asset('public/Site_images/'. $site->third_image) }}" alt="" height="150px" width="150px">
                    <input type="file" name="cat_3_image"   accept="image/*" >
                 </div><br><br><br>

                 <div class="field">
                    <label class="label_field">Third Title</label>
                    <input type="text" name="cat_3_title" value="{{$site->third_title}}" required/>
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
