

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
                                <h2>Manage Party</h2>
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
                <th>Company Id</th>
                <th>Company Name</th>
                <th>Company Logo</th>
                <th>Company Licence</th>
                <th>Address</th>
                <th>State</th>
                <th>City</th>
                <th>Zip</th>
                <th>Status</th>
                <th>Created At</th>
                <th>View</th>
                <th>Edit</th>
                <th>Verify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data)

            <tr>
                <td><a style="color: white;" href="{{ route('admin-manage-seller.index',$data->id)}}"> {{$data->id}} </a></td>
                <td>{{$data->company_id}}</td>
                <td>{{$data->company_name}}</td>
                <td><img src="{{ asset('public/Party_Logo/' . $data->company_logo) }}"
                        width="120px" height="120px" /></td>
                <td><img src="{{ asset('public/Party_Licence/' . $data->company_licence) }}"
                        width="120px" height="120px" /></td>
                <td>{{$data->address}}</td>
                <td>{{$data->state}}</td>
                <td>{{$data->city}}</td>
                <td>{{$data->zip}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->created_at}}</td>
                <td><a href="admin-manage-party/{{ $data->company_id }}"><i
                            class="fa fa-eye yellow_color"></i></a></td>
                <td><a class="btn btn-primary"
                        href="{{ route('admin-manage-party.edit', $data->id) }}"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Top">Edit</a></td>
                <td>
                    @if ($data->status == 'Not_verified')
                    <a class="btn btn-success"
                        href="{{ route('admin_manage_party',$data->company_id) }}"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Top">Verify</a>
                    @elseif ($data->status == 'Verified')
                    <input type="submit" name="submit" value="Verified" disabled
                        class="btn btn-success">
                    @else
                    <a class="btn btn-success"
                        href="{{ route('admin_manage_party',$data->company_id) }}"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Top">Verify</a>
                    @endif
                </td>
                <td>
                    <form action="{{ route('admin-manage-party.destroy', $data->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            data-toggle="tooltip" data-placement="right" title="Delete">
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


