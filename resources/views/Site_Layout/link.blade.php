<link rel="apple-touch-icon" href="{{ asset('Site/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Site/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('Site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Site/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('Site/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="{{ asset('Site/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

@include('Site_Layout.header')

@yield('main-section')

@include('Site_Layout.footer')
