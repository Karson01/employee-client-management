
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
                           <h4 class="card-title">Client Work Entry</h4>
                        </div>                        

                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <h6 class="card-title">List of client  current month</h6>
                                    <h4 class="card-title">July  Number of worker Total hours</h4>
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

                           <table class="table table-bordered table-responsive-md table-striped text-center">
                             <thead>
                               <tr>
                                 <th>Name</th>
                                 <th>Confirmed</th>
                                 <th>Reported</th>
                                 <th>To Check</th>
                                 <th>Total Hour</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td contenteditable="true">Gio Metric</td>
                                 <td contenteditable="true">25</td>
                                 <td contenteditable="true">15</td>
                                 <td contenteditable="true">5</td>
                                 <td contenteditable="true">45</td>
                                 
                               </tr>
                               <tr>
                                 <td contenteditable="true">Manny Petty</td>
                                 <td contenteditable="true">45</td>
                                 <td contenteditable="true">5</td>
                                 <td contenteditable="true">6</td>
                                 <td contenteditable="true">56</td>
                                 
                               </tr>
                               <tr>
                                 <td contenteditable="true">Lucy Tania</td>
                                 <td contenteditable="true">24</td>
                                 <td contenteditable="true">5</td>
                                 <td contenteditable="true">2</td>
                                 <td contenteditable="true">28</td>
                                 
                               </tr>
                               <tr class="hide">
                                 <td contenteditable="true">Anna Mull</td>
                                 <td contenteditable="true">10</td>
                                 <td contenteditable="true">5</td>
                                 <td contenteditable="true">2</td>
                                 <td contenteditable="true">17</td>
                                 
                               </tr>
                             </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
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
            <form  method="POST" enctype="multipart/form-data" id="add-user-form">
            @csrf
            <div class="modal-body">
               <div class="new-user-info">
                  
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="fname"> Name:</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
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
                     
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name='submit' id='submit' class="btn btn-primary">Save changes</button>
            </div>
            </form>
         </div>
      </div>
   </div>   
    
@endsection
