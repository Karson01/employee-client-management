
@extends('client.layouts.layout')

@section("title", "SIXWEBSOFT")

@section("content")
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               
               <div class="col-lg-9">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Employee Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="fname"> Name:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
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
                              <hr>
                              
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
        

            </div>
         </div>
      </div>
      <!-- Wrapper END -->     
@endsection
