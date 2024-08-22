
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
                           <h4 class="card-title">Employee List</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".employee-modal"><i class="ri-user-add-line"></i> ADD</button>

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
                           <table id="employeeDataTable" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Employee Name</th>
                                    <th>Code</th>
                                    <th>Contract with</th>
                                    <th>Main Shop</th>
                                    <th>Hr month</th>
                                    <th>time stamp</th>
                                    <th>vacation</th>
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
   <div class="modal fade employee-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Employee Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form  action="{{ route('store-employee') }}" method="POST" id="employeeform">
            <div class="modal-body">
               <div class="new-user-info">
                  
                     <div class="row">
                        <div class="form-group col-md-4">
                           <label for="fname"> Name:</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="lname">Sur Name:</label>
                           <input type="text" class="form-control" id="sur_name" name="sur_name" placeholder="sur name">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="add1">Codice Fiscale :</label>
                           <input type="text" class="form-control" name="codice_fiscale" id="codice_fiscale" placeholder="Codice Fiscalee">
                        </div>
                        
                        <div class="form-group col-sm-4">
                           <label>Negozio principale :</label>
                           <select class="form-control" name="negozio_principale_id" id="negozio_principale_id">
                              <option>Select Negozio principale</option>
                              <option>Caneda</option>
                              <option>Noida</option>
                              <option >USA</option>
                              <option>India</option>
                              <option>Africa</option>
                           </select>
                        </div>
                        
                        <div class="form-group col-md-4">
                           <label for="mobno">tel phone :</label>
                           <input type="text" class="form-control" name="tel_phone" id="tel_phone" placeholder="telefono">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="email">Email:</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Mansione:</label>
                           <input type="text" class="form-control" name="mansione" id="mansione" placeholder="Mansione">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Tel:</label>
                           <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel">
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Contract with :</label>
                           <select class="form-control" name="contract_id" id="contract_id">
                              <option>Select Contract with</option>
                              <option>Caneda</option>
                              <option>Noida</option>
                              <option >USA</option>
                              <option>India</option>
                              <option>Africa</option>
                           </select>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Tipe of contract :</label>
                           <input type="text" class="form-control" name="tipe_of_contract" id="tipe_of_contract" placeholder="Tipe of contract">
                        </div>
                        <div class="form-group col-sm-4">
                           <label>CCNL :</label>
                           <select class="form-control" name="ccnl_id" id="ccnl_id">
                              <option>Select CCNL</option>
                              <option>Caneda</option>
                              <option>Noida</option>
                              <option >USA</option>
                              <option>India</option>
                              <option>Africa</option>
                           </select>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Livello :</label>
                           <input type="text" class="form-control" name="livello" id="livello" placeholder="Livello">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="altconno">Ore contratto :</label>
                           <input type="text" class="form-control" name="ore_contratto" id="ore_contratto" placeholder="Ore contratto
">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Orario notturno :</label>
                           <input type="text" class="form-control" name="orario_notturno" id="orario_notturno" placeholder="Orario notturno">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Data assunzione :</label>
                           <input type="text" class="form-control" name="data_assunzione" id="data_assunzione" placeholder="Data assunzione">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="altconno">Data scadenza :</label>
                           <input type="text" class="form-control" name="data_scadenza" id="data_scadenza" placeholder="Data scadenza">
                        </div>
                        
                        
                     </div>
                     
                  
               </div>
            </div>
            <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" class="form-control" id="employee_id" name="employee_id">

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
                  <button type="submit" id="updateForm" style="display: none;" class="btn btn-primary">Update</button>
            </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade employee-delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-mg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>           

            <form  action="{{ route('store-employee') }}" method="POST" id="employeedeleteform">
               <div class="modal-body">   
                  <div class="new-user-info">
                     <p class="confirmation-message"> 
                        Are you sure you want to delete this item? 
                     </p>
                  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" class="form-control" id="employee_del_id" name="employee_del_id">
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
        
        var employeeDataTable = $('#employeeDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                  "dataType": "json",
                  "type": "POST",
                  "data":{ _token: $('meta[name="csrf-token"]').attr('content') }
            },
            "ajax": 'employee-list',
            "columns": [
                  {
                     "data": "name"
                  },
                  {
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
                     "data": "name"
                  },
                  {
                     "data": null,
                        "render": function(data, type, row, meta) {
                           return `<div class="btn btn-sm btn-primary updateemployeeBtn" data-toggle="modal" data-target=".employee-modal"  data-value='${JSON.stringify(row)}'><i class="ri-pencil-line"></i></div>
                            <div class="btn btn-sm btn-danger deleteemployeeBtn" data-toggle="modal" data-target=".employee-delete-modal" data-value='${JSON.stringify(row.id)}'><i class="ri-delete-bin-line"></i></div>
                           `;
                        }
                  }
            ],
            "rowId": "id"
         });

         $(document).on('click', '.updateemployeeBtn', function() {
            var data = $(this).data('value');

            $("#name").val(data.name);
            $("#sur_name").val(data.sur_name);
            $("#codice_fiscale").val(data.codice_fiscale);
            setTimeout(function(){$("#negozio_principale_id").val(data.negozio_principale_id); },1000);
            setTimeout(function(){$("#contract_id").val(data.contract_id); },1000);
            setTimeout(function(){$("#ccnl_id").val(data.ccnl_id); },1000);          
            
            $("#email").val(data.email);
            $("#mansione").val(data.mansione);
            $("#tel").val(data.tel);
            $("#tipe_of_contract").val(data.tipe_of_contract);
            $("#livello").val(data.livello);
            $("#ore_contratto").val(data.ore_contratto);
            $("#orario_notturno").val(data.orario_notturno);
            $("#data_assunzione").val(data.data_assunzione);
            $("#data_scadenza").val(data.data_scadenza);
            $("#employee_id").val(data.id);
            $("#updateForm").show();
            $("#submit").hide();
            $('#employeeform').attr('action', '/admin/employee/' + data.id + '/update');
         })

         $(document).on('click', '.deleteemployeeBtn', function() {
            var data = $(this).data('value');
                       
            $("#employee_del_id").val(data);           
            $('#employeedeleteform').attr('action', '/admin/employee/' + data + '/delete');
         })


         $.ajax({
		
            type: "GET",
            url: "{{ route('ccnl-list') }}",
            success: function(result) {
              console.log(result.data);
               //var ccnl_id=result.data.id;
               //var ccnl_name=result.data.name;
               var d_length=result.data.length;
               console.log(d_length);
               var d_data='';
               for(var i=0;i<=d_length-1;i++){
                  d_data +='<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>';
                  
               }
               $("#ccnl_id").removeAttr("disabled");
               $("#ccnl_id").append(d_data);
               $(".page-loader").hide();	
            }							
         });

         


         $('#submit').click(function (event) {
            
            event.preventDefault();
            $.ajax({
               url: "{{ route('store-employee') }}",
               type: 'POST',
               data: $("#employeeform").serialize(),
               success: function (result) {
                  console.log(result);
                  $("#name").val('');
                  swal("Success!", "Successfully Saved !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('employee') }}";
                  },2000);

               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


         $('#updateForm').click(function (event) {
            
            var employee_id=$("#employee_id").val();

            event.preventDefault();
            $.ajax({
               url: '/admin/employee/' + employee_id + '/update',
               type: 'POST',
               data: $("#employeeform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully updated !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('employee') }}";
                  },2000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })

         $('#deletesubmit').click(function (event) {
            
            var employee_id= $("#employee_del_id").val();  

            event.preventDefault();
            $.ajax({
               url: '/admin/employee/' + employee_id + '/delete',
               type: 'POST',
               data: $("#employeedeleteform").serialize(),
               success: function (result) {
                  console.log(result);
                  //$("#name").val('');
                  swal("Success!", "Successfully deleted !", "success");
                  setTimeout(function(){
                     window.location.href="{{ route('employee') }}";
                  },1000);
               
               },error:function(xhr,status,error){
						console.log(JSON.stringify(xhr,status,error));
					}
            })
         })


         
    } );
</script>
