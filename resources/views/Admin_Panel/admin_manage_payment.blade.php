

@extends('Admin_Layout.link')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Example</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables CSS and JS -->
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> --}}
    {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script> --}}
    <script>
        // Initialize DataTable
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>

@section('admin-section')

</head>
<body class="inner_page tables_page">
    <div class="full_container">

            <!-- dashboard inner -->
            <div class="midde_cont">
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Manage Payment</h2>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="container">
                        <center>
                            @include('flash-message')
                        </center>
                    <div class="row">



    <div style="overflow-x:auto;">

    <table id="mytable" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>User Id</th>
                <th>User Name</th>
                <th>Product Id</th>
                <th>Company Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pay as $data)

            <tr>
          <td>{{$data->id}}</td>

                <td><a style="color: white;" href="{{ route('admin-manage-users.index',$data->user_id)}}"> {{$data->user_id}} </a></td>

        {{-- <td> {{$data->company_id}} </td> --}}
          {{-- <td>{{$data->product_id}}</td> --}}
          <td><a style="color: white;" href="{{ route('admin-manage-products.index',$data->user_name)}}"> {{$data->user_name}} </a></td>

          {{-- <td><img src="{{ asset('public/Party_Licence/' . $data->company_licence) }}"width="120px" hight="120px" /></td> --}}
          <td><a style="color: white;" href="{{ route('admin-manage-party.index',$data->product_id)}}"> {{$data->product_id}} </a></td>
          <td><a style="color: white;" href="{{ route('admin-manage-party.index',$data->product->company_id)}}"> {{$data->product->company_id}} </a></td>


          {{-- <td>{{$data->product->company_id}}</td>   --}}
          <td>{{$data->product->product_title}}</td>
          <td>{{$data->product_price}}</td>
          <td>{{$data->product_quantity}}</td>
          <td>{{$data->status}}</td>

            @endforeach
        

            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    </div>
                    </div>
                    </div>
</body>
</html>
@endsection







