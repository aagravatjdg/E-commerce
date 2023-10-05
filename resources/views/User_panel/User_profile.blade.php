@extends('User_Layout.link')
<!DOCTYPE html>
<html lang="en">
<?php $page_name = ""; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign Up</title>
  <!-- Favicon -->
  @section('user-section')

</head>

<body>
  <div class="layer"></div>
<main class="page-center">
    <h1 class="sign-up__title">Change Profile</h1>

    <div class="container">
        <center>
            @include('flash-message')
        </center>
    </div>
    @error('name')
    <div class="alert alert-danger err">{{ $message }}</div>
@enderror

@error('number')
<div class="alert alert-danger err">{{ $message }}</div>
@enderror

@error('email')
<div class="alert alert-danger err">{{ $message }}</div>
@enderror
  <article class="sign-up">

    <form class="sign-up-form form" action="{{ route('user-profile.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <h1 class="sign-up__title"><img width="210" src="{{'public/Profile_Image/'.auth()->user()->profile_pic}}" alt="#" />
    </h1>
    @if($user)


      <label class="form-label-wrapper">
        <p class="form-label">Name</p>
        <input class="form-input" type="text" name="name" placeholder="Enter your name" required value="{{$user->name}}">
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Number</p>
        <input class="form-input" type="number" name="number" placeholder="Enter your Team name" required value="{{$user->number}}">
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="email" placeholder="Enter your email" required value="{{$user->email}}">
      </label><br>
      <button type="submit" class="form-btn primary-default-btn transparent-btn">Update Profile</button>
    </form>
    @else
    {{"User not found"}}
@endif
  </article>
</main>
@endsection

</body>

</html>
<style>
    .err{
        color: red;
    }
</style>
