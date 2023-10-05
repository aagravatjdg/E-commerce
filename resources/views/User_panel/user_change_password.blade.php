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
  <link rel="stylesheet" href="User/css/style.css">

</head>

<body>
  <div class="layer"></div>
<main class="page-center">
    <h1 class="sign-up__title">Change Password</h1>

    <div class="container">
        <center>
            @include('flash-message')
        </center>
    </div>





  <article class="sign-up">
    <form class="sign-up-form form" action="{{ route('user-change-password.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @if($user)


      <label class="form-label-wrapper">
        <p class="form-label">Old Password</p>
        <input class="form-input" type="text" name="old-password" placeholder="Enter old password" required >
        @error('old-password')
            <div class="alert alert-danger err">{{ $message }}</div>
        @enderror
      </label>

      <label class="form-label-wrapper">
        <p class="form-label">New Password</p>
        <input class="form-input" type="text" name="new-password" placeholder="Enter new password" required >
        @error('new-password')
            <div class="alert alert-danger err">{{ $message }}</div>
        @enderror
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Confirm Password</p>
        <input class="form-input" type="password" name="confirm_password" placeholder="Confirm password" required >
        @error('confirm_password')
            <div class="alert alert-danger err">{{ $message }}</div>
        @enderror
      </label><br>
      <button type="submit" class="form-btn primary-default-btn transparent-btn">Change Password</button>
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
