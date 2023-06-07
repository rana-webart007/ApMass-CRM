<x-firmHeader />

@extends('commons.session-toaster-msg')

<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row m-2">
            <div class="col-md-12">
                <h5>Billing Units</h5>
           </div>
        </div>

        <!-- round time entries -->
        <form action="{{ route('client.firm.billing.action') }}" method="post">
            @csrf


            @if(!$billings)
            <div class="row m-2">
                <div class="col-md-4">
                    <label for="">Round time entries to</label>
                    <select class="form-control" name="time_entries" id="time_entries" onchange="time_entry();">
                        <option value="Select">Select..</option>
                        <option value="1">1 minute</option>
                        <option value="6">6 minutes</option>
                        <option value="15">15 minutes</option>
                        <option value="custom">custom</option>
                    </select>

                    @if ($errors->has('time_entries'))
                        <span
                            class="text-danger">{{ $errors->first('time_entries') }}</span>
                    @endif
                </div>

                <div class="col-md-2" style="display: none;" id="custom_time_div">
                    <label for="">Custom Time</label>
                    <input type="text" class="form-control border border-danger" name="custom_time" id="custom_time">

                    @if ($errors->has('custom_time'))
                        <span
                            class="text-danger">{{ $errors->first('custom_time') }}</span>
                    @endif
                </div>

                <div class="col-md-4 m-2">
                    <button type="submit" class="btn btn-primary mt-3" id="billing_unit_btn" onclick="check_custom_field();">Save</button>
                </div>
            </div>
            @else

            <!-- edit -->
            <div class="row m-2">
                <div class="col-md-4">
                    <label for="">Round time entries to</label>
                    <select class="form-control" name="time_entries" id="time_entries" onchange="time_entry();">
                        @if($billings->custom_or_not == "custom")
                        <option value="custom">custom</option>
                        <option value="1">1 minute</option>
                        <option value="6">6 minutes</option>
                        <option value="15">15 minutes</option>
                        @else
                        <option value="1">1 minute</option>
                        <option value="6">6 minutes</option>
                        <option value="15">15 minutes</option>
                        <option value="custom">custom</option>
                        @endif
                    </select>

                    @if ($errors->has('time_entries'))
                        <span
                            class="text-danger">{{ $errors->first('time_entries') }}</span>
                    @endif
                </div>

                @if($billings->custom_or_not == "normal")
                <div class="col-md-2" style="display: none;" id="custom_time_div">
                    <label for="">Custom Time</label>
                    <input type="text" class="form-control border border-danger" name="custom_time" id="custom_time">

                    @if ($errors->has('custom_time'))
                        <span
                            class="text-danger">{{ $errors->first('custom_time') }}</span>
                    @endif
                </div>
                @else
                <div class="col-md-2" style="display: block;" id="custom_time_div">
                    <label for="">Custom Time</label>
                    <input type="text" class="form-control border border-danger" name="custom_time" value="{{ $billings->time }}" id="custom_time">

                    @if ($errors->has('custom_time'))
                        <span
                            class="text-danger">{{ $errors->first('custom_time') }}</span>
                    @endif
                </div>
                @endif

                <div class="col-md-4 m-2">
                    <button type="submit" class="btn btn-primary mt-3" id="billing_unit_btn" onclick="check_custom_field();">Save</button>
                </div>
            </div>
            @endif


        </form>

       
        <div class="row">
            <div class="col-md-12 ml-3 mt-2">
                <p>It's Look Like You don't have create any Activity Yet. <a href="{{ route('client.firm.activity.create') }}">Create an Activity</a></p>
            </div>
        </div>

     <div class="row m-2">
        <div class="col-md-12">
            <h4>Activities</h4>
        </div>

        <!-- tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item buttonCS" role="presentation">
                <button class="nav-link active ml-2 mr-1" id="home-tab" onclick="custom_code();" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Custom Codes &nbsp; &nbsp;
                </button>
            </li>
            <li class="nav-item buttonCS" role="presentation">
                <button class="nav-link" id="home-tab" data-toggle="tab" onclick="utbms_billing();" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">UTBMS Billing &nbsp; &nbsp;
                </button>
            </li>
        </ul>
     </div>


     <!-- custom code table -->
     <div class="row m-2" id="former-user-table" style="display:block;">
        <div col-md-12>
          <div class="col-md-12">
              <p><a href="{{ route('client.firm.activity.create') }}">Create an Activity</a></p>
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Code</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Type</th>
                      <th scope="col">Billable?</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>1234</td>
                      <td>Sub</td>
                      <td>Text</td>
                      <td>yes</td>
                      <td>
                          <a href="#">
                              <button type="button"
                                  class="btn btn-primary btn-sm">Edit</button>
                          </a>
                          <button type="button" onclick="#"
                              class="btn btn-danger btn-sm">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    

    <!-- UTMBS Billing -->
    <form action="#">
        <div class="row mt-5 ml-2" id="utmbs_billing" style="display: none;">
            <div class="col-md-12">
                <input type="checkbox" id="billing_enable" name="billing_enable" onclick="check_billing();" checked>
                <label for="billing_enable"> Enable UTBMS Billing</label>
            </div>

            <div class="col-md-12 mt-2">
                <label for="ledes_firm_id"><b> LEDES Firm ID </b></label>
                <input type="text" class="form-control" name="ledes_firm_id" id="ledes_firm_id">
            </div>

            <div class="col-md-12 mt-2">
                <label for="#"><b>Code Sets For</b></label>
            </div>
            
            <div class="col-md-12 m-2">
                <input type="checkbox" id="aba_litigation" name="aba_litigation">
                <label for="aba_litigation"> ABA Litigation</label>
            </div>

            <div class="col-md-12 m-2">
                <input type="checkbox" id="aba_bankruptcy" name="aba_bankruptcy">
                <label for="aba_bankruptcy"> ABA Bankruptcy</label>
            </div>

            <div class="col-md-12 m-2">
                <input type="checkbox" id="aba_project" name="aba_project">
                <label for="aba_project"> ABA Project</label>
            </div>

            <div class="col-md-12 m-2">
                <input type="checkbox" id="aba_counseling" name="aba_counseling">
                <label for="aba_counseling"> ABA Counseling</label>
            </div>

            <div class="col-md-12 m-2">
                <input type="checkbox" id="third_party_codes" name="third_party_codes">
                <label for="third_party_codes"> Third Party Codes</label>
            </div>

            <div class="col-md-12 m-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            
        </div>
    </form>

</div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/time_activities.js') }}"></script>
<x-firmFooter />