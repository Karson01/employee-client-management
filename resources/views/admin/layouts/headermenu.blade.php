<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield("title")</title>
      <!-- Favicon -->
   
      <link rel="shortcut icon" href="{{ asset('../../../images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('../../../asset/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('../../../asset/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('../../../asset/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('../../../asset/css/responsive.css') }}">

   </head>
   <body >
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->

         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="#">
               <!--div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div-->
               <div class="iq-dark-logo">
                  <img src="{{ asset('../../../asset/images/logo_lara.png') }}" class="img-fluid" alt="">
               </div>
               <img src="{{ asset('../../../asset/images/logo_lara.png') }}" class="img-fluid" alt="" width='100%' style="text-align:center">
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                           <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li ><a href="{{url('dashboard')}}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a></li>
                     
                     
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{url('zone')}}"><i class="ri-font-color"></i>Zone</a></li>
                           <li><a href="{{url('society')}}"><i class="ri-font-color"></i>Society</a></li>
                           <li><a href="{{url('ccnl')}}"><i class="ri-font-color"></i>CCNL</a></li>
                           <li><a href="{{url('consorzio')}}"><i class="ri-font-color"></i>Consorzio</a></li>
                        </ul>
                     </li>
                     <li >
                        <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Client</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{url('client')}}"><i class="ri-profile-line"></i>Client Profile</a></li>
                           <li><a href="{{url('client-work')}}"><i class="ri-profile-line"></i>Client Work</a></li>
                           <li><a href="{{url('client-work-entry')}}"><i class="ri-profile-line"></i>Client Work Entry</a></li>
                           <li><a href="{{url('client-work-report')}}"><i class="ri-profile-line"></i>Client Work Report</a></li>
                           <!--li><a href="profile-edit.html"><i class="ri-file-edit-line"></i>User Edit</a></li>
                           <li><a href="add-user.html"><i class="ri-user-add-line"></i>User Add</a></li>
                           <li ><a href="user-list.html"><i class="ri-file-list-line"></i>User List</a></li-->
                        </ul>
                     </li>
                     <li >
                        <a href="#employeeinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Employee</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="employeeinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{url('employee')}}"><i class="ri-profile-line"></i>Employee Profile</a></li>
                           <li><a href="{{url('employee-work')}}"><i class="ri-profile-line"></i>Employee Work</a></li>
                           <li><a href="{{url('employee-work-entry')}}"><i class="ri-profile-line"></i>Employee Work Entry</a></li>
                           <li><a href="{{url('employee-work-report')}}"><i class="ri-profile-line"></i>Employee Work Report</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Setup</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{url('user-permission')}}"><i class="ri-file-list-line"></i>User Permission</a></li>
                           <!--li><a href="e-commerce-product-detail.html"><i class="ri-pages-line"></i>Product Details</a></li>
                           <li><a href="e-commerce-checkout.html"><i class="ri-shopping-cart-2-line"></i>Checkout</a></li>
                           <li><a href="e-commerce-wishlist.html"><i class="ri-heart-line"></i>Wishlist</a></li-->
                        </ul>
                     </li>
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="images/logo-dark.gif" class="img-fluid" alt="">
               </div>
                     <span>Moveo Servizi</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">
                  
                  <div class="iq-search-bar d-none d-md-block">
                     
                  </div>
               </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        
                        
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">1</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                         
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">Hai</p>
                                          </div>
                                       </div>
                                    </a>
                                    
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                      <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img src="{{ asset('../../../asset/images/user/1.png') }}" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height text-white">Nik jone</h6>
                              <span class="font-size-12 text-white">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>


                <!-- TOP Nav Bar -->
         <!--div class="iq-top-navbar">
            <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="#" class="logo">
                        
                     <span>Web Soft</span>
                     </a>
                  </div>
               </div>
               <div class="iq-menu-horizontal">
                  <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                     <li>
                        <a href="{{url('dashboard')}}" class="iq-waves-effect collapsed" ><i class="ri-home-line"></i><span>Dashboard</span></a>
                        
                     </li>
                     <li class="active">
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-menu-3-line"></i><span>Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="{{url('client/employee')}}"><i class="ri-git-commit-line"></i>Centro di costo</a></li>
                           <li><a href="{{url('client/zone')}}"><i class="ri-text-spacing"></i>Zone</a></li>
                           
                        </ul>

                        
                     </li>

                     <li class="active">
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-menu-3-line"></i><span>Client</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="{{url('client')}}"><i class="ri-git-commit-line"></i>Add</a></li>
                           
                           
                        </ul>

                        
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Employee</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="{{url('employee')}}"><i class="ri-git-commit-line"></i>Add</a></li>
                           
                           
                        </ul>
                        
                     </li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>SetUp</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        
                     </li>
                  </ul>
               </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div-->
         <!-- TOP Nav Bar END -->
               

            </div>
         </div>
      <!-- TOP Nav Bar END -->

        
        