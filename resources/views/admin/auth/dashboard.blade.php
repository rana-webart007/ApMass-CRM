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
                                    <h5>ALL ({{ $total_area }})</h5>
                                </div>
                                <div class="btnmtrs">
                                    <a href="{{ route('admin.matter.area-of-law-add') }}"><button type="button"
                                            class="cmnbtn">Add Area of law</button></a>
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
                                            @foreach($law_areas as $law_area)
                                            <tr>
                                                <td> {{ $law_area->area }} </td>
                                                <td> {{ $law_area->created_at->format("d-m-Y") }} </td>
                                                <td> <a
                                                        href="{{ route('admin.matter.law-area-edit', $law_area->unique_id) }}"><button
                                                            type="button"
                                                            class="btn btn-primary btn-sm">Edit</button></a> </td>
                                                <td>
                                                    <button type="button" onclick="sw_alert1(<?php echo $law_area->id ?>);"
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="m-2">
                                        {{ $law_areas->links() }}
                                    </div>
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
                                    <a href="{{ route('admin.matter.type-add') }}"><button type="button"
                                            class="cmnbtn">Add Matter Type</button></a>
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
                                    <a href="{{ route('admin.matter.client-role-add') }}"><button type="button"
                                            class="cmnbtn">Add Client</button></a>
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

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <script>
    function sw_alert1(area_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            padding: '1em',
            showCancelButton: true,
            // showCloseButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('admin.matter.law-area-delete', '') }}/"+area_id;
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
    </script>
    <x-adminDashboardFooter />