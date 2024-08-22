
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
                           <h4 class="card-title">Zone List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".zone-modal"><i class="ri-user-add-line"></i> ADD</button>

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              
                              <!--div class="col-sm-12 col-md-6">
                                 <div class="user-list-files d-flex float-right">
                                    <a class="iq-bg-primary" href="javascript:void();" >
                                       Print
                                     </a>
                                    <a class="iq-bg-primary" href="javascript:void();">
                                       Excel
                                     </a>
                                     <a class="iq-bg-primary" href="javascript:void();">
                                       Pdf
                                     </a>
                                   </div>
                              </div-->
                           </div>


                           
                           <table id="zoneDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Slno</th>
                                    <th>Zone Name</th>                                   
                                    <th>Action</th>
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
   </div>
   <!-- Wrapper END -->
    
   <!-- Large modal -->                         
   <div class="modal fade zone-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Zone Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{ route('store-zone') }}" method="POST" id="zoneform">
            <div class="modal-body">   
               <div class="new-user-info">
                 
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="fname"> Zone Name <span style="color:red">*</span> : </label>
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="text" class="form-control" id="name" name="name" placeholder="Zone Name">
                           <input type="hidden" class="form-control" id="zone_id" name="zone_id">

                           <span id="err_zone" style="color:red;"></span>

                        </div>
                        
                        
                     </div>
                      
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
               <button type="submit" id="updateForm" style="display: none;" class="btn btn-primary">Update</button>
            </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade zone-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-zone') }}" method="POST" id="zonedeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="zone_del_id" name="zone_del_id">
                     <input type="hidden" value='1' class="form-control" id="is_active" name="is_active">
                     
                           
                        
                     
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" id="deletesubmit" class="btn btn-danger">Delete</button>
                  
               </div>
            </form>
         </div>
      </div>
   </div>


   
    
@endsection

@include("admin.layouts.footer")

<script type="text/javascript">
   $(document).ready( function () {  
        
        
        var zoneDataTable = $('#zoneDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'zone-list',
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
                           return `<div class="btn btn-sm btn-primary updatezoneBtn" data-toggle="modal" data-target=".zone-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                            <div class="btn btn-sm btn-danger deletezoneBtn" data-toggle="modal" data-target=".zone-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });

         $(document).on('click', '.updatezoneBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#zone_id").val(data.id);
            $("#err_zone").html('');
            $("#updateForm").show();
            $("#submit").hide();
            $('#zoneform').attr('action', '/admin/zone/' + data.id + '/update');
         })

         $(document).on('click', '.deletezoneBtn', function() {
            var data = $(this).data('value');
                       
            $("#zone_del_id").val(data);           
            $('#zonedeleteform').attr('action', '/admin/zone/' + data + '/delete');
         })

         $('#submit').click(function (event) {
            
            event.preventDefault();
            if($("#name").val()==''){
               //swal("Error!", " Enter zone name !", "warning");
               //setTimeout(function(){$("#msg").html('')},1000);
               $("#err_zone").html('Enter zone name !')
               return false;
            }
            else{

               $.ajax({
                  url: "{{ route('store-zone') }}",
                  type: 'POST',
                  data: $("#zoneform").serialize(),
                  success: function (result) {
                     console.log(result);
                     $("#name").val('');
                     swal("Success!", "Successfully Saved !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('zone') }}";
                     },2000);

                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })


         $('#updateForm').click(function (event) {
            
            var zone_id=$("#zone_id").val();
            if($("#name").val()==''){
               //swal("Error!", " Enter zone name !", "warning");
               //setTimeout(function(){$("#msg").html('')},1000);
               $("#err_zone").html('Enter zone name !')
               return false;
            }
            else{
               event.preventDefault();
               $.ajax({
                  url: '/admin/zone/' + zone_id + '/update',
                  type: 'POST',
                  data: $("#zoneform").serialize(),
                  success: function (result) {
                     console.log(result);
                     //$("#name").val('');
                     swal("Success!", "Successfully updated !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('zone') }}";
                     },2000);
                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })

         $('#deletesubmit').click(function (event) {
            
            var zone_id= $("#zone_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/zone/' + zone_id + '/delete',
               type: 'POST',
               data: $("#zonedeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('zone') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


        /* $('#updateForm').click(function (event) {
            alert('d');
            event.preventDefault();
            var name = $("#name").val();
            var zone_id = $("#zone_id").val();
            $.ajax({
               url: '/admin/zone/' + zone_id + '/update',
               type: 'PUT',
               dataType: 'json',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {
                  name : name,
                  zone_id : zone_id

               },
               success: function (response) {
                  const result = response.data
                  var table = $('#zoneDataTable').DataTable();
                  var rowData = table.row(selectedIndex).data();

                  rowData.name = result[0].name;
                  table.row(selectedIndex).data(rowData).draw();
               //clearFields()
               },error: function (XMLHttpRequest, textStatus, errorThrown) {
                  //alert(errorThrown);
                  console.log(errorThrown);
                  console.log(textStatus);
                  console.log(XMLHttpRequest);
               }
            })
         })*/

      /*    $('#zoneDataTable tbody').on('click', 'tr', function () {

            var id = $(this).data('value');
            alert(id);
            
            $.ajax({
					type: "GET",
					url: '/admin/zone/' + id + '/update',
					dataType:'json',
					success: function(result) {                     
                     $("#name").val(result[0].name);
						
					},error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
				});
         }); */


        

         
    } );
</script>



