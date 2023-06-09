<x-clientDashboardHeader />

<div class="main-panel ysecprty">
               <div class="content-wrapper">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">MATTER</button>
                           </li>
                        </ul>

                        @include('commons.session-msg')
                        
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-panel fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div id="accordion">
                                       <div class="card">
                                          <div class="card-header" id="headingOne">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Matter Type
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                             <div class="card-body">
                                                <form>
                                                   <div class="form-check">
                                                      <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                      Select / De-select All
                                                      <i class="input-helper"></i></label>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingTwo">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Matter Status
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Recently viewed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#" class="numbtn mr-1">0</a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('recently-view')">
                                                         <span class="slider round"></span>
                                                         </label>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">All</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#" class="numbtn mr-1">{{ ( $total_matters + $total_deleted_matters) }}</a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('all-matters')">
                                                         <span class="slider round"></span>
                                                         </label>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Open</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#" class="numbtn mr-1"> {{ $pending_matters }} </a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('open-matters')">
                                                         <span class="slider round"></span>
                                                         </label>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Pending</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#" class="numbtn mr-1">{{ $pending_matters }}</a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('pending-matters')">
                                                         <span class="slider round"></span>
                                                         </label>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Closed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#" class="numbtn mr-1">{{ $closed_matters }}</a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('close-matters')">
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
                                                         <a href="#" class="numbtn mr-1">{{ $total_deleted_matters }}</a>
                                                         <label class="switch">
                                                         <input type="checkbox" onclick="matter_filter('delete-matters')">
                                                         <span class="slider round"></span>
                                                         </label>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingThree">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Attorney Responsible
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                             <div class="card-body">
                                                <div class="btnprt mb-2">
                                                   <button type="button" class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                   <a href="#" class="mr-3">Select All</a>
                                                   <a href="#">Clear All</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingFour">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                Trust Balance
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                             <div class="card-body">
                                                <form action="">
                                                   <div class="form-group" style="margin-bottom:0">
                                                      <label for="Priceprt">Price</label>
                                                      <input type="text" class="form-control" id="Priceprt">
                                                   </div>
                                                </form>
                                                <div class="pt-2">
                                                   <a href="#">Clear All</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="opnmtrs">
                                       <h5>MATTERS</h5>
                                    </div>
                                    <div class="btnmtrs">
                                       <a href="{{ route('client.matters.add.page') }}" class="cmnbtn">Add Matter</a>
                                    </div>
                                    <div class="table-responsive">
                                       <table class="table bg-white">
                                          <thead>
                                             <tr>
                                                <th>Client(s)</th>
                                                <th>Matter Area</th>
                                                <th>Matter Type</th>
                                                <th>Other Party</th>
                                                <th>Attorney</th>
                                                <th>Unbilled</th>
                                                <th>Due</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>

                                       @if(count($matters) > 0)
                                          @foreach($matters as $matter)
                                          @php
                                               $client = App\Models\PersonContact::whereId($matter->client)->first();
                                          @endphp

                                          @if($client != null)

                                             <tr>
                                                <td><a href="{{ route('client.contacts.person.edit.page', $client->id) }}">{{ $client->name }}</a></td>
                                                <!-- <td><p style="cursor: pointer;" onclick="openNewTabs('{{ $client->id }}');">{{ $client->name }}</p></td> -->
                                                <td>{{ $matter->matter_area }}</td>
                                                <td>{{ $matter->matter_type }}</td>
                                                <td> - </td>
                                                <td>{{ $matter->attorney_responsible }}</td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td>
                                                   <a href="#">
                                                      <button type="button"
                                                         class="btn btn-dark btn-sm">{{ ucfirst($matter->status) }}</button>
                                                   </a>
                                                </td>
                                                <td>
                                                   @if($matter->status != "close")
                                                    <a href="#">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>

                                                    <a href="{{ route('client.matter.close', $matter->id) }}">
                                                      <button type="button"
                                                          class="btn btn-dark btn-sm">Close</button>
                                                    </a>

                                                    <button type="button" onclick="sw_alert1(<?php echo $matter->id ?>, 'client-matter');"
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                    @else 
                                                         <a href="{{ route('client.matter.reopen', $matter->id) }}">
                                                            <button type="button"
                                                               class="btn btn-primary btn-sm">Reopen</button>
                                                         </a>

                                                         <button type="button" onclick="sw_alert1(<?php echo $matter->id ?>, 'client-matter');"
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                    @endif
                                                </td>
                                             </tr>
                                             @endif
                                          @endforeach
                                       @else
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                 <p class="font-weight-bold">No Matters Found</p>
                                          </td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                       @endif
                                             
                                          </tbody>
                                       </table>

                                       <div class="m-2 float-right">
                                             {{ $matters->links() }}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- content-wrapper ends -->

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/matters/index.js') }}"></script>
<x-clientDashboardFooter />