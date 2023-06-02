<x-clientDashboardHeader />
@php
    $tabs = App\Models\TabsControlManage::getTabs(Auth::guard('client')->user()->id, 'person-contact');
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
               $details = App\Models\PersonContact::specificPersonContact($arr);
            @endphp

            
            @foreach($details as $d)
                <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link active" onclick="openNewTabs('{{ $d->id }}')" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{ $d->name }} &nbsp; &nbsp;
                        </button>
                        <i onclick="closeTab('{{ $d->id }}', 'person-contact')" class="fa fa-times croseI"></i>
                </li>
            @endforeach
            @endif
            

            </ul>
    
            @php
                $id = Request::segment(6);
                $new_details = App\Models\PersonContact::specificOnePersonContact($id);
            @endphp


        @if($arr)
        <div class="row p-2">
            <!-- <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Edit Person Contact</h3>
                </div>
            </div> -->
            <!-- <div class="col-md-3">
                <div class="sidelstg">
                    <h5>Quick Links:</h5>
                    <ul>
                        <li><a href="{{ route('client.contacts.page') }}">Back</a></li>
                    </ul>
                </div>
            </div> -->
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

                                <form action="{{ route('client.contacts.person.edit.action', $new_details->id)}}" method="post">
                                    @csrf

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="frist-name" class="col-form-label">
                                                            Name:</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $new_details->name }}" id="name"
                                                            required>

                                                        @if($errors->has('name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('first_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">Email:</label>
                                                        <input type="text" class="form-control"  value="{{ $new_details->email }}" name="email" id="Email"
                                                            required>

                                                        @if($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">HOME:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="home" value="{{ $new_details->home }}" class="form-control"
                                                                id="home" required>
                                                            @if($errors->has('home'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('home') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="Email" class="col-form-label">CELL:</label>
                                                        <div class="form-group">
                                                            <input type="text" name="cell" value="{{ $new_details->cell }}" class="form-control"
                                                                id="cell" required>
                                                            @if($errors->has('cell'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('cell') }}</span>
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
                                                            @if($errors->has('address_line_2'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('address_line_2') }}</span>
                                                            @endif
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