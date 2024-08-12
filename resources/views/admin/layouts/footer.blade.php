
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
      <!--script src="{{ asset('../../../asset/js/owl.carousel.min.js') }}"></script-->
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('../../../asset/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('../../../asset/js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('../../../asset/js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <!--script src="{{ asset('../../../asset/js/core.js') }}"></script-->
      <!-- am charts JavaScript -->
      <!--script src="{{ asset('../../../asset/js/charts.js') }}"></script-->
      <!-- am animated JavaScript -->
      <!--script src="{{ asset('../../../asset/js/animated.js') }}"></script-->
      <!-- am kelly JavaScript -->
      <!--script src="{{ asset('../../../asset/js/kelly.js') }}"></script-->
      <!-- Flatpicker Js -->
      <!--script src="https://cdn.jsdelivr.net/npm/flatpickr"></script-->
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('../../../asset/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('../../../asset/js/custom.js') }}"></script>


      
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<!-- Your HTML -->

<script type="text/javascript">
      $(document).ready(function(){
        
         $('#submit').click(function(e){

            
            e.preventDefault(); // this prevents the form from submitting
            $.ajax({
            url: '/clientlist',
            type: "post",
            data: {'name':$('input[name=name]').val(), '_token': $('input[name=_token]').val()},
            dataType: 'JSON',
            success: function (data) {
               console.log(data); // this is good
            }
            });
         });



         // Send the Ajax request
        
         $.ajax({
            url: "client-list",
            type: "GET",
            dataType: "json",
            success: function (data) {
               alert('ff');
                  // Handle the response data
                  // For this example, we simply display it in the data-container div
                  var html = '';
                  $.each(data, function(index, item) {
                     html += '<p>' + item.name + '</p>';
                  });
                  $('#cf-data-container').html(html);
            },
            error: function (xhr, status, error) {
                  // Handle errors, if any
                  console.log(error);
            }
         });


         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#user-list-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "client-list",
                columns: [{
                        data: 'branch_name',
                        name: 'branch_name'
                    },
                    {
                        data: 'branch_address1',
                        name: 'branch_address1'
                    },
                    {
                        data: 'branch_address2',
                        name: 'branch_address2'
                    },
                    {
                        data: 'area_desc',
                        name: 'area_desc'
                    },
                    {
                        data: 'branch_manager_name',
                        name: 'branch_manager_name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });


      });
   </script>


   </body>
</html>