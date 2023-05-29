<x-clientDashboardHeader />

<!-- partial -->
<div class="main-panel dashboard">
    <div class="content-wrapper wrapers">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{ ucfirst(Auth::guard('client')->user()->name) }} </h3>
                        <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                class="text-primary">3 unread alerts!</span></h6> -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="https://bootstrapdash.com/demo/skydash-free/template/images/dashboard/people.svg"
                            alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Today ({{ date('F j, Y') }})</h4>
                                    <h6 class="font-weight-normal mt-2 ml-5">{{ date('h:i:s A') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Matters</p>
                                <p class="fs-30 mb-2">{{ $total_matters }}</p>
                                <p>10.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Clients</p>
                                <p class="fs-30 mb-2">{{ $total_person_contacts }}</p>
                                <p>22.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Contacts</p>
                                <p class="fs-30 mb-2">{{ ($total_business + $total_person_contacts) }}</p>
                                <p>2.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Orders</p>
                                <p class="fs-30 mb-2">4703</p>
                                <p>0.22% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-clientDashboardFooter />