

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
                                <h2>Manage Products</h2>
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
                <th>Product Id</th>
                <th>Company Id</th>
                <th>Company Name</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Brand Name</th>
                <th>Shoes For</th>
                <th>Shoes Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Specification</th>
                <th>Shoes Size</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $data)

            <tr>
          <td>{{$data->id}}</td>

                <td><a style="color: white;" href="{{ route('admin-manage-party.index',$data->company_id)}}"> {{$data->company_id}} </a></td>

        {{-- <td> {{$data->company_id}} </td> --}}
          <td>{{$data->company_name}}</td>
          <td>{{$data->product_title}}</td>

          <td><img src="{{ asset('public/Product_Main_Image/' . $data->p_front_image) }}"width="120px" hight="120px" /></td>
          {{-- <td><img src="{{ asset('public/Party_Licence/' . $data->company_licence) }}"width="120px" hight="120px" /></td> --}}
          <td>{{$data->brand_name}}</td>
          <td>{{$data->shoes_for}}</td>
          <td>{{$data->shoes_type}}</td>
          <td>{{$data->description}}</td>
          <td>{{$data->shoes_price}}</td>
          <td>{{$data->specification}}</td>
          <td>{{$data->shoes_size}}</td>
          <td>{{$data->created_at}}</td>
          <td>{{$data->status}}</td>




          <td><a class="btn btn-primary" href="{{ route('admin-manage-products.edit', $data->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top">Edit</a></td>



        <td>

                 <form action="{{ route('admin-manage-products.destroy', $data->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete">
                         Delete
                     </button>
                 </form>
             </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    </div>
                    </div>
                    </div>
</body>
</html>
@endsection







