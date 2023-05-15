<x-adminDashboardHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Add Client's Role</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidelstg">
                    <h5>Quick Links:</h5>
                    <ul>
                          <li><a href="{{ route('admin.dashboard') }}">Back</a></li>
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
                                            Client's Role
                                        </button>
                                    </h5>
                                </div>

                                @include('commons.session-msg')

                                <form action="{{ route('admin.matter.client-role-edit-action', $role->role_id) }}" method="post">
                                @csrf

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Area of Law</label>
                                                   
                                                        <select name="area_of_law" id="area_of_law" onchange="return area_change()" class="form-control"
                                                            id="exampleSelectexpense">
                                                            <option value="{{ $role->area}}">{{ $role->area}}</option>
                                                            @foreach($law_areas as $law_area)
                                                            @if($law_area->area != $role->area)
                                                            <option value="{{ $law_area->area}}">{{$law_area->area}}
                                                            </option>
                                                            @endif
                                                            @endforeach
                                                        </select>

                                                        @if ($errors->has('area_of_law'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('area_of_law') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Matters Type</label>
                                                    <select type="text" name="matters_type" id="matters_type" class="form-control"
                                                        id="exampleSelectexpense" disabled></select>

                                                        @if ($errors->has('matters_type'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('matters_type') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Client's Role</label>
                                                    <input type="text" name="clients_role" class="form-control"
                                                        id="exampleSelectexpense" value="{{ $role->client_role }}">

                                                        @if ($errors->has('clients_role'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('clients_role') }}</span>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function area_change(){
        let area = document.getElementById('area_of_law').value;

        $.ajax({
                url: '{{route("admin.matter.get-by-area", " ")}}'+area,
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    $('#matters_type').empty();

                    if (data.length > 0) {
                        var input = document.getElementById("matters_type");
                        input.removeAttribute("disabled");

                        $('#matters_type').html("<option value='Select A Matter Type'>Select A Matter Type</option>");
                        $.each(data, function(key, value) {
                            $('#matters_type').append('<option value="' + value.matters_type + '">' + value.matters_type + '</option>');
                        });
                    } else {
                        document.getElementById("matters_type").setAttribute("disabled", true);
                        $('#matters_type').append('<option value="" style="font-weight:bold;">No Matters Found</option>');
                    }
                }
            });

    }
</script>
    <x-adminDashboardFooter />