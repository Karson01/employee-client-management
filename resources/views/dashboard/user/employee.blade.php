
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Web Soft</title>
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
                        <a href="#dashboard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-home-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        
                     </li>
                     <li class="active">
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-menu-3-line"></i><span>Client</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Add</a></li>
                           <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>List</a></li>
                           
                        </ul>

                        
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Employee</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Add</a></li>
                           <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>List</a></li>
                           
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
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               
               <div class="col-lg-9">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Employee Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="fname"> Name:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="lname">VAT:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="VAT">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="add1">Indirizzo fatturazione :</label>
                                    <input type="text" class="form-control" id="add1" placeholder="Indirizzo fatturazione">
                                 </div>
                                 
                                 <div class="form-group col-sm-6">
                                    <label>Centro di costo :</label>
                                    <select class="form-control" id="selectcountry">
                                       <option>Select Centro di costo</option>
                                       <option>Caneda</option>
                                       <option>Noida</option>
                                       <option >USA</option>
                                       <option>India</option>
                                       <option>Africa</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label>Contract with :</label>
                                    <select class="form-control" id="selectcountry">
                                       <option>Select Contract with</option>
                                       <option>Caneda</option>
                                       <option>Noida</option>
                                       <option >USA</option>
                                       <option>India</option>
                                       <option>Africa</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label>Zone :</label>
                                    <select class="form-control" id="selectcountry">
                                       <option>Select Zone</option>
                                       <option>Caneda</option>
                                       <option>Noida</option>
                                       <option >USA</option>
                                       <option>India</option>
                                       <option>Africa</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobno">Indirizzo negozio :</label>
                                    <input type="text" class="form-control" id="mobno" placeholder="Indirizzo negozio">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="altconno">Referente:</label>
                                    <input type="text" class="form-control" id="altconno" placeholder="Referente">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="altconno">Tel:</label>
                                    <input type="text" class="form-control" id="altconno" placeholder="Tel">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                 </div>
                                 
                              </div>
                              <hr>
                              
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
        

            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <!--li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li-->
                  </ul>
               </div>
               <!--div class="col-lg-6 text-right">
                  Copyright <span id="copyright"> 
<script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
</span> <a href="#">Vito</a> All Rights Reserved.
               </div-->
            </div>
         </div>
      </footer>
     
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('../../../asset/js/jquery.min.js') }}"></script>
        <!-- Rtl and Darkmode -->
        <script src="{{ asset('../../../asset/js/rtl.js') }}"></script>
        <script src="{{ asset('../../../asset/js/customizer.js') }}"></script>
      <script src="{{ asset('../../../asset/js/popper.min.js') }}"></script>
      <script src="{{ asset('../../../asset/js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('../../../asset/js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('../../../asset/js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('../../../asset/js/waypoints.min.js') }}"></script>
      <script src="{{ asset('../../../asset/js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('../../../asset/js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('../../../asset/js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('../../../asset/js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('../../../asset/js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('../../../asset/js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('../../../asset/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('../../../asset/js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('../../../asset/js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('../../../asset/js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('../../../asset/js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('../../../asset/js/animated.js') }}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('../../../asset/js/kelly.js') }}"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('../../../asset/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('../../../asset/js/custom.js') }}"></script>
   </body>
</html>
