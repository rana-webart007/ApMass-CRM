<x-clientDashboardHeader />
@php
    $tabs = App\Models\TabsControlManage::getTabs(Auth::guard('client')->user()->id, 'business-contact');
    $arr = [];

    foreach($tabs as $t){
           $arr[] = $t->tab_open_id;
    }
@endphp

<div class="main-panel matterinside">
    <div class="content-wrapper">
    
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            
            @if($arr)
            @php
               $details = App\Models\BusinessContacts::specificBusinessContact($arr);
            @endphp
            
            @foreach($details as $d)
                <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link active" onclick="openNewTabs('{{ $d->id }}')" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{ $d->company_name }} &nbsp; &nbsp;
                        </button>
                        <i onclick="closeTab('{{ $d->id }}', 'business-contact')" class="fa fa-times croseI"></i>
                </li>
            @endforeach
            @endif

            </ul>
    
            @php
                $id = Request::segment(6);
                $new_details = App\Models\BusinessContacts::specificOneBusinessContact($id);
            @endphp


        @if($arr)
        <div class="row p-2">
            
            <div class="col-md-12">
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
                                            Contact
                                        </button>
                                    </h5>
                                </div>

                                @include('commons.session-msg')

                                <form action="{{ route('client.contacts.business.edit.action', $new_details->id) }}" method="post">
                                    @csrf

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="frist-name" class="col-form-label">
                                                            Company Name:</label>
                                                        <input type="text" class="form-control" name="company_name" value="{{ $new_details->company_name }}" id="company_name"
                                                            required>

                                                        @if($errors->has('company_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('company_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Company Type:</label>
                                                        <input type="text" class="form-control"  value="{{ $new_details->company_type }}" readonly>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Email:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="email" value="{{ $new_details->email }}" class="form-control"
                                                                id="email" required>
                                                            @if($errors->has('email'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Phone</label>
                                                        <div class="form-group">
                                                            <input type="text" name="phone" value="{{ $new_details->phone }}" class="form-control"
                                                                id="phone" required>
                                                            @if($errors->has('phone'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('phone') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Fax</label>
                                                        <div class="form-group">
                                                            <input type="text" name="fax" value="{{ $new_details->fax }}" class="form-control"
                                                                id="fax" required>
                                                            @if($errors->has('fax'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('fax') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Address Line
                                                            1:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="address_line_1"
                                                                class="form-control" id="address_line_1" value="{{ $new_details->address_line_1 }}" required>
                                                            @if($errors->has('address_line_1'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('address_line_1') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Address Line
                                                            2:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="address_line_2"
                                                                class="form-control" id="address_line_2" value="{{ $new_details->address_line_2 }}" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">State:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="state" value="{{ $new_details->state }}" class="form-control"
                                                                id="state" required>
                                                            @if($errors->has('state'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('state') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="exampleSelectGender">City *</label>
                                                        <input type="text" name="city" value="{{ $new_details->city }}" class="form-control"
                                                            id="exampleSelectexpense">

                                                        @if ($errors->has('city'))
                                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="exampleSelectGender">Zip *</label>
                                                        <input type="text" name="zip" value="{{ $new_details->zip }}" class="form-control"
                                                            id="exampleSelectexpense">

                                                        @if ($errors->has('zip'))
                                                        <span class="text-danger">{{ $errors->first('zip') }}</span>
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
       @else
       <div class="">
           <p>No Records Found</p>
        </div>
       @endif

    </div>
    <!-- content-wrapper ends -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/matters/index.js') }}"></script>
<x-clientDashboardFooter />