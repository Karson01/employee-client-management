
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
                           <h4 class="card-title">Consorzio List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".consorzio-modal"><i class="ri-user-add-line"></i> ADD</button>

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
                           <table id="consorzioDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Slno</th>
                                    <th>Consorzio Name</th>                                   
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
   <div class="modal fade consorzio-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Consorzio Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{ route('store-consorzio') }}" method="POST" id="consorzioform">
               <div class="modal-body">   
                  <div class="new-user-info">
                  
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="fname"> Consorzio Name <span style="color:red">*</span> :</label>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Consorzio Name">
                              <input type="hidden" class="form-control" id="consorzio_id" name="consorzio_id">
                              <span id="err_consorzio" style="color:red;"></span>
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


   <div class="modal fade consorzio-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-consorzio') }}" method="POST" id="consorziodeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="consorzio_del_id" name="consorzio_del_id">
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
        
         
      var consorzioDataTable = $('#consorzioDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'consorzio-list',
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
                           return `<div class="btn btn-sm btn-primary updateconsorzioBtn" data-toggle="modal" data-target=".consorzio-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                           <div class="btn btn-sm btn-danger deleteconsorzioBtn" data-toggle="modal" data-target=".consorzio-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });


         $(document).on('click', '.updateconsorzioBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#consorzio_id").val(data.id);
            $("#err_consorzio").html('');
            $("#updateForm").show();
            $("#submit").hide();
            $('#consorzioform').attr('action', '/admin/consorzio/' + data.id + '/update');
         })

         $(document).on('click', '.deleteconsorzioBtn', function() {
            var data = $(this).data('value');
                       
            $("#consorzio_del_id").val(data);           
            $('#consorziodeleteform').attr('action', '/admin/consorzio/' + data + '/delete');
         })

         $('#submit').click(function (event) {
            
            event.preventDefault();
            if($("#name").val()==''){
               $("#err_consorzio").html('Enter consorzio name !')
               return false;
            }
            else{
               $.ajax({
                  url: "{{ route('store-consorzio') }}",
                  type: 'POST',
                  data: $("#consorzioform").serialize(),
                  success: function (result) {
                     console.log(result);
                     $("#name").val('');
                     swal("Success!", "Successfully Saved !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('consorzio') }}";
                     },2000);

                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })


         $('#updateForm').click(function (event) {
            
            var consorzio_id=$("#consorzio_id").val();

            event.preventDefault();
            if($("#name").val()==''){
               $("#err_consorzio").html('Enter consorzio name !')
               return false;
            }
            else{
               $.ajax({
                  url: '/admin/consorzio/' + consorzio_id + '/update',
                  type: 'POST',
                  data: $("#consorzioform").serialize(),
                  success: function (result) {
                     console.log(result);
                     //$("#name").val('');
                     swal("Success!", "Successfully updated !", "success");
                     setTimeout(function(){
                        window.location.href="{{ route('consorzio') }}";
                     },2000);
                  
                  },error:function(xhr,status,error){
                     console.log(JSON.stringify(xhr,status,error));
                  }
               })
            }
         })


         $('#deletesubmit').click(function (event) {
            
            var consorzio_id= $("#consorzio_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/consorzio/' + consorzio_id + '/delete',
               type: 'POST',
               data: $("#consorziodeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('consorzio') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


        


         
    } );
</script>
