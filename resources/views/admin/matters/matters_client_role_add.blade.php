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
                        <li><a href="{{ route('admin.matter.area-of-law-add') }}">Add Area of law</a></li>
                        <li><a href="{{ route('admin.matter.type-add') }}">Add Matter Type</a></li>
                        <li><a href="{{ route('admin.matter.client-role-add') }}">Add Client Role</a></li>
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

                                <form action="">
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Area of Law</label>
                                                    <input type="text" name="area_of_law" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('area_of_law') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Matters Type</label>
                                                    <input type="text" name="matters_type" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('matters_type') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group reperiod">
                                                    <label for="exampleSelectGender">Client's Role</label>
                                                    <input type="text" name="clients_role" class="form-control"
                                                        id="exampleSelectexpense" value="{{ old('clients_role') }}">
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

    <x-adminDashboardFooter />