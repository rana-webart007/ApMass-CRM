<x-clientDashboardHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Edit Person Contact</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidelstg">
                    <h5>Quick Links:</h5>
                    <ul>
                        <li><a href="#">Back</a></li>
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
                                            Contact
                                        </button>
                                    </h5>
                                </div>

                                @include('commons.session-msg')

                                <form action="{{ route('client.contacts.person.edit.action', $detail->id)}}" method="post">
                                    @csrf

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="frist-name" class="col-form-label">
                                                            Name:</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $detail->name }}" id="name"
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
                                                        <input type="text" class="form-control"  value="{{ $detail->email }}" name="email" id="Email"
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
                                                            <input type="text" name="home" value="{{ $detail->home }}" class="form-control"
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
                                                            <input type="text" name="cell" value="{{ $detail->cell }}" class="form-control"
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
                                                                class="form-control" id="address_line_1" value="{{ $detail->address_line_1 }}" required>
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
                                                                class="form-control" id="address_line_2" value="{{ $detail->address_line_2 }}" required>
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
                                                            <input type="text" name="state" value="{{ $detail->state }}" class="form-control"
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
                                                        <input type="text" name="city" value="{{ $detail->city }}" class="form-control"
                                                            id="exampleSelectexpense">

                                                        @if ($errors->has('city'))
                                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="exampleSelectGender">Zip *</label>
                                                        <input type="text" name="zip" value="{{ $detail->zip }}" class="form-control"
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
    </div>
    <!-- content-wrapper ends -->

    <x-clientDashboardFooter />