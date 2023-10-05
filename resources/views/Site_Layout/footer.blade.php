{{-- @php
namespace App\Http\Controllers;

   use App\Http\Controllers\Site_header_footer_controller;

   Site_header_footer_controller::moj();
@endphp --}}
{{-- @php
    // namespace App\Http\Controllers;
    App\Http\Controllers\Site_header_footer_controller::test();
    foreach ($sites as $site) {
         $site->id;
    }
@endphp --}}
{{-- {{  App\Http\Controllers\Site_header_footer_controller::test();  }} --}}
@php
    // Call the static controller method and store the result in a variable
    $site = \App\Http\Controllers\Site_header_footer_controller::test();

    $data = \App\Http\Controllers\Site_header_footer_controller::moj();

@endphp
<!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                {{-- @foreach($siteData as $site) --}}
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">{{$data->site_name}} Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            {{$site->address}}
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:{{$site->number}}">{{$site->number}}
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:{{$site->gmail}}">{{$site->gmail}}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Fashion Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Fency Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Trendy Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Loafer Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" target="_blank" href="#">Home</a></li>
                        <li><a class="text-decoration-none" target="_blank" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" target="_blank" href="{{$site->location_link}}">Shop Locations</a></li>
                        <li><a class="text-decoration-none" target="_blank" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="{{$site->facebook}}"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="{{$site->instagram}}"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="{{$site->twitter}}"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="{{$site->linkedin}}"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                {{-- <iframe src="https://www.google.com/maps/d/embed?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ehbc=2E312F" width="640" height="480"></iframe> --}}
            </div>
        </div>
        {{-- @endforeach --}}
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 | {{$data->site_name}}
                            | Designed by <a rel="sponsored" href="" target="_blank">Amit Agravat</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="{{ asset('Site/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{ asset('Site/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('Site/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('Site/js/templatemo.js')}}"></script>
    <script src="{{ asset('Site/js/custom.js')}}"></script>

    <script src="{{ asset('Site/js/slick.min.js')}}"></script>

    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>


