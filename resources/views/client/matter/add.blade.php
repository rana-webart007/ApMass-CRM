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
                        <li><a href="#headingSix">Email Settings</a></li>
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
                                            MATTER DETAILS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">MATTER TYPE*</label>
                                                    <select class="form-control" id="exampleSelectexpense">
                                                        @foreach($states as $state)
                                                        <option value="{{ $state->state_abbr }}">
                                                            {{ $state->state_abbr }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">MATTER TYPE*</label>
                                                    <select class="form-control" id="exampleSelectexpense">
                                                        <option value="CA" selected>Select an area of law</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">Select a matter type</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">INTERNAL REFERENCE</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">MATTER DESCRIPTION</label>
                                                    <textarea class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">CLIENT ROLE*</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
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
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">ATTORNEY RESPONSIBLE</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">PERSON ASSISTING</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">ORIGINATING ATTORNEY</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
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
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1">CLIENT </label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">DEBTORS</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
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
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">BILLING TYPE</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate" name="override"
                                                        value="override rate">
                                                    <label for="override">Do not override rate</label><br>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate_staff" name="override"
                                                        value="override_rate_staff">
                                                    <label for="override">Override rate for all staff</label><br>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate_staff_number" name="override"
                                                        value="override_rate_staff_number">
                                                    <label for="override">Override default rate per staff
                                                        member</label><br>
                                                </div>
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
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="override_rate" name="not_applicable"
                                                        value="override rate">
                                                    <label for="override">Not Applicable</label><br>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="Grace period" name="not_applicable"
                                                        value="override_rate_staff">
                                                    <label for="override">Grace period</label><br>
                                                </div>
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
                                            Email Settings
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="exampleTextarea1">INVOICE TEMPLATE</label>
                                                <select class="form-control" id="exampleSelectGender">
                                                    <option>Firm Default</option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">INVOICE TITLE</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="none" name="invoive_title" value="none">
                                                    <label for="none">None</label>
                                                    <input type="radio" id="matter_title" name="invoive_title"
                                                        value="matter_title">
                                                    <label for="none">Matter Title</label>
                                                    <input type="radio" id="matter_description" name="invoive_title"
                                                        value="matter_description">
                                                    <label for="none">Matter Description</label>
                                                    <input type="radio" id="custom_text" name="invoive_title"
                                                        value="custom_text">
                                                    <label for="none">Custom text</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="">INVOICE SUBTITLE</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="radio" id="none" name="invoive_sub_title" value="none">
                                                    <label for="none">None</label>
                                                    <input type="radio" id="matter_title" name="invoive_sub_title"
                                                        value="matter_title">
                                                    <label for="none">Matter Title</label>
                                                    <input type="radio" id="matter_description" name="invoive_sub_title"
                                                        value="matter_description">
                                                    <label for="none">Matter Description</label>
                                                    <input type="radio" id="custom_text" name="invoive_sub_title"
                                                        value="custom_text">
                                                    <label for="none">Custom text</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="">NOTES</label>
                                                <!-- <textarea cols="80" id="editor1" name="editor1" rows="10"> -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea rows="5" cols="50" name="notes" id="editor"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">EINVOICE</label>
                                                <select class="form-control" id="exampleSelectGender">
                                                    <option>Use Firm</option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">SURCHARGE</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" id="override-surcharge"
                                                        name="override-surcharge" value="override-surcharge">
                                                    <label for="override-surcharge">Override default surcharge
                                                        settings</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <x-clientDashboardFooter />