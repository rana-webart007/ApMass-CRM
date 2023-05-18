<x-adminDashboardHeader />
<div class="main-panel ysecprty">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#area_of_law"
                            type="button" role="tab" aria-controls="contact" aria-selected="true">All Address</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="area_of_law" role="tabpanel"
                        aria-labelledby="contact-tab">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="opnmtrs">
                                    <h5>ALL ({{ $total }})</h5>
                                </div>
                                <div class="btnmtrs">
                                    <a href="{{ route('admin.contact.add.address') }}"><button type="button"
                                            class="cmnbtn">Add Address</button></a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Location</th>
                                                <th>Address Line 1</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $key => $a)
                                                <tr>
                                                    <td>{{ ($key + 1) }}</td>
                                                    <td>{{ $a->location }}</td>
                                                    <td>{{ $a->address_line_1 }}</td>
                                                    <td>{{ $a->state }}</td>
                                                    <td>{{ $a->city }}</td>
                                                    <td>
                                                    <a href="{{ route('admin.contact.edit.address', $a->address_id) }}">
                                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <button type="button" onclick="sw_alert1(<?php echo $a->id ?>, 'admin_contact_address_del');"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
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

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <x-adminDashboardFooter />