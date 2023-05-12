<x-adminDashboardHeader />
<div class="main-panel ysecprty">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#area_of_law"
                            type="button" role="tab" aria-controls="contact" aria-selected="true">Area of law</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="plans-tab" data-toggle="tab" href="#matter_type" role="tab"
                            aria-controls="plans" aria-selected="false">Matter Type</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="plans-tab" data-toggle="tab" href="#client" role="tab"
                            aria-controls="plans" aria-selected="false">Client Role</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="plans-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="plans" aria-selected="false">All Matters</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="area_of_law" role="tabpanel"
                        aria-labelledby="contact-tab">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="opnmtrs">
                                    <h5>ALL (0)</h5>
                                </div>
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-2">Add Area of law</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Area of Law</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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
                    <div class="tab-pane fade" id="matter_type" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="opnmtrs">
                                    <h5>ALL (0)</h5>
                                </div>
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-2">Add Matter Type</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Area of Law</th>
                                                <th>Matter Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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

                    <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="opnmtrs">
                                    <h5>ALL (0)</h5>
                                </div>
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-2">Add Client</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Area of Law</th>
                                                <th>Matter Type</th>
                                                <th>Client Role</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
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
    <x-adminDashboardFooter />