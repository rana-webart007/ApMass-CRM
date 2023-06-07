<x-firmHeader />

@extends('commons.session-toaster-msg')

<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row m-2">
            <div class="col-md-12">
                <div class="matter-right-side">

                    <form action="{{ route('client.firm.details.action') }}" method="post">
                        @csrf

                     <div class="matter-row matter-accordian">
                        <div id="accordion">

                            <!-- firm details --> 

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        Firm Details
                                    </h5>
                                </div>                                
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion" >
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Firm Name *</label>

                                                    @if($type == "add")
                                                    <input type="text" placeholder="Enter Firm Name" class="form-control" name="firm_name" id="firm_name" required>
                                                    @else
                                                    <input type="text" class="form-control" name="firm_name" id="firm_name" value="{{ $details->firm_name }}" required>
                                                    @endif

                                                    @if ($errors->has('firm_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('firm_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                            @if($type == "add")
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone_area_code">Area Code</label>
                                                    
                                                    <input type="number" placeholder="202" class="form-control" name="phone_area_code" id="phone_area_code" required>
                                                    
                                                    @if ($errors->has('phone_area_code'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('phone_area_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">Phone Number</label>
                                                    <input type="number" class="form-control" name="phone_no" placeholder="">
                                                    @if ($errors->has('phone_no'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('phone_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            @else
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone_no" value="{{ $details->phone_no }}">
                                                        @if ($errors->has('phone_no'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('phone_no') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif


                                            @if($type == "add")
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="fax_area_code">Area Code</label>
                                                    <input type="number" placeholder="202" class="form-control" name="fax_area_code" id="fax_area_code" required>

                                                    @if ($errors->has('fax_area_code'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('fax_area_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">Fax Number</label>
                                                    <input type="number" class="form-control" name="fax_no" placeholder="">
                                                    @if ($errors->has('fax_no'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('fax_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">Fax Number</label>
                                                    <input type="text" class="form-control" name="fax_no" value="{{ $details->fax_no }}">
                                                    @if ($errors->has('fax_no'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('fax_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- street address -->

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        Street Address
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Address Search</label>
                                                    <input type="text" class="form-control"
                                                                                id="search_address"
                                                                                name="search_address"
                                                                                onkeyup="search(0);"
                                                                                placeholder="Search Address Here..">
                                                </div>
                                            </div>

                                            <!--  address found -->
                                            
                                            <div class="col-md-12" style="display:none;"
                                            id="address_found_div">
                                                <div class="form-group">
                                                    <label for="address_found"
                                                        class="col-form-label">Select Addresses:</label>
                                                    <select
                                                        class="form-control border border-danger"
                                                        id="address_found"
                                                        onchange="select_address(0);"
                                                        name="search_address"></select>
                                                </div>
                                            </div>
                                       

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ADDRESS LINE
                                                        1:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="address_line_1"
                                                        name="address_line_1" required>
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="address_line_1"
                                                    name="address_line_1" value="{{ $details->street_address_line_1 }}" required>
                                                    @endif

                                                    @if($errors->has('address_line_1'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('address_line_1') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ADDRESS LINE
                                                        2:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="address_line_2"
                                                        name="address_line_2">
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="address_line_2"
                                                    name="address_line_2" value="{{ $details->street_address_line_2 }}">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">CITY:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="city" name="city" required>
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="city" name="city" value="{{ $details->street_city }}" required>
                                                    @endif

                                                    @if($errors->has('city'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('city') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">STATE:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="state" name="state" required>
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="state" name="state" value="{{ $details->street_state }}" required>
                                                    @endif

                                                    @if($errors->has('state'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('state') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ZIP CODE:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="zip" name="zip" required>
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="zip" name="zip" value="{{ $details->street_zip }}" required>
                                                    @endif

                                                    @if($errors->has('zip'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('zip') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Maililing Address -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">Maililing Address</h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion" >
                                    <div class="card-body">

                                        <ul class="listingprt">
                                            <li>
                                               <div class="my-2">
                                                  <a href="#">Different From Street Address</a>
                                               </div>
                                            </li>
                                            <li>
                                               <div class="my-2">
                                                  <label class="switch">
                                                  <input type="checkbox" onclick="mail_address_check()" id="mail_check" name="mail_check">
                                                  <span class="slider round"></span>
                                                  </label>
                                               </div>
                                            </li>
                                         </ul>

                                    
                                    <div style="display:none;" id="diff_from_steet_address">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Address Search</label>
                                                    <input type="text" class="form-control"
                                                                                id="mail_search_address"
                                                                                name="search_address"
                                                                                onkeyup="search(1);"
                                                                                placeholder="Search Address Here..">
                                                </div>
                                            </div>

                                            <!--  address found -->
                                            
                                            <div class="col-md-12" style="display:none;"
                                            id="mail_address_found_div">
                                                <div class="form-group">
                                                    <label for="mail_address_found"
                                                        class="col-form-label">Choose Addresses:</label>
                                                    <select
                                                        class="form-control border border-danger"
                                                        id="mail_address_found"
                                                        onchange="select_address(1);"
                                                        name="search_address"></select>
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ADDRESS LINE
                                                        1:</label>

                                                    
                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="mail_address_line_1"
                                                        name="mail_address_line_1" >
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="mail_address_line_1"
                                                    name="mail_address_line_1" value="{{ $details->mailing_address_line_1 }}">
                                                    @endif

                                                    @if($errors->has('mail_address_line_1'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('mail_address_line_1') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ADDRESS LINE
                                                        2:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="mail_address_line_2"
                                                        name="mail_address_line_2">
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="mail_address_line_2"
                                                    name="mail_address_line_2" value="{{ $details->mailing_address_line_2 }}">
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">CITY:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="mail_city" name="mail_city" >
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="mail_city" name="mail_city" value="{{ $details->mailing_city }}">
                                                    @endif

                                                    @if($errors->has('mail_city'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('mail_city') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">STATE:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="mail_state" name="mail_state" >
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="mail_state" name="mail_state" value="{{ $details->mailing_state }}">
                                                    @endif

                                                    @if($errors->has('mail_state'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('mail_state') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="address line 1"
                                                        class="col-form-label">ZIP CODE:</label>

                                                    @if($type == "add")
                                                    <input type="text" class="form-control"
                                                        id="mail_zip" name="mail_zip" >
                                                    @else
                                                    <input type="text" class="form-control"
                                                    id="mail_zip" name="mail_zip" value="{{ $details->mailing_zip }}">
                                                    @endif

                                                    @if($errors->has('mail_zip'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('mail_zip') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div> 


                                    {{-- </div> --}}
                                </div>
                            </div>
                           
                        </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                                >Save</button>
                        </div>
                    </form>
                    <!-- MATTER DETAILS start --->
                </div>
            </div>

        </div>
    </div>
</div>


<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/details.js') }}"></script>

<x-firmFooter />