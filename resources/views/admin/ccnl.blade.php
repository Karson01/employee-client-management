
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
                           <h4 class="card-title">CCNL List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ccnl-modal"><i class="ri-user-add-line"></i> ADD</button>

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                             
                           </div>
                           <table id="ccnlDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Slno</th>
                                    <th>CCNL Name</th>                                   
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
   <div class="modal fade ccnl-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">CCNL Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{ route('store-ccnl') }}" method="POST" id="ccnlform">
               <div class="modal-body">   
                  <div class="new-user-info">
                  
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="fname"> CCNL Name <span style="color:red">*</span> :</label>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="text" class="form-control" id="name" name="name" placeholder="CCNL Name">
                              <input type="hidden" class="form-control" id="ccnl_id" name="ccnl_id">
                              <span id="err_ccnl" style="color:red;"></span>
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

   <div class="modal fade ccnl-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-ccnl') }}" method="POST" id="ccnldeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="ccnl_del_id" name="ccnl_del_id">
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
        
        var ccnlDataTable = $('#ccnlDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'ccnl-list',
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
                           return `<div class="btn btn-sm btn-primary updateccnlBtn" data-toggle="modal" data-target=".ccnl-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                           <div class="btn btn-sm btn-danger deleteccnlBtn" data-toggle="modal" data-target=".ccnl-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });

         $(document).on('click', '.updateccnlBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#ccnl_id").val(data.id);
            $("#err_ccnl").html('');
            $("#updateForm").show();
            $("#submit").hide();
            $('#ccnlform').attr('action', '/admin/ccnl/' + data.id + '/update');
         })

         $(document).on('click', '.deleteccnlBtn', function() {
            var data = $(this).data('value');
                       
            $("#ccnl_del_id").val(data);           
            $('#ccnldeleteform').attr('action', '/admin/ccnl/' + data + '/delete');
         })


         $('#submit').click(function (event) {
            
            event.preventDefault();
            if($("#name").val()==''){
               $("#err_ccnl").html('Enter ccnl name !')
               return false;
            }
            else{
               $.ajax({
                  url: "{{ route('store-ccnl') }}",
                  type: 'POST',
                  data: $("#ccnlform").serialize(),
                  success: function (result) {
                     console.log(result);
                     $("#name").val('');
                     swal("Success!", "Successfully Saved !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('ccnl') }}";
                     },2000);

                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })


         $('#updateForm').click(function (event) {
            
            var ccnl_id=$("#ccnl_id").val();

            event.preventDefault();
            if($("#name").val()==''){
               $("#err_ccnl").html('Enter ccnl name !')
               return false;
            }
            else{
               $.ajax({
                  url: '/admin/ccnl/' + ccnl_id + '/update',
                  type: 'POST',
                  data: $("#ccnlform").serialize(),
                  success: function (result) {
                     console.log(result);
                     //$("#name").val('');
                     swal("Success!", "Successfully updated !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('ccnl') }}";
                     },2000);
                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })

         $('#deletesubmit').click(function (event) {
            
            var ccnl_id= $("#ccnl_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/ccnl/' + ccnl_id + '/delete',
               type: 'POST',
               data: $("#ccnldeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('ccnl') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


        


        

         
    } );
</script>
