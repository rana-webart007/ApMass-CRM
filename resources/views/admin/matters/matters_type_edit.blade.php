<x-adminDashboardHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="hdngprt">
                    <h3>Edit Matter's Type</h3>
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
                                            Matter's Type
                                        </button>
                                    </h5>
                                </div>

                                @include('commons.session-msg')

                                <form action="{{ route('admin.matter.type-edit-action', $detail->unique_matter_id) }}" method="post">
                                    @csrf

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group reperiod">
                                                        <label for="exampleSelectGender">Area of Law</label>

                                                        <select name="area_of_law" class="form-control"
                                                            id="exampleSelectexpense">
                                                            <option value="{{ $detail->area}}">{{ $detail->area}}</option>
                                                            @foreach($law_areas as $law_area)
                                                            @if($law_area->area != $detail->area)
                                                              <option value="{{ $law_area->area}}">{{$law_area->area}}</option>
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
                                                        <input type="text" name="matters_type" class="form-control"
                                                            id="exampleSelectexpense" value="{{ $detail->matters_type }}">

                                                        @if ($errors->has('matters_type'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('matters_type') }}</span>
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

    <x-adminDashboardFooter />