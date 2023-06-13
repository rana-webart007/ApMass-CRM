<x-clientDashboardHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Add Matter</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidelstg">
                    <h5>Quick Links:</h5>
                    <ul>
                        <li><a href="#collapseOne">Matter Details</a></li>
                        <li><a href="#collapseTwo">Staff</a></li>
                        <li><a href="#headingThree">Client / Contacts</a></li>
                        <li><a href="#headingFour">Billing Fees and Rates</a></li>
                        <li><a href="#headingFive">Late Payment</a></li>
                        <li><a href="#emailSetting">Email Settings</a></li>
                        <li><a href="#headingSix">Invoice Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="matter-right-side">
                    <!-- MATTER DETAILS start --->
                    <form action="{{ route('client.matter.add.action') }}" method="post">
                        @csrf

                    <div class="matter-row" class="matter-accordian">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            MATTER DETAILS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">MATTER TYPE*</label>
                                                    <select class="form-control" name="state_abbr" id="exampleSelectexpense">
                                                        @foreach($states as $state)
                                                        <option value="{{ $state->state_abbr }}">
                                                            {{ $state->state_abbr }} </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('state_abbr'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('state_abbr') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="area_of_law">Law Area*</label>
                                                    <select class="form-control" name="law_area" id="area_of_law" onchange="return change('area');">
                                                        <option value="Select an area of law" selected>Select an area of law</option>
                                                        @foreach($areas as $area)
                                                            <option value="{{ $area->area }}">{{ $area->area }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('law_area'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('law_area') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="matters_type">Select a matter type</label>
                                                    <select class="form-control" id="matters_type" name="matter_type" onchange="return change('role');" disabled>
                                                        <option value="Select a matter type">Select a matter type</option>
                                                    </select>

                                                    @if ($errors->has('matter_type'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('matter_type') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">INTERNAL REFERENCE</label>
                                                    <input type="text" class="form-control" name="internal_preference" placeholder="">
                                                    @if ($errors->has('internal_preference'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('internal_preference') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">MATTER DESCRIPTION</label>
                                                    <textarea class="form-control" name="matter_description" rows="4"></textarea>
                                                    @if ($errors->has('matter_description'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('matter_description') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="client_role">CLIENT ROLE*</label>
                                                    <select class="form-control" id="client_role" name="client_role" disabled>
                                                        <option value="Select">Select ..</option>
                                                    </select>

                                                    @if ($errors->has('client_role'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('client_role') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo">
                                            STAFF
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">ATTORNEY RESPONSIBLE</label>
                                                    <select class="form-control" name="attorney_responsible" id="exampleSelectGender">
                                                        <option value="Select">Select Staff responsible for Matter..</option>
                                                        {{-- <option value="{{ Auth::guard('client')->user()->name }}">{{ Auth::guard('client')->user()->name }}</option> --}}

                                                        @foreach ($all_staffs as $all_staff)
                                                            <option value="{{ $all_staff->name }}">{{ $all_staff->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('attorney_responsible'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('attorney_responsible') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">PERSON ASSISTING</label>
                                                    <select class="form-control" name="person_assisting" id="exampleSelectGender">
                                                        <option value="Select">Select Staff assisting Matter..</option>
                                                        {{-- <option value="{{ Auth::guard('client')->user()->name }}">{{ Auth::guard('client')->user()->name }}</option> --}}

                                                        @foreach ($all_staffs as $all_staff)
                                                            <option value="{{ $all_staff->name }}">{{ $all_staff->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('person_assisting'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('person_assisting') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">ORIGINATING ATTORNEY</label>
                                                    <select class="form-control" name="organization_attorney" id="exampleSelectGender">
                                                        <option value="Select">Select Staff assisting Matter..</option>
                                                        {{-- <option value="{{ Auth::guard('client')->user()->name }}">{{ Auth::guard('client')->user()->name }}</option> --}}

                                                        @foreach ($all_staffs as $all_staff)
                                                            <option value="{{ $all_staff->name }}">{{ $all_staff->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('organization_attorney'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('organization_attorney') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsethree" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            CLIENT / CONTACTS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">CLIENT </label>
                                                    <select class="form-control" name="client" id="exampleSelectGender">
                                                        <option value=""></option>
                                                        @foreach($contacts as $contact)
                                                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <a href="{{ route('client.contacts.page') }}" target="_blank"><i class="fa fa-plus mt-2">&nbsp; Add New Contact</i></a>

                                                    @if ($errors->has('client'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('client') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">DEBTORS</label>
                                                    <select class="form-control" name="debtors" id="exampleSelectGender">
                                                        <option></option>
                                                        @foreach($contacts as $contact)
                                                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <a href="{{ route('client.contacts.page') }}" target="_blank"><i class="fa fa-plus mt-2">&nbsp; Add New Contact</i></a>

                                                    @if ($errors->has('debtors'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('debtors') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Billing Fees and Rates
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="billing_types">BILLING TYPE</label>
                                                    <select class="form-control" name="billing_types" onchange="return billtypes();" id="billing_types">
                                                        <option value="Select">Select..</option>
                                                        <option value="Fixed Fee">Fixed Fee</option>
                                                        <option value="Fixed Fee per Appearance">Fixed Fee per Appearance</option>
                                                        <option value="Time Based">Time Based</option>
                                                        <option value="Contingency($)">Contingency($)</option>
                                                        <option value="Contingency(%)">Contingency(%)</option>
                                                        <option value="Not Billable">Not Billable</option>
                                                    </select>

                                                    @if ($errors->has('billing_types'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('billing_types') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- fee/estimate -->
                                            <div class="col-md-12" style="display:none;" id="fee_estimate_billing_div">
                                               <div class="form-group">
                                                    <label for="exampleTextarea1">FEE/ESTIMATE ($)</label>
                                                    <input type="number" name="fee_estimate_billing" id="fee_estimate_billing" class="form-control" placeholder="$">

                                                    @if ($errors->has('fee_estimate_billing'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('fee_estimate_billing') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- contingency -->
                                            <div class="col-md-12" style="display:none;" id="contingency_percent_div">
                                               <div class="form-group">
                                                    <label for="exampleTextarea1">CONTINGENCY (%)</label>
                                                    <input type="number" name="contingency_percent" class="form-control" placeholder="%">

                                                    @if ($errors->has('contingency_percent'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('contingency_percent') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="billing_units">BILLING UNITS ROUND TO</label>
                                                    <select class="form-control" onchange="return change('billing_units');" name="billing_units" id="billing_units">
                                                        <option value="Select">Select..</option>
                                                        <option value="1 min">1 min</option>
                                                        <option value="6 mins">6 mins</option>
                                                        <option value="15 mins">15 mins</option>
                                                        <option value="Custom">Custom</option>
                                                    </select>

                                                    @if ($errors->has('billing_units'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('billing_units') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- custom billing_units -->
                                            <div class="col-md-12" style="display:none;" id="custom_billing_units_div">
                                               <div class="form-group">
                                                    <label for="exampleTextarea1">Minutes</label>
                                                    <input type="number" name="custom_billing_units" id="custom_billing_units" class="form-control" placeholder="">

                                                    @if ($errors->has('custom_billing_units'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('custom_billing_units') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                            <label for="billing_types">HOURLY RATES *</label>

                                            @if ($errors->has('hourly_rate'))
                                                    <span class="text-danger">{{ $errors->first('hourly_rate') }}</span>
                                            @endif

                                                <div class="form-group">
                                                    <input type="radio" id="override_rate" name="hourly_rate"
                                                        value="Do not override rate" onclick="change('override_rate_1')">
                                                    <label for="override">Do not override rate</label><br>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate_staff" name="hourly_rate"
                                                        value="Override rate for all staff" onclick="change('override_rate_2')">
                                                    <label for="override">Override rate for all staff</label><br>
                                                </div>

                                                <!-- custom override rate -->
                                                
                                                <div class="col-md-12"  id="custom_override_rate_div" style="display:none;">
                                                <div class="form-group">
                                                        <input type="number" name="custom_override_rate" id="custom_override_rate" class="form-control" placeholder="$ per hour">

                                                        @if ($errors->has('custom_override_rate'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('custom_override_rate') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <!-- -->


                                                <div class="form-group">
                                                    <input type="radio" id="override_rate_staff_number" name="hourly_rate"
                                                        value="Override default rate per staff member" onclick="change('override_rate_3')">
                                                    <label for="override">Override default rate per staff
                                                        member</label><br>
                                                </div>

                                                <!-- custom override rate per staff -->
                                                <div id="custom_override_default_rate_div" style="display:none;">
                                                <div class="col-md-12" >
                                                <div class="form-group">
                                                        <select name="custom_override_default_client" id="custom_override_default_rate" class="form-control">
                                                               <option value="{{ Auth::guard('client')->user()->name }}">{{ Auth::guard('client')->user()->name }}</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="custom_override_default_rate" id="custom_override_default_rate" class="form-control" placeholder="$ per hour">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <button type="button" class="btn btn-primary">Add</button> -->
                                                </div>
                                                </div>
                                                </div>
                                                <!-- -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Late Payment
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate" name="late_payment"
                                                        value="override rate" onclick="change('grace_not_applicable')">
                                                    <label for="override">Not Applicable</label><br>
                                                </div>

                                                <div class="form-group">
                                                    <input type="radio" id="Grace period" name="late_payment"
                                                        value="override_rate_staff" onclick="change('grace_applicable')">
                                                    <label for="override">Grace period</label><br>
                                                </div>
                                            </div>

                                            <!-- custom grace period - 1 -->
                                                <div class="col-md-12" id="grace_period_div_1" style="display:none;">
                                                    <div class="form-group">
                                                            <select name="grace_period" id="grace_period" onchange="change('custom_grace_period')" class="form-control">
                                                                <option value="Select">Select</option>    
                                                                <option value="None">None</option>
                                                                <option value="Custom">Custom</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            <!--  -->

                                            <!-- custom grace period - 2 -->
                                            <div class="col-md-12" id="grace_period_div_2" style="display:none;">
                                                    <div class="form-group">
                                                        <label for="grace_period_days">Days</label>
                                                        <input type="number" name="grace_period_days" class="form-control" id="grace_period_days" placeholder="Days">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="grace_period_interest">Interest</label>
                                                        <input type="number" name="grace_period_interest" class="form-control" id="grace_period_interest" placeholder="in %">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="grace_period_interest_from">CALCULATE INTEREST FROM</label>
                                                        <select name="grace_period_interest_from" class="form-control" id="grace_period_interest_from">
                                                              <option value="Invoice Due Date">Invoice Due Date</option>
                                                              <option value="After Grace Period">After Grace Period</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <!--  -->


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="emailSetting">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Email Settings
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="emailSetting"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="exampleTextarea1">CC EMAIL ADDRESSES</label>
                                                <input type="text" class="form-control" name="cc_emails" placeholder="e.g. xyz@example.com, abcd@example.com">
                                                    @if ($errors->has('cc_emails'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('cc_emails') }}</span>
                                                    @endif
                                            </div>
                                            <div class="col-md-12">
                                                <label for="exampleTextarea1">BCC EMAIL ADDRESSES</label>
                                                <input type="text" class="form-control" name="bcc_emails" placeholder="e.g. xyz@example.com, abcd@example.com">
                                                    @if ($errors->has('bcc_emails'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('bcc_emails') }}</span>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Invoice Settings
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="exampleTextarea1">INVOICE TEMPLATE</label>
                                                <select class="form-control" name="invoice_template" id="exampleSelectGender">
                                                    <option>Firm Default</option>
                                                </select>

                                                @if ($errors->has('invoice_template'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('invoice_template') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label for="">INVOICE TITLE</label>
                                            </div>
                                            @if ($errors->has('invoive_title'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('invoive_title') }}</span>
                                            @endif

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="none" name="invoive_title" onclick="change('invoive_title_none')" value="none">
                                                    <label for="none">None</label>
                                                    <input type="radio" id="matter_title" onclick="change('invoive_title_matter')" name="invoive_title"
                                                        value="Matter Title">
                                                    <label for="none">Matter Title</label>
                                                    <input type="radio" id="matter_description"  onclick="change('invoive_title_matter_desc')" name="invoive_title"
                                                        value="Matter Description">
                                                    <label for="none">Matter Description</label>
                                                    <input type="radio" id="custom_text" onclick="change('invoive_title_custom')" name="invoive_title"
                                                        value="custom_text">
                                                    <label for="none">Custom text</label>
                                                </div>
                                            </div>

                                            <!-- custom invoice title -->
                                            <div class="col-md-12 mb-2" id="custom_invoice_title_field_div" style="display:none;">
                                                <input type="text" class="form-control" name="custom_invoice_title_field">
                                            </div>
                                            <!-- -->

                                            <div class="col-md-12">
                                                <label for="">INVOICE SUBTITLE</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="none" name="invoive_sub_title" onclick="change('invoive_sub_title_none')" value="none">
                                                    <label for="none">None</label>
                                                    <input type="radio" id="matter_title" onclick="change('invoive_sub_title_matter')" name="invoive_sub_title"
                                                        value="matter_title">
                                                    <label for="none">Matter Title</label>
                                                    <input type="radio" id="matter_description" onclick="change('invoive_sub_title_matter_title')" name="invoive_sub_title"
                                                        value="matter_description">
                                                    <label for="none">Matter Description</label>
                                                    <input type="radio" id="custom_text" onclick="change('invoive_sub_title_custom')" name="invoive_sub_title"
                                                        value="custom_text">
                                                    <label for="none">Custom text</label>
                                                </div>
                                                @if ($errors->has('invoive_sub_title'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('invoive_sub_title') }}</span>
                                                @endif
                                            </div>

                                            <!-- custom invoice sub-title -->
                                            <div class="col-md-12 mb-2" id="custom_invoice_sub_title_field_div" style="display:none;">
                                                <input type="text" class="form-control" name="custom_invoice_sub_title_field">
                                            </div>
                                            <!-- -->

                                            <div class="col-md-12">
                                                <label for="">NOTES</label>
                                                <!-- <textarea cols="80" id="editor1" name="editor1" rows="10"> -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea rows="5" cols="50" name="notes" id="editor"></textarea>
                                                    @if ($errors->has('notes'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('notes') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">EINVOICE</label>
                                                <select class="form-control" name="einvoice" id="exampleSelectGender">
                                                    <option value="Use Firm Default">Use Firm Default</option>
                                                    <option value="Disabled">Disabled</option>
                                                    <option value="Enabled">Enabled</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label for="">SURCHARGE</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" id="surcharge_check"
                                                        name="surcharge_check" onchange="change('surcharge_check')"
                                                        >
                                                    <label for="override-surcharge">Override default surcharge
                                                        settings</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- -->
                                        <div class="row" id="surcharge_type_div" style="display:none;">
                                            <div class="col-md-12">
                                                <select name="surcharge_type" onchange="change('surcharge_type')" class="form-control" id="surcharge_type">
                                                    <option value="Select">Select</option>
                                                    <option value="None">None</option>
                                                    <option value="Surcharge(in %)">Surcharge(in %)</option>
                                                    <option value="Surcharge(in $)">Surcharge(in $)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row" id="surcharge_type_details_div" style="display:none;">
                                            <div class="col-md-12 mt-2">
                                                <label for="">Percentage/Amount</label>
                                                <input type="number" name="surcharge_percent_or_amount" id="surcharge_percent_or_amount" class="form-control">
                                            </div>

                                            <div class="col-md-12 mt-1">
                                                <label for="surcharge_apply_to">Apply To</label>
                                                <select name="surcharge_apply_to" id="surcharge_apply_to" class="form-control">
                                                    <option value="Select">Select</option>
                                                    <option value="Time & Fees Only">Time & Fees Only</option>
                                                    <option value="Time & Fees and expenses">Time & Fees and expenses</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mt-2">
                                                <label for="">Label on invoice</label>
                                                <input type="text" name="surcharge_liable" id="surcharge_liable" class="form-control" value="Surcharge">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                            >Create Matter</button>

                        <a href="{{ route('client.dashboard') }}"><button type="button" class="btn btn-dark btn-lg font-weight-medium auth-form-btn"
                        >Cancel Matter</button></a>
                    </div>
                    </form>
                    <!-- MATTER DETAILS start --->
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <script>
    window.onload = function() {
        CKEDITOR.replace('notes');
    };
    </script>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/matters/add.js') }}"></script>

<x-clientDashboardFooter />