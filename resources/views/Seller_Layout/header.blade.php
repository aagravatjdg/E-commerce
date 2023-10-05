<div class="full_container">
    <div class="inner_container">
       <!-- Sidebar  -->
       <nav id="sidebar">
          <div class="sidebar_blog_1">
             <div class="sidebar-header">
                <div class="logo_section">
                   <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('public/Profile_Image/' . auth()->user()->profile_pic) }}" alt="#" /></a>
                </div>
             </div>
             <div class="sidebar_user_info">
                <div class="icon_setting"></div>
                <div class="user_profle_side">
                   <div class="user_img"><img class="img-responsive" src="{{ asset('public/Profile_Image/' . auth()->user()->profile_pic) }}" alt="#" /></div>
                   <div class="user_info">
                      <h6>{{auth()->user()->name}} </h6>
                      <p><span class="online_animation"></span> Online</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="sidebar_blog_2">
             <h4>General</h4>
             <ul class="list-unstyled components">
                {{-- <li class="active">
                   <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                   <ul class="collapse list-unstyled" id="dashboard">
                      <li>
                         <a href="{{ url('seller-panel')}}">> <span>Default Dashboard</span></a>
                      </li>
                      <li>
                         <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                      </li>
                   </ul>
                </li> --}}

                {{-- <li class="#active">
                    <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-home red_color"></i> <span>Company Profile</span></a>
                    <ul class="collapse list-unstyled" id="user">
                       <li>
                          <a href="{{ url('seller-company-detail') }}">> <span>Company Detail</span></a>
                       </li>
                       <li>
                          <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                       </li>
                    </ul>
                 </li> --}}
                <li><a href="{{ url('seller-panel') }}"><i class="fa fa-dashboard yellow_color"></i>  <span>Dashboard</span></a></li>

                <li><a href="{{ url('seller-company-detail') }}"><i class="fa fa-home red_color"></i> <span>Company Profile</span></a></li>

                {{-- <li><a href="{{url('seller-manage-products')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Products</span></a></li> --}}
                <li><a href="{{url('seller-products-list')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Products List</span></a></li>
                <li><a href="{{url('seller-manage-orders')}}"><i class="fa fa-shopping-cart red_color"></i> <span>Orders</span></a></li>

                {{-- <li>
                   <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                   <ul class="collapse list-unstyled" id="element">
                      <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                      <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                      <li><a href="icons.html">> <span>Icons</span></a></li>
                      <li><a href="invoice.html">> <span>Invoice</span></a></li>
                   </ul>
                </li> --}}
                {{-- <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                <li>
                   <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                   <ul class="collapse list-unstyled" id="apps">
                      <li><a href="email.html">> <span>Email</span></a></li>
                      <li><a href="calendar.html">> <span>Calendar</span></a></li>
                      <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                   </ul>
                </li> --}}
                {{-- <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                <li>
                   <a href="contact.html">
                   <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                </li> --}}
                {{-- <li class="active">
                   <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                   <ul class="collapse list-unstyled" id="additional_page">
                      <li>
                         <a href="profile.html">> <span>Profile</span></a>
                      </li>
                      <li>
                         <a href="project.html">> <span>Projects</span></a>
                      </li>
                      <li>
                         <a href="login.html">> <span>Login</span></a>
                      </li>
                      <li>
                         <a href="404_error.html">> <span>404 Error</span></a>
                      </li>
                   </ul>
                </li> --}}
                {{-- <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> --}}
             </ul>
          </div>
       </nav>
       <!-- end sidebar -->
       <!-- right content -->
       <div id="content">
          <!-- topbar -->
          <div class="topbar">
             <nav class="navbar navbar-expand-lg navbar-light">
                <div class="full">
                   <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                   <div class="logo_section">
                      <a href=""><img class="img-responsive" src="{{asset('Admin/images/logo/logo.png')}}" alt="#" /></a>
                   </div>
                   <div class="right_topbar">
                      <div class="icon_info">
                         {{-- <ul>
                            <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                            <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                         </ul> --}}
                         <ul class="user_profile_dd">
                            <li>
                               <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('public/Profile_Image/' . auth()->user()->profile_pic) }}" alt="#" /><span class="name_user">{{auth()->user()->name}}</span></a>
                               <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{url('seller-profile')}}">My Profile</a>
                                  <a class="dropdown-item" href="{{url('seller-change-password')}}">Change Password</a>
                                  {{-- <a class="dropdown-item" href="help.html">Help</a> --}}
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>

                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </nav>
          </div>
          <!-- end topbar -->
