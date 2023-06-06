<x-firmHeader />

<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row m-2">

             <div class="col-md-12 m-1">
                  <h5>Staff & Users</h5>
             </div>

             <div class="col-md-12 m-1">
                <p>Staff can be added to ApMaas to track work against them without requiring a license. 
                If a staff member needs to login to ApMaas, then they will require a user license.</p>
             </div>
        </div>

        <!-- Add Form -->
        <div class="m-2 border border-dark rounded bg-white" id="staff-add-form">
        <form action="{{ route('client.staff.edit.action', $details->id) }}" method="post">
            @csrf

            <div class="row p-2">
                 <div class="col-md-12 mb-2 mt-2">
                      <h4>Edit Staff</h4>
                 </div>

                 <!-- name -->

                <div class="col-md-12"> 
                    <label for="">Name *</label>
                    <input type="text" class="form-control" name="name" value="{{ $details->name }}">

                    @if($errors->has('name'))
                    <span
                        class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <!-- role -->
                
                <div class="col-md-3 mt-2"> 
                    <label for="">Initials *</label>

                    @php 
                        $initials = explode(" ", $details->role)[0];
                    @endphp

                    <input type="text" class="form-control" name="initials" value="{{ $initials }}" id="">

                    @if($errors->has('initials'))
                    <span
                        class="text-danger">{{ $errors->first('initials') }}</span>
                    @endif
                </div>

                <div class="col-md-8 mt-2"> 
                    <label for="">Role</label>
                    <select class="form-control" name="role" id="role">
                        <option value="Select">Select</option>
                        <option value="Attorney">Attorney</option>
                        <option value="Bookkeeper">Bookkeeper</option>
                        <option value="Paralegal">Paralegal</option>
                        <option value="Reception">Reception</option>
                        <option value="Secretary">Secretary</option>
                    </select>

                    @if($errors->has('role'))
                    <span
                        class="text-danger">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <!-- email -->
                <div class="col-md-12 mt-2">
                    <label for="">Email *</label>
                    <input type="email" class="form-control" name="email" value="{{ $details->email }}">

                    @if($errors->has('email'))
                    <span
                        class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- phone no -->

                <div class="col-md-6 mt-2">
                    <label for="">Phone NO </label>
                    <input type="text" class="form-control" name="phone_no" value="{{ $details->phone_no }}" id="">

                    @if($errors->has('phone_no'))
                    <span
                        class="text-danger">{{ $errors->first('phone_no') }}</span>
                    @endif
                </div>

                <!-- Mobile No --> 

                <div class="col-md-6 mt-2">
                    <label for="">Mobile NO </label>
                    <input type="text" class="form-control" name="mobile_no" value="{{ $details->mobile_no }}" id="">

                    @if($errors->has('mobile_no'))
                    <span
                        class="text-danger">{{ $errors->first('mobile_no') }}</span>
                    @endif
                </div>

                <!-- Hourly Rate -->
                <div class="col-md-9 mt-2">
                    <label for="">Hourly Rate </label>
                    <input type="number" class="form-control" name="hourly_rate" value="{{ $details->hourly_rate }}" id="">

                    @if($errors->has('hourly_rate'))
                    <span
                        class="text-danger">{{ $errors->first('hourly_rate') }}</span>
                    @endif
                </div>

                <!-- checkboxes -->
                <div class="col-md-12 mt-3 d-flex">
                <div class="col-md-1">
                    <label class="switch">
                        @if($details->former_staff == "yes")
                        <input type="checkbox" name="time_entries_unit" checked>
                        @else
                        <input type="checkbox" name="time_entries_unit">
                        @endif
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <p>Enter Time Entries as Units</p>
                </div>
            </div>

            <div class="col-md-2 mt-3">
                <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                    >Save</button>
            </div>
            <div class="col-md-2 mt-3">
                <a href="{{ route('client.firm.stuff-users') }}"><button type="button" class="btn btn-dark btn-lg font-weight-medium auth-form-btn"
                    >Cancel</button></a>
            </div>

            </div>    
        </form>
     </div>
     <!-- End of Add form -->
    
    </div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<x-firmFooter />