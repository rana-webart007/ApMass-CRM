<x-firmHeader />

<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row m-2">

             <div class="col-md-12 m-2">
                  <h5>Staff & Users</h5>
             </div>

             <div class="col-md-12 m-1">
                <p>Staff can be added to ApMaas to track work against them without requiring a license. 
                If a staff member needs to login to ApMaas, then they will require a user license.</p>
             </div>

        </div>

        <div class="row m-2">
            <div class="col-md-6">
                <a href="#" onclick="add_new_user();"><i class="fa fa-plus">&nbsp; Add a New User/Staff</i></a>
           </div>
           <div class="col-md-6 text-end">
               <div class="d-flex justify-content-lg-end">
                <label class="switch me-2">
                    <input type="checkbox" onclick="show_former_staff()" name="is_former_member" id="is_former_member">
                    <span class="slider round"></span>
                </label>
                 &nbsp; Show Former Staff    
            </div> 
           </div>
        </div>

        <!-- Add Form -->
        <div class="m-2 border border-dark rounded bg-white" id="staff-add-form" style="display:none;">
        <form action="{{ route('client.staff.add.action') }}" method="post">
            @csrf

            <div class="row p-2">
                 <div class="col-md-12 mb-2 mt-2">
                      <h4>Add New Staff</h4>
                 </div>

                 <!-- name -->
            ī  <div class="col-md-2"> 
                    <label for="">Title</label>
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

                <div class="col-md-4"> 
                    <label for="">First Name *</label>
                    <input type="text" class="form-control" name="first_name" id="">

                    @if($errors->has('first_name'))
                    <span
                        class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>

                <div class="col-md-4"> 
                    <label for="">Last Name *</label>
                    <input type="text" class="form-control" name="last_name" id="">

                    @if($errors->has('last_name'))
                    <span
                        class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>

                <!-- role -->
                
                <div class="col-md-3 mt-2"> 
                    <label for="">Initials *</label>
                    <input type="text" class="form-control" name="initials" id="">

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
                    <input type="email" class="form-control" name="email" id="">

                    @if($errors->has('email'))
                    <span
                        class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- phone no -->
                <div class="col-md-6 mt-2">
                    <label for="">Area Code</label>
                    <input type="text" class="form-control" name="phone_area_code" id="">

                    @if($errors->has('phone_area_code'))
                    <span
                        class="text-danger">{{ $errors->first('phone_area_code') }}</span>
                    @endif
                </div>

                <div class="col-md-6 mt-2">
                    <label for="">Phone NO </label>
                    <input type="text" class="form-control" name="phone_no" id="">

                    @if($errors->has('phone_no'))
                    <span
                        class="text-danger">{{ $errors->first('phone_no') }}</span>
                    @endif
                </div>

                <!-- Mobile No --> 
                <div class="col-md-6 mt-2">
                    <label for="">Area Code</label>
                    <input type="text" class="form-control" name="mobile_area_code" id="">

                    @if($errors->has('mobile_area_code'))
                    <span
                        class="text-danger">{{ $errors->first('mobile_area_code') }}</span>
                    @endif
                </div>

                <div class="col-md-6 mt-2">
                    <label for="">Mobile NO </label>
                    <input type="text" class="form-control" name="mobile_no" id="">

                    @if($errors->has('mobile_no'))
                    <span
                        class="text-danger">{{ $errors->first('mobile_no') }}</span>
                    @endif
                </div>

                <!-- Hourly Rate -->
                <div class="col-md-9 mt-2">
                    <label for="">Hourly Rate </label>
                    <input type="number" class="form-control" placeholder="Rate in $" name="hourly_rate" id="">

                    @if($errors->has('hourly_rate'))
                    <span
                        class="text-danger">{{ $errors->first('hourly_rate') }}</span>
                    @endif
                </div>

                <!-- checkboxes -->
                <div class="col-md-12 mt-3 d-flex">
                <div class="col-md-1">
                    <label class="switch">
                        <input type="checkbox" name="time_entries_unit">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <p>Enter Time Entries as Units</p>
                </div>
            </div>

            <div class="col-md-12 mt-3 d-flex">
                <div class="col-md-1">
                    <label class="switch">
                        <input type="checkbox" name="is_former_member">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <p>Is a Former Staff Member</p>
                </div>
            </div>

            <div class="col-md-2 mt-3">
                <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                    >Save</button>
            </div>
            <div class="col-md-2 mt-3">
                <button type="button" onclick="cancel_user_add()" class="btn btn-dark btn-lg font-weight-medium auth-form-btn"
                    >Cancel</button>
            </div>

            </div>    
        </form>
     </div>
     <!-- End of Add form -->

     <!-- staff/users table -->
     <div class="row m-2" id="staff-table" style="display: block;">
          <div class="col-md-12">
            <h4>Staff/User</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($all_staffs) >0)
                @foreach($all_staffs as $key => $all_staff)
                  <tr>
                    <th scope="row">{{ ($key + 1) }}</th>
                    <td>{{ $all_staff->name }}</td>
                    <td>{{ $all_staff->email }}</td>
                    <td>
                        <a href="{{ route('client.staff.edit', $all_staff->id) }}">
                            <button type="button"
                                class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <button type="button" onclick="sw_alert1(<?php echo $all_staff->id ?>, 'staff');"
                            class="btn btn-danger btn-sm">Delete</button>
                    </td>
                  </tr>
                @endforeach
                @else
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <b> No Staff Found </b> </td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
              </table>
          </div>
     </div>

     <!-- former user table -->
     <div class="row m-2" id="former-user-table" style="display:none;">
          <div col-md-12>
            <div class="col-md-12">
                <h4>Former Staff</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(count($former_staffs) >0)
                    @foreach($former_staffs as $key => $former_staff)
                      <tr>
                        <th scope="row">{{ ( $key + 1 ) }}</th>
                        <td>{{ $former_staff->name }}</td>
                        <td>{{ $former_staff->email }}</td>
                        <td>
                            <a href="{{ route('client.staff.edit', $former_staff->id) }}">
                                <button type="button"
                                    class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <button type="button" onclick="sw_alert1(<?php echo $former_staff->id ?>, 'staff');"
                                class="btn btn-danger btn-sm">Delete</button>
                        </td>
                      </tr>
                    @endforeach
                    @else
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <b> No Staff Found </b> </td>
                        <td></td>
                    </tr>
                    @endif
                    </tbody>
                  </table>
              </div>
          </div>
     </div>
    </div>
</div>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/staff_users.js') }}"></script>

<x-firmFooter />