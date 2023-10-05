

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
                    </div>
                    <div class="row">



    <div style="overflow-x:auto;">

    <table id="mytable" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)

        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->subject}}</td>
          <td>{{$data->message}}</td>
          <td>{{$data->created_at}}</td>




          <td><a class="btn btn-primary" href="{{ route('site-contact.edit', $data->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top">Edit</a></td>



        <td>

                 <form action="{{ route('site-contact.destroy', $data->id) }}" method="POST">
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







