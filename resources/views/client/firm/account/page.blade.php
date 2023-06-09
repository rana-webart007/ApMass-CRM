<x-firmHeader />

@extends('commons.session-toaster-msg')

<div class="main-panel matterinside">
    <div class="content-wrapper">
         
        <div class="row m-2">
            <div class="col-md-12 m-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link mr-1" id="home-tab" onclick="show('trust-account')" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Trust Account <br> Settings &nbsp; &nbsp;</button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link mr-1" id="home-tab" onclick="show('operating-check')" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Trust & Operating <br> Check &nbsp; &nbsp;
                        </button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link mr-1" id="home-tab" onclick="show('evergreen-retainer');" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Evergreen <br> Retainer &nbsp; &nbsp;
                        </button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link mr-1" id="home-tab" onclick="show('trust-transaction-number')" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Trust Transaction <br> Numbering &nbsp; &nbsp;
                        </button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link" id="home-tab" data-toggle="tab" onclick="show('finalize-with-pay')" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Finalize with <br> Payments &nbsp; &nbsp;
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- trust account settings -->
        <div class="m-2" id="trust_account_setting" style="display: block;">
          <div class="row m-2">
             <div class="col-md-12">
                  <h4>Trust Account Settings</h4>
             </div>

             <div class="col-md-6">
                <a href="#" onclick="add_trust_account();"><i class="fa fa-plus">&nbsp; Add Trust Account</i></a>
             </div>
             <div class="col-md-6 text-end">
                <div class="d-flex justify-content-lg-end">
                    <label class="switch me-2">
                        <input type="checkbox" onclick="show_closed_account()" name="is_closed_account" id="is_closed_account">
                        <span class="slider round"></span>
                    </label>
                    &nbsp; Show closed accounts    
                </div> 
            </div>
           </div>

           <!-- trust account table -->
           <div class="row m-2" id="trust_account_table">
             <div class="col-md-12">
                <h4>Trust Account</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Display Name</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">State</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($open_accounts) > 0)
                      @foreach($open_accounts as $key => $account)
                      <tr>
                        <th scope="row"> {{ ($key + 1) }}</th>
                        <td>{{ $account->trust_account_name }}</td>
                        <td>{{ $account->display_name }}</td>
                        <td>{{ $account->bank_name }}</td>
                        <td>{{ $account->state }}</td>
                        <td>
                            <a href="{{ route('client.firm.trust.account.edit.page', $account->trust_account_id) }}">
                                <button type="button"
                                    class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <button type="button"
                                class="btn btn-danger btn-sm" onclick="sw_alert1(<?php echo $account->id ?>, 'trust-account');">Delete</button>
                            
                            <a href="{{ route('client.firm.trust.account.status.change', ['id' => $account->trust_account_id, 'status' => 'close']) }}">
                                <button type="button"
                                    class="btn btn-dark btn-sm">Close Account</button>
                            </a>
                        </td>
                      </tr>
                       @endforeach
                       @else
                       <tr>
                           <td></td>
                           <td></td>
                           <td><b>No Record Found</b></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                      @endif
                    </tbody>
                  </table>
              </div>
           </div>

           <!-- closed account table -->
           <div class="row m-2" id="closed_account_table" style="display: none;">
             <div class="col-md-12">
               <h4>Closed Account</h4>
                <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Account Name</th>
                       <th scope="col">Display Name</th>
                       <th scope="col">Bank Name</th>
                       <th scope="col">State</th>
                       <th scope="col">Actions</th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($close_accounts) > 0)
                    @foreach($close_accounts as $key => $account)
                    <tr>
                      <th scope="row"> {{ ($key + 1) }}</th>
                      <td>{{ $account->trust_account_name }}</td>
                      <td>{{ $account->display_name }}</td>
                      <td>{{ $account->bank_name }}</td>
                      <td>{{ $account->state }}</td>
                      <td>
                        <a href="{{ route('client.firm.trust.account.status.change', ['id' => $account->trust_account_id, 'status' => 'open']) }}">
                            <button type="button"
                                class="btn btn-primary btn-sm">Re-open</button>
                        </a>
                          <button type="button"
                              class="btn btn-danger btn-sm" onclick="sw_alert1(<?php echo $account->id ?>, 'trust-account');">Delete</button>
                      </td>
                    </tr>
                     @endforeach
                     @else
                           <tr>
                               <td></td>
                               <td></td>
                               <td><b>No Record Found</b></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                     @endif
                   </tbody>
                 </table>
             </div>
           </div>

           <!-- default payment -->
           <form action="{{ route('client.firm.trust.bank.account.setting') }}" method="post" id="default_payment"> 
              @csrf

           <div class="row m-2">
                <div class="col-md-12 m-2">
                     <h4>Default Payment Account</h4>
                </div>
                <div class="col-md-8 m-2">
                    @if(count($open_accounts) > 0)
                    <select name="state_found" id="state_found" class="form-control">
                        @foreach($open_accounts as $open_account)
                          <option value="{{ $open_account->id }}">{{ $open_account->trust_account_name }}</option>
                        @endforeach
                     </select>
                    @else
                    <select name="state_found" id="state_found" class="form-control" disabled style="cursor: no-drop">
                        <option value="No states found">No Staes Found on trust accounts</option>
                     </select>
                    @endif
                </div>

                <!-- checkboxes -->
                <div class="col-md-12 mt-2 d-flex">
                    <h4>Trust and Operating Account Options</h4>
                </div>

                <div class="col-md-12 mt-1 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            @if ($bank_details == null)
                             <input type="checkbox" name="pdf_trust_deposite">
                            @else
                            @if ($bank_details->pdf_trust_deposite == "yes")
                             <input type="checkbox" name="pdf_trust_deposite" checked>
                             @else
                             <input type="checkbox" name="pdf_trust_deposite">
                             @endif
                            @endif
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-9">
                        <p>Always open PDF receipt when creating a Trust deposit</p>
                    </div>
                </div>
    
                <div class="col-md-12 mt-1 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            @if ($bank_details == null)
                            <input type="checkbox" name="pdf_trust_payment">
                            @else
                                @if ($bank_details->pdf_trust_payment == "yes")
                                   <input type="checkbox" name="pdf_trust_payment" checked>        
                                @else
                                   <input type="checkbox" name="pdf_trust_payment">
                                @endif
                            @endif
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-9">
                        <p>Always open PDF when creating a Trust Payment</p>
                    </div>
                </div>

                <div class="col-md-12 mt-1 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            @if ($bank_details == null)
                            <input type="checkbox" name="pdf_operating_payment">
                            @else
                               @if ($bank_details->pdf_operating_payment == "yes")
                                 <input type="checkbox" name="pdf_operating_payment" checked>
                               @else
                                 <input type="checkbox" name="pdf_operating_payment">
                               @endif
                            @endif
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-9">
                        <p>Always open PDF when creating an Operating Payment</p>
                    </div>
                </div>
    
                <div class="col-md-12 mt-1 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            @if ($bank_details == null)
                            <input type="checkbox" name="pdf_trust_transfer">
                            @else
                               @if ($bank_details->pdf_trust_transfer == "yes")
                               <input type="checkbox" name="pdf_trust_transfer" checked>
                               @else
                               <input type="checkbox" name="pdf_trust_transfer">
                               @endif
                            @endif
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-9">
                        <p>Always open PDF detail when creating a Trust Transfer</p>
                    </div>
                </div>
                <!-- end checkbox -->

                <div class="col-md-12 mt-1 d-flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
           </div>
           </form>

           <!-- add trust account form -->
           <div class="m-2 border border-dark rounded bg-white" id="trust-account-form" style="display: none;">
            <form action="{{ route('client.firm.trust.account.add.action') }}" method="post">
                @csrf

            <div class="row m-2">
                    <div class="col-md-12 m-2">
                        <h4>Add Trust Account</h4>
                    </div>
                    <div class="col-md-5 m-2">
                         <label for="">Trust Account Name *</label>
                         <input type="text" name="trust_account_name" id="trust_account_name" class="form-control" required> 
                    </div>
                    <div class="col-md-5 m-2">
                        <label for="">Display Name</label>
                        <input type="text" name="display_name" id="display_name" class="form-control"> 
                   </div>

                    <div class="col-md-5 m-2">
                        <label for="">Bank Name</label>
                        <input type="text" name="bank_name" id="bank_name" class="form-control"> 
                    </div>
                    <div class="col-md-5 m-2">
                        <label for="">Branch</label>
                        <input type="text" name="branch" id="branch" class="form-control"> 
                    </div>

                    <div class="col-md-5 m-2">
                        <label for="">Available for Matters in State *</label>
                        <select name="matters_states" id="matters_states" class="form-control">
                                <option value="All States">All States</option>

                                @foreach ($states as $state)
                                     <option value="{{ $state->state_name }}">{{ $state->state_name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="col-md-8 m-2">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="button" onclick="cancel_account()"  class="btn btn-dark">Cancel</button>
                    </div>
            </div>
            </form>
           </div>

        </div>
        <!--  -->

        <!-- trust & operating check -->
        <div class="row m-2" id="trust_operating_check" style="display: none;">
            <form action="{{ route('client.firm.trust.operating.check') }}" method="post">
                @csrf

            <div class="col-md-12 m-2">
                  <h4><b> Trust and Operating Checks </b></h4>
            </div>
            
            <div class="col-md-8 m-2">
                <label for="">Select your account:</label>
                <select name="account" id="account" class="form-control">
                    <option value="Trust Account">Trust Account</option>
                </select>
            </div>

            <div class="col-md-8 ml-4 mt-3">
                @if($operating_checks == null)
                <input type="checkbox" name="trust_check_print" onclick="activate_trust_check();" id="trust_check_print" class="form-check-input">
                @else
                    @if($operating_checks->trust_check_print == "yes")
                    <input type="checkbox" name="trust_check_print" onclick="activate_trust_check();" id="trust_check_print" class="form-check-input" checked>
                    @else
                    <input type="checkbox" name="trust_check_print" onclick="activate_trust_check();" id="trust_check_print" class="form-check-input">
                    @endif
                @endif
                <label for="" class="form-check-label">Activate Trust Check Printing</label>
            </div>

            <div class="col-md-9 ml-2 mt-3">
                <label for="">Check Style</label>
                <select name="trust_check_style" id="trust_check_style" class="form-control" disabled style="cursor: no-drop;">
                  @if($operating_checks == null)
                    <option value="Standard">Standard</option>
                    <option value="Voucher">Voucher</option>
                  @else
                     @if($operating_checks->trust_check_style == "Standard")
                        <option value="Standard">Standard</option>
                        <option value="Voucher">Voucher</option>
                     @else
                        <option value="Voucher">Voucher</option>
                        <option value="Standard">Standard</option>
                     @endif
                  @endif
                </select>
            </div>

            <div class="col-md-9 ml-2 mt-3">
                <label for="">Printing Method</label>
                <select name="trust_printing_method" id="trust_printing_method" class="form-control" disabled style="cursor: no-drop;">
                    @if($operating_checks == null)
                    <option value="Print Manually">Print Manually</option>
                    <option value="Print Now">Print Now</option>
                    <option value="Print Later">Print Later</option>
                    @else
                       @if($operating_checks->trust_printing_method == "Print Manually")
                       <option value="Print Manually">Print Manually</option>
                       <option value="Print Now">Print Now</option>
                       <option value="Print Later">Print Later</option>
                       @elseif($operating_checks->trust_printing_method == "Print Now")
                       <option value="Print Now">Print Now</option>
                       <option value="Print Manually">Print Manually</option>
                       <option value="Print Later">Print Later</option>
                       @elseif($operating_checks->trust_printing_method == "Print Later")
                       <option value="Print Later">Print Later</option>
                       <option value="Print Manually">Print Manually</option>
                       <option value="Print Now">Print Now</option>
                       @endif
                    @endif
                </select>
            </div>

            <!-- -->
            <div class="col-md-8 ml-4 mt-3">
                @if($operating_checks == null)
                <input type="checkbox" name="operating_check_print" onclick="activate_operating_check();" id="operating_check_print" class="form-check-input">
                @else
                  @if ($operating_checks->operating_check_print == "yes")
                  <input type="checkbox" name="operating_check_print" onclick="activate_operating_check();" id="operating_check_print" class="form-check-input" checked>
                  @else
                  <input type="checkbox" name="operating_check_print" onclick="activate_operating_check();" id="operating_check_print" class="form-check-input">
                  @endif
                @endif
                <label for="" class="form-check-label">Activate Operating Check Printing</label>
            </div>

            <div class="col-md-8 ml-4 mt-3">
                @if($operating_checks == null)
                <input type="checkbox" name="vendor_address_on_check" id="vendor_address_on_check" class="form-check-input" disabled style="cursor: no-drop;">
                @else
                @if ($operating_checks->operating_check_print == "yes")
                <input type="checkbox" name="vendor_address_on_check" id="vendor_address_on_check" class="form-check-input">
                @else
                <input type="checkbox" name="vendor_address_on_check" id="vendor_address_on_check" class="form-check-input" disabled style="cursor: no-drop;">
                @endif
                @endif
                <label for="" class="form-check-label">Include Vendor Address on Check</label>
            </div>

            <div class="col-md-9 ml-2 mt-3">
                <label for="">Check Style</label>
                <select name="operating_check_style" id="operating_check_style" class="form-control" disabled style="cursor: no-drop;">
                    <option value="Standard">Standard</option>
                    <option value="Voucher">Voucher</option>
                </select>
            </div>

            <div class="col-md-9 ml-2 mt-3">
                <label for="">Printing Method</label>
                <select name="operating_printing_method" id="operating_printing_method" class="form-control" disabled style="cursor: no-drop;">
                    <option value="Print Manually">Print Manually</option>
                    <option value="Print Now">Print Now</option>
                    <option value="Print Later">Print Later</option>
                </select>
            </div>

            <div class="col-md-8 m-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            </form>
        </div>

        <!-- evergreen retainer -->
        <form action="#" id="ever_green_retainer" style="display: none;">
        <div class="row m-2">
            <div class="col-md-12 ml-4 mt-2">
                <input type="checkbox" name="activate_ever_green_retainer" id="activate_ever_green_retainer" onclick="ever_green_retainer();" class="form-check-input">
                <label for="" class="form-check-label">Evergreen Retainer Activated</label>
            </div>

            <div class="col-md-9 ml-4 mt-2">
                <label for="" class="form-check-label">Minimum Threshold</label>
                <input type="number" name="minimum_threshold" id="minimum_threshold" class="form-control mt-1" placeholder="Amount in $" disabled style="cursor: no-drop">
            </div>

            <div class="col-md-9 ml-4 mt-2">
                <label for="" class="form-check-label">Replenish Up To</label>
                <input type="number" name="replenish_upto" id="replenish_upto" class="form-control mt-1" placeholder="Amount in $" disabled style="cursor: no-drop">
            </div>

            <div class="col-md-8 m-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>

        <!-- trust transaction number -->
        <form action="#" id="trust_transaction_number" style="display: none;">
              <div class="row m-2">
                    <div class="col-md-12 m-2">
                        <h4>Trust Transaction Numbering</h4>
                    </div>

                    <div class="col-md-9 m-2">
                        <label for="">Select your account:</label>
                        <select name="account" id="account" class="form-control">
                            <option value="Trust Account">Trust Account</option>
                        </select>
                    </div>

                    <div class="col-md-12 m-2">
                        <h4>Receipts</h4>
                    </div>

                    <div class="col-md-12 m-2">
                        <label for="">Starting Number</label>
                        <input type="number" name="starting_no" id="starting_no" value="1" class="form-control">
                    </div>

                    <div class="col-md-5 m-2">
                        <label for="">Number of Leading Zeros</label>
                        <input type="number" name="leading_zeros" id="leading_zeros" value="0" class="form-control">
                    </div>

                    <div class="col-md-5 m-2">
                        <label for="">Example Number</label>
                        <input type="number" name="example_no" id="example_no" value="1" class="form-control" disabled>
                    </div>

                    <div class="col-md-8 m-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
              </div>
        </form>

        <!-- finalize with payments -->
        <form action="#" id="finalize_payment" style="display: none;">
        <div class="row m-2">
              <div class="col-md-12 m-2">
                  <h4>For payments, choose which fund to use first:</h4>
              </div>

              <div class="col-md-9 m-2">
                  <input type="text" name="first_preference" id="first_preference" value="Crerdit" class="form-control" readonly> 
              </div>

              <div class="col-md-9 m-2">
                   <select name="second_preference" id="second_preference" onchange="third_pref()" class="form-control">
                           <option value="Operating">Operating</option>
                           <option value="Trust">Trust</option>
                   </select>
              </div>

              <div class="col-md-9 m-2">
                <input type="text" name="third_preference" id="third_preference" class="form-control" readonly>
                {{-- <select name="third_preference" id="third_preference" class="form-control">
                        <option value="Operating">Operating</option>
                        <option value="Trust">Trust</option>
                </select> --}}
           </div>

           <div class="col-md-8 m-2">
            <button type="submit" class="btn btn-primary">Save</button>
           </div>
        </div>
       </form>
    </div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/account.js') }}"></script>

<x-firmFooter />