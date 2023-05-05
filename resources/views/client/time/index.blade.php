<x-clientDashboardHeader />

<div class="main-panel ysecprty timesecpart">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#timefees" type="button" role="tab" aria-controls="contact" aria-selected="true">TIME FEES</button>
               </li>
               <li class="nav-item">
                  <button class="nav-link" id="plans-tab" data-toggle="tab" href="#plans" role="tab" aria-controls="plans" aria-selected="false">EXPENSES</button>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="timefees" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="module-fees">
                     <div class="module-cal">
                        <div class="balance-type">
                           <div class="inline-block">
                              <div class="input-group currency-input balance-value inline-block">
                                 <input type="date" class="form-control currency"><i class="bi bi-x"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="module-select">
                        <select class="form-select" aria-label="Default select example">
                           <option selected>JD (Jacob Darbin)</option>
                           <option value="1">JD (Jacob Darbin)</option>
                        </select>
                     </div>
                  </div>
                  <div class="module-matter">
                     <form class="forms-sample">
                        <div class="form-group matter">
                           <label for="exampleSelectGender">Matter</label>
                           <select class="form-control" id="exampleSelectmatter">
                              <option>Select a Matter</option>
                           </select>
                        </div>
                        <div class="form-group activity">
                           <label for="exampleSelectGender">Activity</label>
                           <select class="form-control" id="exampleSelectact">
                              <option>No options</option>
                           </select>
                        </div>
                        <div class="form-group subject">
                           <label for="exampleInputName1">Subject</label>
                           <input type="text" class="form-control" id="exampleInputsubject" placeholder="Name">
                        </div>
                        <div class="form-group duration">
                           <label for="exampleInputName1">Duration</label>
                           <input type="text" class="form-control" id="exampleInputduration" placeholder="Name">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputName1">Hrs</label>
                           <select class="form-control" id="exampleSelectact">
                              <option>Hrs</option>
                              <option>fixed</option>
                           </select>
                        </div>
                        <div class="form-group time">
                           <label for="exampleInputName1">Time</label>
                           <input type="text" class="form-control" id="exampleInputime" placeholder="Name">
                        </div>
                        <div class="form-group rate">
                           <label for="exampleInputName1">Rate</label>
                           <input type="text" class="form-control" id="exampleInputrate" placeholder="Name">
                        </div>
                        <div class="form-group acct">
                           <label for="exampleInputName1">Account</label>
                           <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                        </div>
                        <div class="form-group billable">
                           <label for="exampleInputName1">Billable</label>
                           <div class="my-2">
                              <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                              </label>
                           </div>
                        </div>
                        <div class="form-group frm-btn">
                           <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                     </form>
                  </div>
                  <div class="module-table">
                     <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>
                                    Matter
                                 </th>
                                 <th>
                                    Subject
                                 </th>
                                 <th>
                                    Hours
                                 </th>
                                 <th>
                                    Amount
                                 </th>
                                 <th>
                                    Billable
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr >
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                              </tr>
                              <tr >
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                              </tr>
                              <tr >
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="btnmtrs">
                           <button type="button" class="cmnbtn mr-2">New Expense Entry</button>
                           <button type="button" class="cmnbtn mr-2">Print checks (0)</button>
                           <button type="button" class="cmnbtn mr-2">View Operating Checks</button>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="module-matter module-expense">
                           <form class="forms-sample forms-sample-expense">
                              <div class="form-group cal">
                                 <label for="exampleSelectGender">Date</label>
                                 <div class="balance-type">
                                    <div class="inline-block">
                                       <div class="input-group currency-input balance-value inline-block">
                                          <input type="date" class="form-control currency"><i class="bi bi-x"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group matter">
                                 <label for="exampleSelectGender">Matter</label>
                                 <select class="form-control" id="exampleSelectexpense">
                                    <option>Select a Matter</option>
                                 </select>
                              </div>
                              <div class="form-group activity">
                                 <label for="exampleSelectGender">Activity</label>
                                 <select class="form-control" id="exampleSelectact">
                                    <option>No options</option>
                                 </select>
                              </div>
                              <div class="form-group subject">
                                 <label for="exampleInputName1">Subject</label>
                                 <input type="text" class="form-control" id="exampleInputsubject" placeholder="Name">
                              </div>
                              <div class="form-group duration">
                                 <label for="exampleInputName1">Quantity</label>
                                 <input type="text" class="form-control" id="exampleInputduration" placeholder="Name">
                              </div>
                              <div class="form-group time">
                                 <label for="exampleInputName1">Price</label>
                                 <input type="text" class="form-control" id="exampleInputime" placeholder="Name">
                              </div>
                              <div class="form-group acct">
                                 <label for="exampleInputName1">Account</label>
                                 <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                              </div>
                              <div class="form-group billable">
                                 <label for="exampleInputName1">Billable</label>
                                 <div class="my-2">
                                    <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group frm-btn">
                                 <button type="submit" class="btn btn-primary">ADD</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div id="accordion">
                           <div class="card">
                              <div class="card-header" id="headingTwo2">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                    Expense Date
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseTwo2" class="collapse show" aria-labelledby="headingTwo2" data-parent="#accordion">
                                 <div class="card-body">
                                    <div class="panel-filter side-menu-block">
                                       <ul class="side-menu-list capitalize">
                                          <li class="active">Today</li>
                                          <li >This Month</li>
                                          <li >Last Month</li>
                                          <li class="date-expense">Before <input type="date" value="20-04-2023"></li>
                                          <li class="date-expense">From <input type="date" value="20-04-2023"></li>
                                          <li class="date-expense">To <input type="date" value="20-04-2023"></li>
                                       </ul>
                                       <div>
                                       </div>
                                       <div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="card">
                              <div class="card-header" id="headingThree3">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseTwo">
                                    Staff
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion">
                                 <div class="card-body">
                                    
                                    <div class="staff-multi-select">
                                       <span class="staff-label label label-primary" title="Jacob Darbin">JD</span>
                                       <ul class="links">
                                          <li>Select All</li>
                                          <li>Clear All</li>
                                         </ul>
                                      </div>
                              
                                       <div>
                                       </div>
                                       <div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                          
                           <div class="card">
                              <div class="card-header" id="headingFour4">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour4" aria-expanded="false" aria-controls="collapseTwo">
                                    Status
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseFour4" class="collapse" aria-labelledby="headingFour4" data-parent="#accordion">
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
                     <!-- <div class="opnmtrs">
                        <h5>DEBTORS WITH PAYMENT PLANS (0)</h5>
                        </div> -->
                     <!-- <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">EXPORT CSV</button>
                        <button type="button" class="cmnbtn">CREATE NEW PLAN</button>
                        </div> -->
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

<x-clientDashboardFooter />