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
                     <form action="{{ route('seller-manage-products.update',$users->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Product Title</label>
                                <input type="text" name="product_title" value="{{$users->product_title}}" required/>
                             </div>

                             <div class="field">
                                <label class="label_field">Brand Name</label>
                                <input type="text" name="brand_name" value="{{$users->brand_name}}" required/>
                             </div>

                           <div class="field">
                            <label class="label_field">Shoes For</label>
                                <select name="shoes_for" class="form-select" aria-label="Default select example">
                                <option value="Male" {{ $users->shoes_for == 'Male' ? 'selected' : '' }}>Male
                                </option>
                                <option value="Women" {{ $users->shoes_for == 'Women' ? 'selected' : '' }}>Women
                                </option>
                            </select>
                         </div>

                         <div class="field">
                            <label class="label_field">Shoes Type</label>
                                <select name="shoes_type" class="form-select" aria-label="Default select example">
                                <option value="Fashion" {{ $users->shoes_type == 'Fashion' ? 'selected' : '' }}>Fashion
                                </option>
                                <option value="Loafer" {{ $users->shoes_type == 'Loafer' ? 'selected' : '' }}>Loafer
                                </option>
                                <option value="Casual" {{ $users->shoes_type == 'Casual' ? 'selected' : '' }}>Casual
                                </option>
                                <option value="Sneaker" {{ $users->shoes_type == 'Sneaker' ? 'selected' : '' }}>Sneaker
                                </option>
                                <option value="Heel" {{ $users->shoes_type == 'Heel' ? 'selected' : '' }}>Heel
                                </option>
                                <option value="New" {{ $users->shoes_type == 'New' ? 'selected' : '' }}>New
                                </option>
                                <option value="Formal" {{ $users->shoes_type == 'Formal' ? 'selected' : '' }}>Formal
                                </option>
                                <option value="Fency" {{ $users->shoes_type == 'Fency' ? 'selected' : '' }}>Fency
                                </option>
                                <option value="Trendy" {{ $users->shoes_type == 'Trendy' ? 'selected' : '' }}>Trendy
                                </option>
                                <option value="College" {{ $users->shoes_type == 'College' ? 'selected' : '' }}>College
                                </option>
                            </select>
                         </div>

                         <div class="field">
                            <label class="label_field">Description</label>
                            <textarea class="" id="exampleFormControlTextarea1" rows="3" name="description"  required>{{$users->description}}</textarea>
                         </div>

                         <div class="field">
                            <label class="label_field">Shoes Price</label>
                            <input type="number" name="shoes_price" placeholder="Shoes Price" value="{{$users->shoes_price}}" required>
                         </div>

                         <div class="field">
                            <label class="label_field">Specification:</label>
                            <textarea class="" id="exampleFormControlTextarea1" name="specification" rows="3" required>{{$users->specification}}</textarea>
                         </div>

                         {{-- @php
$images = json_decode($users->shoes_size);
@endphp
                         <div class="field">
                            <label class="label_field">Shoes Size:</label>
                        </div>
                        <div class="check" required>
                            <input type="checkbox" id="vehicle1" name="size[]" value="5" @if(in_array('5', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle1"> 5</label><br>
                            <input type="checkbox" id="vehicle2" name="size[]" value="6" @if(in_array('6', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle2">6</label><br>
                            <input type="checkbox" id="vehicle3" name="size[]" value="7" @if(in_array('7', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle3"> 7</label><br>
                            <input type="checkbox" id="vehicle4" name="size[]" value="8" @if(in_array('8', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle4"> 8</label><br>
                            <input type="checkbox" id="vehicle5" name="size[]" value="9" @if(in_array('9', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle5"> 9</label><br>
                            <input type="checkbox" id="vehicle6" name="size[]" value="10" @if(in_array('10', explode(',', $users->shoes_size))) checked @endif>
                            <label for="vehicle6"> 10</label><br><br>
                        </div> --}}
                        @php
                        $selectedSizes = json_decode($users->shoes_size);
                        $shoeSizes = [5, 6, 7, 8, 9, 10]; // Define a list of shoe sizes
                    @endphp

                    <div class="field abc">
                        <label class="label_field">Shoes Size:</label>
                    </div>
                    <div class="check" required>
                        @foreach ($shoeSizes as $size)
                            <input type="checkbox" id="vehicle{{ $size }}" name="size[]" value="{{ $size }}" @if(in_array($size, $selectedSizes)) checked @endif>
                            <label for="vehicle{{ $size }}"> {{ $size }}</label><br>
                        @endforeach
                    </div>


                           <div class="field margin_0">
                              {{-- <label class="label_field hidden">hidden label</label> --}}
                              <button class="main_bt" type="submit">update profile</button>
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
