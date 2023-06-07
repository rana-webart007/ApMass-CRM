<x-firmHeader />

<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row m-2">
              <div class="col-md-12 m-2">
                   <a href="{{ route('client.firm.time-activities') }}" class="btn btn-primary">Back</a>
              </div>
        </div>

        <div class="row m-2">
            <div class="col-md-12 m-2">
                <h4>Activity Entry</h4>
            </div>

            <div class="col-md-12 m-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link active ml-2 mr-1" onclick="show_fee_activity()" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Fee &nbsp; &nbsp;
                        </button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link mr-1" id="home-tab" onclick="show_time_activity()" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Time &nbsp; &nbsp;
                        </button>
                    </li>
                    <li class="nav-item buttonCS" role="presentation">
                        <button class="nav-link" id="home-tab" data-toggle="tab" onclick="show_expense_activity()" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Expense &nbsp; &nbsp;
                        </button>
                    </li>
                </ul>
            </div>
        </div>


        <!-- fee activity -->
        <form action="#" id="fee-activity" style="display: block">
        <div class="row m-2" >
            <div class="col-md-6 m-2">
                  <label for="code">Code</label>
                  <input type="text" name="code" class="form-control" id="code">         
            </div>

            <div class="col-md-10 m-2">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject">         
            </div>

            <div class="col-md-6 m-2">
                <label for="subject">Billable</label>
                <select name="billable" id="billable" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-md-6 m-2">
                <h4>Rate</h4>
            </div>

            <div class="col-md-8 ml-5">
                <input type="radio" name="rate" id="all_staff" class="form-check-input">
                <label for="all_staff" class="form-check-label">Override rate for all staff</label>
            </div>

            <div class="col-md-9 ml-5 mt-1" style="display: none;">
                <input type="number" name="rate_for_all_staff" id="rate_for_all_staff" class="form-control" placeholder="Rate in $">
            </div>


            <div class="col-md-8 ml-5 mt-2">
                <input type="radio" name="rate" id="individual_staff" class="form-check-input">
                <label for="form-check-label">Override default rate per staff member</label>
            </div>
        </div>

        <div class="row m-2" style="display: none;">
            <div class="col-md-6 ml-5">
                <select name="staffs" id="staffs" class="form-control"></select>
            </div>
            <div class="col-md-4 ml-5">
                <input type="text" name="rate_for_staff" class="form-control">
            </div>
        </div>

        <div class="row m-2">
            <div class="col-md-6 ml-2">
                 <button type="submit" class="btn btn-primary">Create Activity</button>
            </div>
        </div>
        </form>


        <!-- time activity -->
        <form action="#" style="display: none;" id="time-activity">
            <div class="row m-2" >
                <div class="col-md-6 m-2">
                      <label for="code">Code</label>
                      <input type="text" name="code" class="form-control" id="code">         
                </div>
    
                <div class="col-md-10 m-2">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject">         
                </div>
    
                <div class="col-md-9 m-2">
                    <label for="default_duration">Default Duration</label>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item buttonCS" role="presentation">
                            <input type="text" name="" id="" class="form-control">
                        </li>
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link" id="home-tab" style="padding: 0.1rem 0.1rem !important" data-toggle="tab" type="button" role="tab" aria-controls="home" aria-selected="true">Hrs &nbsp; &nbsp;
                            </button>
                        </li>
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link" id="home-tab" data-toggle="tab" style="padding: 0.1rem 0.1rem !important" type="button" role="tab" aria-controls="home" aria-selected="true">Units &nbsp; &nbsp;
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 m-2">
                    <label for="subject">Billable</label>
                    <select name="billable" id="billable" class="form-control">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
    
                <div class="col-md-6 m-2">
                    <h4>Rate</h4>
                </div>
    
                <div class="col-md-8 ml-5">
                    <input type="radio" name="rate" id="no_override" class="form-check-input">
                    <label for="all_staff" class="form-check-label">Do not override rate</label>
                </div>

                <div class="col-md-8 ml-5">
                    <input type="radio" name="rate" id="all_staff" class="form-check-input">
                    <label for="all_staff" class="form-check-label">Override rate for all staff</label>
                </div>
    
                <div class="col-md-9 ml-5 mt-1" style="display: none;">
                    <input type="number" name="rate_for_all_staff" id="rate_for_all_staff" class="form-control" placeholder="Rate in $">
                </div>
    
    
                <div class="col-md-8 ml-5 mt-2">
                    <input type="radio" name="rate" id="individual_staff" class="form-check-input">
                    <label for="form-check-label">Override default rate per staff member</label>
                </div>
            </div>
    
            <div class="row m-2" style="display: none;">
                <div class="col-md-6 ml-5">
                    <select name="staffs" id="staffs" class="form-control"></select>
                </div>
                <div class="col-md-4 ml-5">
                    <input type="text" name="rate_for_staff" class="form-control">
                </div>
            </div>
    
            <div class="row m-2">
                <div class="col-md-6 ml-2">
                     <button type="submit" class="btn btn-primary">Create Activity</button>
                </div>
            </div>
            </form>


            <!-- expense activity -->
          <form action="#" style="display:none;" id="expense-activity">
            <div class="row m-2" >
                <div class="col-md-6 m-2">
                      <label for="code">Code</label>
                      <input type="text" name="code" class="form-control" id="code">         
                </div>
    
                <div class="col-md-10 m-2">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject">         
                </div>

                <div class="col-md-3 m-2">
                    <label for="rate">Rate</label>
                    <input type="number" name="rate" class="form-control" id="rate" placeholder="in $">
                </div>

                <div class="col-md-3 m-2">
                    <label for="quantity">Default Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="1" id="quantity" placeholder="in $">
                </div>
    
                <div class="col-md-3 m-2">
                    <label for="subject">Billable</label>
                    <select name="billable" id="billable" class="form-control">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
    
            <div class="row m-2">
                <div class="col-md-6 ml-2">
                     <button type="submit" class="btn btn-primary">Create Activity</button>
                </div>
            </div>
            </form>

    </div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/activity_create.js') }}"></script>

<x-firmFooter />