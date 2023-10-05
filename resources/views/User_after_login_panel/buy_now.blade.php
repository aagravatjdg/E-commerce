@extends('User_after_login_layout.link')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Order Form</title>
    <link rel="stylesheet" href="styles.css">
    @section('user-login-section')
</head>
<body><br><br>
    <div class="container-flude">
        <center>
            @include('flash-message')
        </center>
    </div>
    <div class="container main">
        <h1>Order Form</h1>
        {{-- <form action="{{route('user-panel.update'.auth()user()->id)}}" method="POST"> --}}
            <form action="{{ route('user-panel.update', auth()->user()->id) }}" method="POST">
                @csrf
                @method('PUT')
            {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
            <input type="hidden" name="p_id" value="{{$shoes->id}}">

            <div class="form-group">
                <label for="product">Product Name:</label>
                <input type="text" id="product_name" name="product" disabled value="{{$shoes->product_title}}">
            </div>
            <input type="hidden" id="startValue" value="{{$shoes->shoes_price}}">
            <div class="form-group">
                <label for="product">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Product Size:</label>
                <select name="size" required>
                    <option value="">Select shoes size</option>
                    @if($p_size)
                        <option value="{{ $p_size }}" selected>{{ $p_size }}</option>
                    @endif
                    @foreach(json_decode($shoes->shoes_size) as $size)
                    <option value="{{ $size }}">{{ $size }}</option>
                @endforeach
                </select>


            </div>
            <div class="form-group">
                <label for="quantity">Product Quantity:</label>
                <input type="number" id="quantity" name="quantity" required value="{{$p_qty}}" min="1" step="1">
            </div>
            <div class="form-group">
                <label for="quantity">Total Amount:</label>
                <input type="number" id="result" readonly name="price" value="{{$shoes->shoes_price}}">
            </div>
            <div class="form-group">
                <label for="delivery">Delivery Address:</label>
                <textarea id="delivery" name="address" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="product">Your State:</label>
                <input type="text" id="name" name="state" required>
            </div>
            <div class="form-group">
                <label for="product">Your City:</label>
                <input type="text" id="name" name="city" required>
            </div>
            <div class="form-group">
                <label for="product">Your Zip-code:</label>
                <input type="number" id="name" name="zip" required min="1" step="1">
            </div>
            <button type="submit">Place Order</button>
        </form>
    </div><br><br>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
}

.main {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    box-sizing: border-box;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea,
select {
    width: 96%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

@media (max-width: 768px) {
    .main {
        padding: 10px;
    }
}

</style>
<script>
    $(document).ready(function() {
        // Calculate and display the result
        function updateResult() {
            var startValue = parseInt($("#startValue").val());
            var quantity = parseInt($("#quantity").val());
            $("#result").val(startValue * quantity);
        }

        // Initial calculation and event handler
        updateResult();

        // Update the result when the quantity changes
        $("#quantity").on("input", function() {
            updateResult();
        });
    });
</script>



@endsection

