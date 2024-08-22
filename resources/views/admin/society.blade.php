
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
                           <h4 class="card-title">Society List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".society-modal"><i class="ri-user-add-line"></i> ADD</button>

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 
                              </div>
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
                           <table id="societyDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Slno</th>
                                    <th>Society Name</th>                                   
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
   <div class="modal fade society-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Society Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{ route('store-society') }}" method="POST" id="societyform">
               <div class="modal-body">   
                  <div class="new-user-info">
                  
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="fname"> Society Name <span style="color:red">*</span> :</label>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Society Name">
                              <input type="hidden" class="form-control" id="society_id" name="society_id">
                              <span id="err_society" style="color:red;"></span>
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

   <div class="modal fade society-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-society') }}" method="POST" id="societydeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="society_del_id" name="society_del_id">
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
        
        var societyDataTable = $('#societyDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'society-list',
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
                           return `<div class="btn btn-sm btn-primary updatesocietyBtn" data-toggle="modal" data-target=".society-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                           <div class="btn btn-sm btn-danger deletesocietyBtn" data-toggle="modal" data-target=".society-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });

         $(document).on('click', '.updatesocietyBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#society_id").val(data.id);
            $("#err_society").html('');
            $("#updateForm").show();
            $("#submit").hide();
            $('#societyform').attr('action', '/admin/society/' + data.id + '/update');
         })

         $(document).on('click', '.deletesocietyBtn', function() {
            var data = $(this).data('value');
                       
            $("#society_del_id").val(data);           
            $('#societydeleteform').attr('action', '/admin/society/' + data + '/delete');
         })


         $('#submit').click(function (event) {
            
            event.preventDefault();
            if($("#name").val()==''){
               //swal("Error!", " Enter society name !", "warning");
               //setTimeout(function(){$("#msg").html('')},1000);
               $("#err_society").html('Enter society name !')
               return false;
            }
            else{
               $.ajax({
                  url: "{{ route('store-society') }}",
                  type: 'POST',
                  data: $("#societyform").serialize(),
                  success: function (result) {
                     console.log(result);
                     $("#name").val('');
                     swal("Success!", "Successfully Saved !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('society') }}";
                     },2000);

                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })


         $('#updateForm').click(function (event) {
            
            var society_id=$("#society_id").val();

            event.preventDefault();
            if($("#name").val()==''){
               //swal("Error!", " Enter society name !", "warning");
               //setTimeout(function(){$("#msg").html('')},1000);
               $("#err_society").html('Enter society name !')
               return false;
            }
            else{
               $.ajax({
                  url: '/admin/society/' + society_id + '/update',
                  type: 'POST',
                  data: $("#societyform").serialize(),
                  success: function (result) {
                     console.log(result);
                     //$("#name").val('');
                     swal("Success!", "Successfully updated !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('society') }}";
                     },2000);
                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })

         $('#deletesubmit').click(function (event) {
            
            var society_id= $("#society_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/society/' + society_id + '/delete',
               type: 'POST',
               data: $("#societydeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('society') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


        


        

         
    } );
</script>
