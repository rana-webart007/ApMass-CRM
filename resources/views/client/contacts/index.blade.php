<x-clientDashboardHeader />

<div class="main-panel ysecprty">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="true">CONTACTS</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="plans-tab" data-toggle="tab" href="#plans" role="tab"
                            aria-controls="plans" aria-selected="false">PAYMENTS PLANS</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Roles
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="panel-filter side-menu-block">
                                                    <ul class="side-menu-list capitalize">
                                                        <li class="py-2 active"><a href="#">All</a></li>
                                                        <li><a href="#">Clients</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Contact Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1"> {{ $totalContacts }} </a>
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
                                <div class="opnmtrs">
                                    <h5>ALL ( {{ $totalContacts }} )</h5>
                                </div>
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-2">Add Contact</button>
                                </div>

                                @include('commons.session-msg')

                                <!--- modal start ---->
                                <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="ModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Add a New Contact</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                            href="#home-1" role="tab" aria-controls="home-1"
                                                            aria-selected="true">Person</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                            href="#profile-1" role="tab" aria-controls="profile-1"
                                                            aria-selected="false">Business / Organization</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="home-1" role="tabpanel"
                                                        aria-labelledby="home-tab">
                                                        <div class="media">
                                                            <form
                                                                action="{{ route('client.contacts.person.add.action') }}"
                                                                method="post" id="person_contact_form">
                                                                @csrf

                                                                <div class="row">
                                                                    <h4>Contact Details</h4>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">Title</label>
                                                                            <select class="form-control" name="title" id="title">
                                                                                <option value="Select A Title">Select A
                                                                                    Title</option>
                                                                                <option value="Mr">Mr</option>
                                                                                <option value="Mrs">Mrs</option>
                                                                                <option value="Miss">Miss</option>
                                                                                <option value="Ms">Ms</option>
                                                                                <option value="Mx">Mx</option>
                                                                                <option value="Dr">Dr</option>
                                                                                <option value="Master">Master</option>
                                                                                <option value="Honorable">Honorable
                                                                                </option>
                                                                                <option value="Professor">Professor
                                                                                </option>
                                                                                <option value="Reverend">Reverend
                                                                                </option>
                                                                                <option value="Magistrate">Magistrate
                                                                                </option>
                                                                                <option value="Judge">Judge</option>
                                                                                <option value="Father">Father</option>
                                                                                <option value="Attorney">Attorney
                                                                                </option>
                                                                            </select>

                                                                            @if($errors->has('title'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('title') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="frist-name"
                                                                                class="col-form-label">Frist
                                                                                Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="first_name" id="first_name" required>

                                                                            @if($errors->has('first_name'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('first_name') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="last-name"
                                                                                class="col-form-label">Last
                                                                                Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="last_name" id="last_name" required>

                                                                            @if($errors->has('last_name'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('last_name') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="Email"
                                                                                class="col-form-label">Email:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="email" id="Email" required>

                                                                            @if($errors->has('email'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('email') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row contact-home">
                                                                    <div class="col-md-6">
                                                                        <label for="Email"
                                                                            class="col-form-label">HOME:</label>
                                                                        <div class="form-group">
                                                                            <input type="number" name="home_1"
                                                                                class="form-control" id="home_1" required>
                                                                            @if($errors->has('home_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('home_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="number" name="home_2"
                                                                                class="form-control" id="home_2" required>
                                                                            @if($errors->has('home_2'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('home_2') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="Email"
                                                                            class="col-form-label">CELL:</label>
                                                                        <div class="form-group">
                                                                            <input type="number" name="cell_1"
                                                                                class="form-control" id="cell_1" required>
                                                                            @if($errors->has('cell_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('cell_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="number" id="cell_2" name="cell_2"
                                                                                class="form-control" required>
                                                                            @if($errors->has('cell_2'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('cell_2') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- search address -->
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="search_address"
                                                                                class="col-form-label">Search
                                                                                Address:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="search_address"
                                                                                name="search_address"
                                                                                onkeyup="search();"
                                                                                placeholder="Search Address Here..">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!--  address found -->
                                                                <div class="row" style="display:none;"
                                                                    id="address_found_div">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address_found"
                                                                                class="col-form-label">Addresses:</label>
                                                                            <select
                                                                                class="form-control border border-danger"
                                                                                id="address_found"
                                                                                onchange="select_address();"
                                                                                name="search_address"></select>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">ADDRESS LINE
                                                                                1:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="address_line_1"
                                                                                name="address_line_1" required>
                                                                            @if($errors->has('address_line_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('address_line_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">ADDRESS LINE
                                                                                2:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="address_line_2"
                                                                                name="address_line_2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">CITY:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="city" name="city" required>
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
                                                                            <input type="text" class="form-control"
                                                                                id="state" name="state" required>
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
                                                                            <input type="text" class="form-control"
                                                                                id="zip" name="zip" required>
                                                                            @if($errors->has('zip'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('zip') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">ADD TO EXISTING
                                                                                ORGANIZATION?:</label>
                                                                            <select name="add_to_existing_org"
                                                                                class="form-control" id="add_to_existing_org1">
                                                                                <option value="None">None</option>

                                                                                @foreach($existing_org as $exst_org)
                                                                                       <option value="{{ $exst_org->company_name }}">{{ $exst_org->company_name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="submit" class="cmnbtn">Save</button>
                                                                    <button type="button" onclick="save_and_new('person')" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Save
                                                                        & New</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <!-- Business/Organization Details -->

                                                    <div class="tab-pane fade" id="profile-1" role="tabpanel"
                                                        aria-labelledby="profile-tab">
                                                        <div class="media">
                                                            <form action="{{ route('client.contacts.business.add.action') }}" method="post">
                                                                @csrf

                                                                <div class="row">
                                                                    <h4>Organization Details</h4>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="name" class="col-form-label">
                                                                                Name:</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control" id="name" required>
                                                                            @if($errors->has('name'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('name') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">Company
                                                                                Type</label>
                                                                            <select class="form-control"
                                                                                name="company_type">
                                                                                <option value="Select..">Select..
                                                                                </option>
                                                                                <option value="Corporation">Corporation
                                                                                </option>
                                                                                <option value="Government Agency">
                                                                                    Government Agency</option>
                                                                                <option
                                                                                    value="Limited Liability Company">
                                                                                    Limited Liability Company</option>
                                                                                <option value="Sole Proprieror">Sole
                                                                                    Proprieror</option>
                                                                                <option value="Partnership">Partnership
                                                                                </option>
                                                                                <option value="Not-for-Profit">
                                                                                    Not-for-Profit</option>
                                                                            </select>
                                                                            @if($errors->has('company_type'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('company_type') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="Email"
                                                                                class="col-form-label">Email:</label>
                                                                            <input type="text" name="email"
                                                                                class="form-control" id="Email" required>
                                                                            @if($errors->has('email'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('email') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row contact-home">
                                                                    <div class="col-md-6">
                                                                        <label for="Email"
                                                                            class="col-form-label">Phone:</label>
                                                                        <div class="form-group">
                                                                            <input type="text" name="phone_1"
                                                                                class="form-control" required>
                                                                            @if($errors->has('phone_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('phone_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" name="phone_2"
                                                                                class="form-control" required>
                                                                            @if($errors->has('phone_2'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('phone_2') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="Email"
                                                                            class="col-form-label">FAX:</label>
                                                                        <div class="form-group">
                                                                            <input type="text" name="fax_1"
                                                                                class="form-control" required>
                                                                            @if($errors->has('fax_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('fax_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" name="fax_2"
                                                                                class="form-control" required>
                                                                            @if($errors->has('fax_2'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('fax_2') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- search address -->
                                                                <!-- <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="search_address"
                                                                        class="col-form-label">Search
                                                                        Address:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="search_address"
                                                                        name="search_address"
                                                                        onkeyup="search();"
                                                                        placeholder="Search Address Here..">
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                                <!--  address found -->
                                                                <!-- <div class="row" style="display:none;"
                                                            id="address_found_div">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="address_found"
                                                                        class="col-form-label">Addresses:</label>
                                                                    <select
                                                                        class="form-control border border-danger"
                                                                        id="address_found"
                                                                        onchange="select_address();"
                                                                        name="search_address"></select>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">ADDRESS LINE
                                                                                1:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="address_line_1"
                                                                                name="address_line_1" required>
                                                                            @if($errors->has('address_line_1'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('address_line_1') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">ADDRESS LINE
                                                                                2:</label>
                                                                            <input type="text" name="address_line_2"
                                                                                class="form-control" id="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="address line 1"
                                                                                class="col-form-label">CITY:</label>
                                                                            <input type="text" class="form-control"
                                                                                id="city" name="city" required>
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
                                                                            <input type="text" class="form-control"
                                                                                id="state" name="state" required>
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
                                                                            <input type="text" class="form-control"
                                                                                id="zip" name="zip" required>
                                                                            @if($errors->has('zip'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('zip') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <h4 class="mt-2">Organization Contacts</h4>
                                                                </div>
                                                                

                                                                <!-- more contacts -->
                                                                <div id="more_contacts"></div>
                                                                

                                                                <div class="mt-2">
                                                                   <i class="fa fa-plus" onclick="return add_more_contacts();" style="cursor: pointer;">&nbsp; Add Contacts</i>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="submit" class="cmnbtn">Save</button>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Save
                                                                        & New</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--- modal ends -->
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Organization</th>
                                                <th>Phone</th>
                                                <th>Cell</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allContacts as $allContact)
                                            @php
                                            $organization = ($allContact->add_to_existing_org == "None") ? " " :
                                            $allContact->add_to_existing_org;
                                            @endphp

                                            <tr>
                                                <td> {{ $allContact->name }} </td>
                                                <td> {{ $organization }} </td>
                                                <td> {{ $allContact->home }} </td>
                                                <td> {{ $allContact->cell }} </td>
                                                <td> {{ $allContact->email }} </td>
                                                <td>
                                                    <a href="#">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" onclick=""
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Contact Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
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
                                <div class="opnmtrs">
                                    <h5>DEBTORS WITH PAYMENT PLANS (0)</h5>
                                </div>
                                <div class="btnmtrs pt-2 pb-3">
                                    <button type="button" class="cmnbtn mr-2">EXPORT CSV</button>
                                    <button type="button" class="cmnbtn">CREATE NEW PLAN</button>
                                </div>
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

    <!-- dropdown dependency -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('custom_js/client/contact/add.js') }}"></script>

    <x-clientDashboardFooter />