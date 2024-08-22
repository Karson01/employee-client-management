
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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ri-user-add-line"></i> ADD</button>

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
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

                           <div id="cf-data-container"></div>

                           <table id="user-list-table" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
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
   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
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
                           <input type="text" class="form-control" id="vat" placeholder="vat">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="add1">Indirizzo fatturazione :</label>
                           <input type="text" class="form-control" id="indirizzo_fatturazione"  name="indirizzo_fatturazione"  placeholder="Indirizzo fatturazione">
                        </div>
                        
                        <div class="form-group col-sm-6">
                           <label>Centro di costo :</label>
                           <select class="form-control" id="consorzio_id" name="consorzio_id">
                              <option>Select consorzio</option>
                              @foreach($consorzio as $consorziouser)
                                 <option value="{{$consorziouser->id}}">{{ $consorziouser->name }}</option>
                              @endforeach
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
                              @foreach($zones as $user)
                                 <option value="{{$user->id}}">{{ $user->name }}</option>
                              @endforeach
   
                             
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
                     "data": "id"
                  },
                  {
                     "data": "name"
                  },
                  {
                     "data": null,
                        "render": function(data, type, row, meta) {
                           return `<div class="btn btn-sm btn-primary updateclientBtn" data-toggle="modal" data-target=".client-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                           <div class="btn btn-sm btn-danger deleteBtn" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });

         $(document).on('click', '.updateclientBtn', function() {
            var data = $(this).data('value');
            $("#name").val(data.name);
            $("#client_id").val(data.id);
            $("#updateForm").show();
            $("#submit").hide();
            $('#clientform').attr('action', '/admin/client/' + data.id + '/update');
         })

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


         
    } );
</script>
