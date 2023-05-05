<x-clientDashboardHeader />
<div class="main-panel ysecprty reportsecpart">
<div class="content-wrapper">
<div class="row">
   <div class="col-md-12">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#tansac" type="button" role="tab" aria-controls="contact" aria-selected="true">Report</button>
         </li>
      </ul>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="tansac" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
               <div class="col-md-12">
                  <div class="row repotabsec">
                     <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                           <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account Balance Payments</a>
                           <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Account Balance Receipts</a>
                           <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account Balance Transfers</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Account Balances</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-statement" role="tab" aria-controls="v-pills-settings" aria-selected="false">Account Statements</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-receivable" role="tab" aria-controls="v-pills-settings" aria-selected="false">Accounts Receivable</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-summary" role="tab" aria-controls="v-pills-settings" aria-selected="false">Aging Summary</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-audit" role="tab" aria-controls="v-pills-settings" aria-selected="false">Audit Logs</a>
                           <a class="nav-link" id="v-pills-credit-tab" data-toggle="pill" href="#v-pills-credit" role="tab" aria-controls="v-pills-settings" aria-selected="false">Credit History</a>
                           <a class="nav-link" id="v-pills-allocated-tab" data-toggle="pill" href="#v-pills-allocation" role="tab" aria-controls="v-pills-settings" aria-selected="false">Income Allocation</a>
                           <a class="nav-link" id="v-pills-hitory-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-settings" aria-selected="false">Invoice History</a>
                           <a class="nav-link" id="v-ledger-export-tab" data-toggle="pill" href="#v-ledger-export" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ledger Export</a>
                        </div>
                     </div>
                     <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-8">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-4">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show deleted transactions</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-8">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-4">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show deleted transactions</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-8">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- <div class="col-4">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show deleted transactions</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    </div> -->
                              </div>
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-8">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-4">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show transactions list</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-statement" role="tabpanel" aria-labelledby="v-pills-statement-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show account summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show transaction history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-receivable" role="tabpanel" aria-labelledby="v-pills-receivable-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row amnt-receive">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-9">
                                    <h3>Show invoices for</h3>
                                    <div class="form-check">
                                       <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                       All matters and contacts
                                       <i class="input-helper"></i></label>
                                    </div>
                                    <!--  <div class="form-check">
                                       <div id="div1">
                                         <input class="rd" type="radio" name="radio-set" id="radio-1" value="Normal Radio" checked= />
                                         <input type="text" class="tb" name="tb1" value="" placeholder="Option 1" /></div>
                                       </div> -->
                                 </div>
                              </div>
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-summary" role="tabpanel" aria-labelledby="v-pills-summary-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show account summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show transaction history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-audit" role="tabpanel" aria-labelledby="v-pills-audit-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show invoice summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show account summary</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show transaction history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-credit" role="tabpanel" aria-labelledby="v-pills-credit-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                              </form>
                              <div class="reportFilter-modul">
                                 <input type="radio" class="ReportFilter-module__radio-option" id="M1" name="Matter" checked="">
                                 <input type="text" name="" placeholder="Select a Matter" >
                                 <input type="radio" id="M2" name="Selectccontact" class="ReportFilter-module__radio-option" >
                                 <select class="form-control ReportFilter-module__typeahead" >
                                    <option>Select a Contact</option>
                                    <option>NA</option>
                                 </select>
                              </div>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-allocation" role="tabpanel" aria-labelledby="v-pills-allocated-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period 222</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                                 <div class="form-group acct">
                                    <label for="exampleInputName1">Account</label>
                                    <input type="text" class="form-control" id="exampleInputacct" placeholder="Name">
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h3>View option</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show percentage</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show hours</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Attorneys only</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Show transaction history</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-hitory-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
                                 <div class="form-group cal">
                                    <div class="balance-type">
                                       <div class="inline-block">
                                          <div class="input-group currency-input balance-value inline-block">
                                             <input type="date" class="form-control currency"><i class="bi bi-x"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group cal">
                                    <div class="balance-type">
                                       <div class="inline-block">
                                          <div class="input-group currency-input balance-value inline-block">
                                             <input type="date" class="form-control currency"><i class="bi bi-x"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Attorney Responsible</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>All</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
                              </form>
                              <div class="reportFilter-modul">
                                 <div class="form-group">
                                    <label for="exampleSelectGender">Area of Law</label>
                                    <select class="form-control" id="exampleSelectGender">
                                       <option>All</option>
                                       <option>General</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleSelectGender">Invoice Status</label>
                                    <select class="form-control" id="exampleSelectGender">
                                       <option>All</option>
                                       <option>General</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleSelectGender">Show invoices for</label>
                                    <div class="form-check">
                                       <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                       All matters and contacts
                                       <i class="input-helper"></i></label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleSelectGender"></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                       Select a Matter
                                           <i class="input-helper"></i></label>
                                       </div>
                                    
                                 </div>
                                 <!-- <div class="form-group">
                                    <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                    <input type="text" name="" placeholder="Select a Matter" >
                                    <i class="input-helper"></i></label>
                                    </div>
                                    </div> -->
                              </div>
                              <div class="row">
                                 <div class="col-8">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-ledger-export" role="tabpanel" aria-labelledby="v-ledger-export-tab">
                              <form class="forms-sample forms-sample-expense">
                                 <div class="form-group reperiod">
                                    <label for="exampleSelectGender">Report period</label>
                                    <select class="form-control" id="exampleSelectexpense">
                                       <option>This Month</option>
                                       <option>This Week</option>
                                       <option>Last Week</option>
                                       <option>Cutsom</option>
                                    </select>
                                 </div>
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
                              </form>
                              <div class="reportFilter-modul">
                                 <input type="radio" class="ReportFilter-module__radio-option" id="M1" name="Matter" checked="">
                                 <input type="text" name="" placeholder="Select a Matter" >
                                 <input type="radio" id="M2" name="Selectccontact" class="ReportFilter-module__radio-option" >
                                 <select class="form-control ReportFilter-module__typeahead" >
                                    <option>Select a Contact</option>
                                    <option>NA</option>
                                 </select>
                              </div>
                              <div class="row">
                                 <div class="col-9">
                                    <h3>Print view</h3>
                                    <div class="card-body">
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm header</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm logo</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                </label>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="listingprtsec">
                                          <li>
                                             <div class="my-2">
                                                <a href="#">Include firm name</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="my-2">
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
                              <div class="btnmtrs">
                                 <button type="button" class="cmnbtn mr-2">Generate</button>
                                 <button type="button" class="cmnbtn mr-2">CSV</button>
                                 <button type="button" class="cmnbtn mr-2">PDF</button>
                                 <button type="button" class="cmnbtn mr-2">Print</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>Trust Account</h5>
                     </div>
                     <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">Deposit Funds</button>
                        <button type="button" class="cmnbtn">Transfer Funds</button>
                        <button type="button" class="cmnbtn">Protect Funds</button>
                        <button type="button" class="cmnbtn disabled">Print Checks</button>
                     </div>
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Transaction</th>
                                 <th>Description</th>
                                 <th>Refence</th>
                                 <th>Matter</th>
                                 <th>Debit</th>
                                 <th>Credit</th>
                                 <th>Balance</th>
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
                              </tr>
                              <tr>
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
                              </tr>
                              <tr>
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
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<x-clientDashboardFooter />