<x-clientDashboardHeader />

<div class="main-panel ysecprty">
<div class="content-wrapper">
   <div class="row">
      <div class="col-md-12">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true">CONTACTS</button>
            </li>
            <li class="nav-item">
               <button class="nav-link" id="plans-tab" data-toggle="tab" href="#plans" role="tab" aria-controls="plans" aria-selected="false">PAYMENTS PLANS</button>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
               <div class="row">
                  <div class="col-md-3">
                     <div id="accordion">
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Roles
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                 <div class="panel-filter side-menu-block">
                                    <ul class="side-menu-list capitalize">
                                       <li class="py-2 active"><a href="#">All</a></li>
                                       <li><a href="#">Clients</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Contact Status
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">All</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Current</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Deleted</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>ALL (0)</h5>
                     </div>
                     <div class="btnmtrs">
                        <button type="button" class="cmnbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-2" >Add Contact</button>
                     </div>
                     <!--- modal start ---->
                     <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="ModalLabel">Add a New Contact</h5>
                                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="col-form-label">Title</label>
                                             <select class="form-control">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mx">Mx</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Master">Master</option>
                                                <option value="Honorable">Honorable</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Reverend">Reverend</option>
                                                <option value="Magistrate">Magistrate</option>
                                                <option value="Judge">Judge</option>
                                                <option value="Father">Father</option>
                                                <option value="Attorney">Attorney</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="frist-name" class="col-form-label">Frist Name:</label>
                                             <input type="text" class="form-control" id="Frist-name">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="last-name" class="col-form-label">Last Name:</label>
                                             <input type="text" class="form-control" id="Last-name">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="Email" class="col-form-label">Email:</label>
                                             <input type="text" class="form-control" id="Email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row contact-home">
                                       <div class="col-md-6">
                                          <label for="Email" class="col-form-label">HOME:</label>
                                          <div class="form-group">
                                             <input type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="Email" class="col-form-label">CELL:</label>
                                          <div class="form-group">
                                             <input type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" >
                                          </div>
                                       </div>
                                    </div>

                                    <!-- search address -->
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="search_address" class="col-form-label">Search Address:</label>
                                             <input type="text" class="form-control" id="search_address" name="search_address" onkeyup="search();" placeholder="Search Address Here..">
                                          </div>
                                       </div>
                                    </div>

                                    <!--  address found -->
                                    <div class="row" style="display:none;" id="address_found_div">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="address_found" class="col-form-label">Addresses:</label>
                                             <select class="form-control" id="address_found" onchange="select_address();" name="search_address"></select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">ADDRESS LINE 1:</label>
                                             <input type="text" class="form-control" id="address_line_1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">ADDRESS LINE 2:</label>
                                             <input type="text" class="form-control" id="address_line_2">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-5">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">CITY:</label>
                                             <input type="text" class="form-control" id="city">
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">STATE:</label>
                                             <input type="text" class="form-control" id="state">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">ZIP CODE:</label>
                                             <input type="text" class="form-control" id="zip">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="address line 1" class="col-form-label">ADD TO EXISTING ORGANIZATION?:</label>
                                             <input type="text" class="form-control" id="">
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <div class="form-group">
                                       <label for="message-text" class="col-form-label">Message:</label>
                                       <textarea class="form-control" id="message-text"></textarea>
                                    </div> -->
                                 </form>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="cmnbtn">Save</button>
                                 <button type="button" class="btn btn-light" data-bs-dismiss="modal">Save a New</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--- modal ends -->
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Organization</th>
                                 <th>Phone</th>
                                 <th>Cell</th>
                                 <th>Email</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="plans" role="tabpanel" aria-labelledby="plans-tab">
               <div class="row">
                  <div class="col-md-3">
                     <div id="accordion">
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Contact Status
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">All</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Current</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Deleted</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>DEBTORS WITH PAYMENT PLANS (0)</h5>
                     </div>
                     <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">EXPORT CSV</button>
                        <button type="button" class="cmnbtn">CREATE NEW PLAN</button>
                     </div>
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Organization</th>
                                 <th>Phone</th>
                                 <th>Email</th>
                                 <th>Last Payment</th>
                                 <th>Paid</th>
                                 <th>Outstanding</th>
                                 <th>Status</th>
                                 <th>Plan Details</th>
                                 <th>Type</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/contact/add.js') }}"></script>

<x-clientDashboardFooter />