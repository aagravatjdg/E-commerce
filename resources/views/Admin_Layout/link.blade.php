<link rel="icon" href="{{ asset('Admin/images/logo/logo_icon.png')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('Admin/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('Admin/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('Admin/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('Admin/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('Admin/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('Admin/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('Admin/css/custom.css')}}" />

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Include DataTables CSS and JS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

      {{-- for datatables --}}


      @include('Admin_Layout.header')

      @yield('admin-section')

      @include('Admin_Layout.footer')
