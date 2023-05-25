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

                                <form action="#" method="post">
                                @csrf

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
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

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
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

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
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

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
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


                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
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
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                <label for="Email"
                                                                            class="col-form-label">HOME:</label>
                                                                        <div class="form-group">
                                                                            <input type="number" name="home_2"
                                                                                class="form-control" id="home_2" required>
                                                                            @if($errors->has('home_2'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('home_2') }}</span>
                                                                            @endif
                                                                        </div>
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

<x-clientDashboardFooter />