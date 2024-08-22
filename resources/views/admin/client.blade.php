
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
                           <h4 class="card-title">Client List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".client-modal"><i class="ri-user-add-line"></i> ADD</button>

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

                           <div id="cf-data-container"></div>

                           <table id="clientDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Client Name</th>
                                    <th>Contract with</th>
                                    <th>Centro di costo</th>
                                    <th>Zone</th>
                                    <th>Reported issue</th>
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
   <div class="modal fade client-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Client Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form  action="{{ route('store-client') }}" method="POST" id="clientform">
            
            <div class="modal-body">
               <div class="new-user-info">
                  
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="fname"> Name:</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="lname">VAT:</label>
                           <input type="text" class="form-control" id="vat" name="vat" placeholder="vat">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="add1">Indirizzo fatturazione :</label>
                           <input type="text" class="form-control" id="indirizzo_fatturazione"  name="indirizzo_fatturazione"  placeholder="Indirizzo fatturazione">
                        </div>
                        
                        <div class="form-group col-sm-6">
                           <label>Centro di costo :</label>
                           <select class="form-control" id="consorzio_id" name="consorzio_id">
                              <option value="">--- Select Consorzio ---</option>
                           </select>
                        </div>
                        <div class="form-group col-sm-6">
                           <label>Contract with :</label>
                           <select class="form-control" id="contract_id" name="contract_id">
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
                           <select class="form-control" id="zone_id" name="zone_id">
                                                            
                              <option value="">--- Select Zone ---</option>
                             
   
                             
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="mobno">Indirizzo negozio :</label>
                           <input type="text" class="form-control" id="indirizzo_negozio" name="indirizzo_negozio" placeholder="Indirizzo negozio">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="altconno">Referente:</label>
                           <input type="text" class="form-control" id="referente" name="referente" placeholder="Referente">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="altconno">Tel:</label>
                           <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="email">Email:</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        
                     </div>
                     
                  
               </div>
            </div>
            <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" class="form-control" id="client_id" name="client_id">

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
                  <button type="submit" id="updateForm" style="display: none;" class="btn btn-primary">Update</button>
            </div>
            </form>
         </div>
      </div>
   </div>   

   <div class="modal fade client-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-client') }}" method="POST" id="clientdeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="client_del_id" name="client_del_id">
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
        
        var clientDataTable = $('#clientDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'client-list',
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

         $(document).on('click', '.updateclientBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#vat").val(data.vat);
            $("#indirizzo_fatturazione").val(data.indirizzo_fatturazione);
            setTimeout(function(){$("#consorzio_id").val(data.consorzio_id); },1000);
            setTimeout(function(){$("#contract_id").val(data.contract_id); },1000);
            setTimeout(function(){$("#zone_id").val(data.zone_id); },1000);          
            
            $("#indirizzo_negozio").val(data.indirizzo_negozio);
            $("#referente").val(data.referente);
            $("#tel").val(data.tel);
            $("#email").val(data.email);
            $("#client_id").val(data.id);
            $("#updateForm").show();
            $("#submit").hide();
            $('#clientform').attr('action', '/admin/client/' + data.id + '/update');
         })

         $(document).on('click', '.deleteclientBtn', function() {
            var data = $(this).data('value');
                       
            $("#client_del_id").val(data);           
            $('#clientdeleteform').attr('action', '/admin/client/' + data + '/delete');
         })


         $.ajax({
		
            type: "GET",
            url: "{{ route('zone-list') }}",
            success: function(result) {
              console.log(result.data);
               //var zone_id=result.data.id;
               //var zone_name=result.data.name;
               var d_length=result.data.length;
               console.log(d_length);
               var d_data='';
               for(var i=0;i<=d_length-1;i++){
                  d_data +='<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>';
                  
               }
               $("#zone_id").removeAttr("disabled");
               $("#zone_id").append(d_data);
               $(".page-loader").hide();	
            }							
         });

         $.ajax({
		
            type: "GET",
            url: "{{ route('consorzio-list') }}",
            success: function(result) {
            console.log(result.data);
               //var consorzio_id=result.data.id;
               //var consorzio_name=result.data.name;
               var d_length=result.data.length;
               console.log(d_length);
               var d_data='';
               for(var i=0;i<=d_length-1;i++){
                  d_data +='<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>';
                  
               }
               $("#consorzio_id").removeAttr("disabled");
               $("#consorzio_id").append(d_data);
               $(".page-loader").hide();	
            }							
         });


         $('#submit').click(function (event) {
            
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
         })


         
    } );
</script>
