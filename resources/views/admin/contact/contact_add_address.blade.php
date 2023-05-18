<x-adminDashboardHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Add Address</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidelstg">
                    <h5>Quick Links:</h5>
                    <ul>
                        <li><a href="{{ route('admin.contact.page') }}">Back</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="matter-right-side">
                    <!-- MATTER DETAILS start --->
                    <div class="matter-row" class="matter-accordian">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Address
                                        </button>
                                    </h5>
                                </div>

                                @include('commons.session-msg')

                                <form action="{{ route('admin.contact.add.address.action') }}" method="post">
                                @csrf

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Location *</label> 
                                                    <input type="text" name="area_location" id="area_location" class="form-control" value="{{ old('area_location') }}">
                                                        
                                                        @if ($errors->has('area_location'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('area_location') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Address Line 1 *</label>
                                                    <input type="text" name="address_line_1" id="address_line_1" value="{{ old('address_line_1') }}" class="form-control">

                                                        @if ($errors->has('address_line_1'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('address_line_1') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Address Line 2</label>
                                                    <input type="text" name="address_line_2" id="address_line_2" value="{{ old('address_line_2') }}" class="form-control">

                                                        @if ($errors->has('address_line_2'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('address_line_2') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">State *</label>
                                                    <input type="text" name="state" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('state') }}">

                                                        @if ($errors->has('state'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('state') }}</span>
                                                        @endif
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">City *</label>
                                                    <input type="text" name="city" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('city') }}">

                                                        @if ($errors->has('city'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('city') }}</span>
                                                        @endif
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Zip Code *</label>
                                                    <input type="text" name="zip_code" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('zip_code') }}">

                                                        @if ($errors->has('zip_code'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('zip_code') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="btnmtrs">
                                                <button type="submit" class="cmnbtn">Save</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- MATTER DETAILS start --->
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <x-adminDashboardFooter />