@extends('Admin_Layout.link')

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      @section('admin-section')

   </head>
   <body class="inner_page profile_page">
      <div class="full_container">
         <div class="inner_container">

            <!-- end sidebar -->
            <!-- right content -->
               <!-- end topbar -->
               <!-- dashboard inner -->
               @if($user)
               @foreach ($user as $user)

               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Company profile</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section -->
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="180" class="rounded-circle" src="{{ asset('public/Party_Logo/' . $user->company_logo) }}" alt="#" /></div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3> {{$user->company_name}} </h3>
                                                <p><strong>join Date: </strong>{{$user->created_at}}</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : {{$user->user->email}}</li>
                                                   <li><i class="fa fa-phone"></i> : {{$user->user->number}}</li>
                                                </ul>
                                             </div>

                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                       <div class="full inner_elements margin_top_30">
                                          <div class="tab_style2">
                                             <div class="tabbar">
                                                <nav>
                                                   <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Company Licence</a>
                                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Company Detail</a>
                                                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Owner Detail</a>
                                                   </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                   <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                                      <div class="msg_list_main">
                                                         <ul class="msg_list">
                                                            <img src="{{ asset('public/Party_Licence/' . $user->company_licence) }}" class="img-responsive" alt="#">
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab"><br>
                                                        <center>
                                                            <ul class="list-unstyled">
                                                                <label for="">Company Id</label> : {{$user->company_id}}</li><br>
                                                                <label for="">Company Name</label> : {{$user->company_name}}</li><br>
                                                                <label for="">Address</label> : {{$user->address}}</li><br>
                                                                <label for="">State</label> : {{$user->state}}</li><br>
                                                                <label for="">City</label> : {{$user->city}}</li><br>
                                                                <label for="">Zip</label> : {{$user->zip}}</li><br>
                                                                <label for="">Status</label> : {{$user->status}}</li><br>
                                                                <label for="">Created At</label> : {{$user->created_at}}</li><br>
                                                             </ul>
                                                        </center>
                                                   </div>
                                                   <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab"><br>
                                                    <center>
                                                        <ul class="list-unstyled">
                                                            <label for="">Name</label> : {{$user->user->name}}</li><br>
                                                            <label for="">Number</label> : {{$user->user->number}}</li><br>
                                                            <label for="">Email</label> : {{$user->user->email}}</li><br>
                                                            <label for="">Gender</label> : {{$user->user->gender}}</li><br>
                                                            <label for="">Status</label> : {{$user->user->status}}</li><br>
                                                            <label for="">Created At</label> : {{$user->user->created_at}}</li><br>
                                                         </ul>
                                                    </center>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     </div>
                  </div>
                  <!-- end dashboard inner -->
               </div>
         </div>
      </div>
      @endforeach

      @else
      {{"User Not  Found"}}
      @endif


      @endsection

   </body>
</html>
