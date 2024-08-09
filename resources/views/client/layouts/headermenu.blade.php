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

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

   </head>
   <body class="iq-page-menu-horizontal">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
        
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="#" class="logo">
                        <!--div class="iq-light-logo">
                           <img src="images/logo.gif" class="img-fluid" alt="">
                        </div>
                        <div class="iq-dark-logo">
                           <img src="images/logo-dark.gif" class="img-fluid" alt="">
                        </div-->
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
         </div>
         <!-- TOP Nav Bar END -->