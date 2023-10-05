@extends('User_Layout.link')
<!DOCTYPE html>
<html lang="en">
    <?php $page_name = "order"; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign Up</title>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include DataTables CSS and JS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>


  @section('user-section')

</head>

<body>
  <div class="layer"></div>
<main class=""><br><br>
    <div class="container" style="color:green;">
        <center>
            @include('flash-message')
        </center>
    </div><br>
    <h1 class="sign-up__title">My Orders</h1>
  <article class="sign-up">
    @if($product)
        <div class="container">
            <div style="overflow-x:auto;">
                <table id="example" class="display" style="width:100%" class="table-dark">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Size</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Bill</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $data)

                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->product->product_title}}</td>
                            <td><img src="{{ asset('public/Product_Main_Image/' . $data->product->p_front_image) }}"width="120px" hight="120px" /></td>
                            <td>{{$data->size}}</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->status}}</td>

                            <td>  
                                @if($data->count===1)
                                <button type="submit" disabled class="form-btn primary-default-btn transparent-btn">Paid</button>
                                @else
                                <form action="/session/{{ $data->id }}" method="POST">

                                    @csrf
                                    <button type="submit" class="form-btn primary-default-btn transparent-btn">Pay</button>
                                </form>
                                @endif
                            </td>

                            

                            <td><a class="btn btn-primary" href="{{ route('admin-manage-orders.edit', $data->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top">View</a></td>

                        </tr>
                    @endforeach

                        <!-- Add more rows as needed -->
                    </tbody>

                </table>
            </div>
        </div>
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
    td
    {
        text-align: center;
    }
</style>
<script>
    // Initialize DataTable
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
