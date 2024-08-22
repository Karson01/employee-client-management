
@extends('admin.layouts.layout')

@section("title", "SIXWEBSOFT")

@section("content")
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">                  

                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Client Work Entry List</h4>
                        </div>

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           
                           <form   method="POST" id="clientworkform">         
                           
                              <div class="row">
                              <div class="form-group col-sm-4">
                                 <select class="form-control" id="client_id" name="client_id">
                                                                  
                                    <option value="">--- Select Client ---</option>                       
                                          
                                 </select>
                              </div>
                              
                                 <div class="form-group col-md-4">                         
                                
                                    <input type="date" class="form-control" id="select_date" name="select_date" value='<?php echo date('Y-m-d');?>'>
                                    
                                 </div>
                                 <div class="form-group col-md-4">
                                    <button type="submit" name='search' id='search' class="btn btn-primary">Search</button>
                                    
                                 </div>                     
                     
                                 
                              </div>
                           </form>                         


                           <table id="clientDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th width="5%">Slno</th>
                                    <th width="20%">Employee Name</th>
                                    <th width="15%">IN 1</th>
                                    <th width="15%">OUT 1</th>
                                    <th width="15%">IN 2</th>
                                    <th width="15%">OUT 2</th>
                                    <th width="20%">Action</th>
                                 </tr>
                             </thead>
                             
                           </table>
                        </div>
                           
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>   

   <!-- Wrapper END -->   

    
@endsection

@include("admin.layouts.footer")



<script type="text/javascript">
   $(document).ready( function () {    
             
        

         $.ajax({
		
            type: "GET",
            url: "{{ route('client-list') }}",
            success: function(result) {
            console.log(result.data);
               //var client_id=result.data.id;
               //var client_name=result.data.name;
               var d_length=result.data.length;
               console.log(d_length);
               var d_data='';
               for(var i=0;i<=d_length-1;i++){
                  d_data +='<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>';
                  
               }
               $("#client_id").removeAttr("disabled");
               $("#client_id").append(d_data);
               $(".page-loader").hide();	
            }							
         });


         $('#table').on( 'click', 'tbody td:nth-child(3)', function (e) {
               editor.inline( this );
         } );



         $(document).on('blur', '.check_out2', function() {
            var data = $(this).data('value');
            console.log(JSON.stringify(data));
            var employee_id=$("#check_out2_"+data.id).val();  
            var fromdate = $("#select_date").val(); 
            var client_id = $("#client_id").val(); 
            //alert(check_out2);
            //alert(fromdate );

            /*$.ajax({
               url: "{{ route('store-client') }}",
               type: 'POST',
               data: $("#clientform").serialize(),
               success: function (result) {
                  console.log(result);
                  $("#name").val('');
                  swal("Success!", "Successfully Saved !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('client') }}";
                  },2000);

               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })*/

         })

         $("#search").click(function(e){
            e.preventDefault();
            var fromdate = $("#select_date").val(); 
            var client_id = $("#client_id").val(); 
               
            //$("#clientDataTable").DataTable().fnDestroy();
               var clientDataTable = $('#clientDataTable').DataTable({
               "processing": true,
               "serverSide": true,
               "ajax": {
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
               },
               "ajax": 'client-work-entry-list',
               "columns": [{
                        "data": "id",
                        render: function (data, type, row, meta) {
                           return meta.row + meta.settings._iDisplayStart + 1;
                        }
                     
                     },
                     {
                        "data": "name"
                     },
                     {
                        "data": null,
                           "render": function(data, type, row, meta) {
                              return `<input type="text" data-value='${JSON.stringify(row)}' class="form-control col-md-6 check_in1" id="check_in1_${JSON.stringify(row.id)}" name="check_in1[]">`;
                           }
                     },
                     {
                        "data": null,
                           "render": function(data, type, row, meta) {
                              return `<input type="text" data-value='${JSON.stringify(row)}' class="form-control col-md-6 check_out1" id="check_out1_${JSON.stringify(row.id)}" name="check_out1[]">`;
                           }
                     },
                     {
                        "data": null,
                           "render": function(data, type, row, meta) {
                              return `<input type="text" data-value='${JSON.stringify(row)}' class="form-control col-md-6 check_in2" id="check_in2_${JSON.stringify(row.id)}" name="check_in2[]">`;
                           }
                     },
                     {
                        "data": null,
                           "render": function(data, type, row, meta) {
                              return `<input type="text" data-value='${JSON.stringify(row)}' class="form-control col-md-6 check_out2" id="check_out2_${JSON.stringify(row.id)}" name="check_out2[]">`;
                           }
                     },                 
                     {
                        "data": null,
                           "render": function(data, type, row, meta) {
                              return `<div class="btn btn-sm btn-primary updateclientBtn"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                              `;
                           }
                     }
               ],
               "rowId": "id"
            });       		

         });


         $(document).on('click', '.updateclientBtn', function() {
            var data = $(this).data('value');
            console.log(JSON.stringify(data));
            alert(data.id);
            
            /*$("#client_id").val(data.id);
               $('#clientworkDataTable').DataTable({
                  "processing": true,
                  "serverSide": true,
                  "ajax": {
                        "dataType": "json",
                        "type": "POST",
                        "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
                  },
                  "ajax": 'client-work-entry-list',
                  "columns": [{
                           "data": "id",
                           render: function (data, type, row, meta) {
                              return meta.row + meta.settings._iDisplayStart + 1;
                           }
                        
                        },
                        {
                           "data": "name"
                        },
                        {
                           "data": "name"
                        },
                        {
                           "data": "name"
                        },                 
                        {
                           "data": null,
                              "render": function(data, type, row, meta) {
                                 return `<div class="btn btn-sm btn-primary updateclientBtn" data-toggle="modal" data-target=".client-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                                 <div class="btn btn-sm btn-danger deleteclientBtn" data-toggle="modal" data-target=".client-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                                 `;
                              }
                        }
                  ],
                  "rowId": "id"
               });
            $("#updateForm").show();
            $('#clientform').attr('action', '/admin/client/' + data.id + '/update');*/
         })

        

         


         /*$('#submit').click(function (event) {
            
            event.preventDefault();
            $.ajax({
               url: "{{ route('store-client') }}",
               type: 'POST',
               data: $("#clientform").serialize(),
               success: function (result) {
                  console.log(result);
                  $("#name").val('');
                  swal("Success!", "Successfully Saved !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('client') }}";
                  },2000);

               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


         $('#updateForm').click(function (event) {
            
            var client_id=$("#client_id").val();

            event.preventDefault();
            $.ajax({
               url: '/admin/client/' + client_id + '/update',
               type: 'POST',
               data: $("#clientform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully updated !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('client') }}";
                  },2000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })

         $('#deletesubmit').click(function (event) {
            
            var client_id= $("#client_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/client/' + client_id + '/delete',
               type: 'POST',
               data: $("#clientdeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('client') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })*/


         
    } );
</script>
