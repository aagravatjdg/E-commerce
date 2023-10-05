<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>payment</h1>
<form action="/session" method="POST">
    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type='hidden' name="total" value="600">
    <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
    </form>
</body>
</html>
