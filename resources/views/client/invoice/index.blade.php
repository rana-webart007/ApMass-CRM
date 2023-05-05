<x-clientDashboardHeader />

<div class="main-panel ysecprty">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="invoices-tab" data-toggle="tab" data-target="#invoices"
                            type="button" role="tab" aria-controls="invoices" aria-selected="true">INVOICES</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="crinvoices-tab" data-toggle="tab" href="#crinvoices" role="tab"
                            aria-controls="crinvoices" aria-selected="false">CREATE INVOICES</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="finalize-tab" data-toggle="tab" href="#finalize" role="tab"
                            aria-controls="finalize" aria-selected="false">FINALIZE WITH PAYMENTS</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="bulk-tab" data-toggle="tab" href="#bulk" role="tab"
                            aria-controls="bulk" aria-selected="false">BULK TRUST PAYMENT</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="reminders-tab" data-toggle="tab" href="#reminders" role="tab"
                            aria-controls="reminders" aria-selected="false">REMINDERS</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="invoices" role="tabpanel" aria-labelledby="invoices-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Recently Viewed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Draft</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Unpaid</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Overdue</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Paid</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Void</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#" class="numbtn mr-1">0</a>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Issue Date
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="pb-2"><a href="#">All</a></li>
                                                    <li class="pb-2"><a href="#">This Month</a></li>
                                                    <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">Before </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="date" class="form-control currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">From </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">To </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Sent Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Sent</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Failed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Not Sent</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    Online Invoice
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Viewed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive">
                                                    Billing Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Time Based</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Fixed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Contingency</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseSix" aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    Matter Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            Select / De-select All
                                                            <i class="input-helper"></i><i
                                                                class="input-helper"></i></label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSeven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseSeven" aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    Matter Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                            data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Open</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Pending</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Closed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Cancelled</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Deleted</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingEight">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseEight" aria-expanded="true"
                                                    aria-controls="collapseEight">
                                                    Attorney Responsible
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                            data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <div class="btnprt mb-2">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingNine">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseNine" aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    Debtor Balances
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                            data-parent="#accordion" style="">
                                            <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $</span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label">in Trust</span>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div class="input-group currency-input balance-value"><input
                                                                    type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label">in Operating</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingNinety">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseNinety" aria-expanded="false"
                                                    aria-controls="collapseNinety">
                                                    FINALIZED ON
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseNinety" class="collapse" aria-labelledby="headingNinety"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="pb-2"><a href="#">All</a></li>
                                                    <li class="pb-2"><a href="#">This Month</a></li>
                                                    <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">Before </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="date" class="form-control currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">From </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">To </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn mr-2">DOWNLOAD (0)</button>
                                    <button type="button" class="cmnbtn mr-2">FINALIZE (0)</button>
                                    <button type="button" class="cmnbtn mr-2">DELETE DRAFTS (0)</button>
                                    <button type="button" class="cmnbtn mr-2">EMAIL (0)</button>
                                    <button type="button" class="cmnbtn mr-2">ADD PAYMENT</button>
                                    <button type="button" class="cmnbtn">ADD CREDIT</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Issued</th>
                                                <th>Invoice #</th>
                                                <th>Debtor(s)</th>
                                                <th>Matter</th>
                                                <th>Amount</th>
                                                <th>Credit</th>
                                                <th>Paid (Inc Interest)</th>
                                                <th>Unpaid (Inc Interest)</th>
                                                <th>Sent?</th>
                                                <th>Viewed</th>
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
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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

                    <div class="tab-pane fade" id="crinvoices" role="tabpanel" aria-labelledby="crinvoices-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div id="accordion2">
                                    <div class="card">
                                        <div class="card-header" id="headingTen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTen" aria-expanded="false"
                                                    aria-controls="collapseTen">
                                                    List
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTen" class="collapse show" aria-labelledby="headingTen"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="py-2"><a href="#">A-Z</a></li>
                                                    <li><a href="#">Grouped By Client</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingEleven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseEleven" aria-expanded="false"
                                                    aria-controls="collapseEleven">
                                                    Show
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="py-2"><a href="#">All unbilled matters</a></li>
                                                </ul>
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At with $ </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> unbilled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwelve">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwelve" aria-expanded="false"
                                                    aria-controls="collapseTwelve">
                                                    For Entries Dated
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="pb-2"><a href="#">All</a></li>
                                                    <li class="pb-2"><a href="#">This Month</a></li>
                                                    <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">Before </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="date" class="form-control currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">From </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">To </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirteen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThirteen" aria-expanded="false"
                                                    aria-controls="collapseThirteen">
                                                    Billing Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Show All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Time Based</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Fixed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Contingency</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFourteen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFourteen" aria-expanded="true"
                                                    aria-controls="collapseFourteen">
                                                    Matter Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                                            data-parent="#accordion2" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            Select / De-select All
                                                            <i class="input-helper"></i><i
                                                                class="input-helper"></i></label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFifteen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFifteen" aria-expanded="true"
                                                    aria-controls="collapseFifteen">
                                                    Matter Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen"
                                            data-parent="#accordion2" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Show All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Open</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Pending</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Closed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSixteen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseSixteen" aria-expanded="true"
                                                    aria-controls="collapseSixteen">
                                                    Attorney Responsible
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen"
                                            data-parent="#accordion2" style="">
                                            <div class="card-body">
                                                <div class="btnprt mb-2">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">JD</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSeventeen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseSeventeen" aria-expanded="true"
                                                    aria-controls="collapseSeventeen">
                                                    Debtor Balances
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen"
                                            data-parent="#accordion2" style="">
                                            <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Trust</span>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div class="input-group currency-input balance-value"><input
                                                                    type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Operating</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn mr-2">CREATE (0)</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Client & Matter</th>
                                                <th>Unbilled</th>
                                                <th>Last Invoiced</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
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

                    <div class="tab-pane fade" id="finalize" role="tabpanel" aria-labelledby="finalize-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="finalhdrty">
                                    <h5>TRUST ACCOUNT</h5>
                                    <form class="forms-sample">
                                        <div class="form-group matter">
                                            <select class="form-control">
                                                <option>Trust Account</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div id="accordion3">
                                    <div class="card">
                                        <div class="card-header" id="headingTwentyOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwentyOne" aria-expanded="false"
                                                    aria-controls="collapseTwentyOne">
                                                    Issue Date
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne"
                                            data-parent="#accordion3">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="pb-2"><a href="#">All</a></li>
                                                    <li class="pb-2"><a href="#">This Month</a></li>
                                                    <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">Before </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="date" class="form-control currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">From </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">To </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwentyTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwentyTwo" aria-expanded="false"
                                                    aria-controls="collapseTwentyTwo">
                                                    Billing Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo"
                                            data-parent="#accordion3">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Time Based</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Fixed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Contingency</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwentyThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwentyThree" aria-expanded="true"
                                                    aria-controls="collapseTwentyThree">
                                                    Matter Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentyThree" class="collapse"
                                            aria-labelledby="headingTwentyThree" data-parent="#accordion3" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            Select / De-select All
                                                            <i class="input-helper"></i><i
                                                                class="input-helper"></i></label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwentyFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwentyFour" aria-expanded="true"
                                                    aria-controls="collapseTwentyFour">
                                                    Matter Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentyFour" class="collapse"
                                            aria-labelledby="headingTwentyFour" data-parent="#accordion3" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Open</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Pending</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Closed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwentyFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwentyFive" aria-expanded="true"
                                                    aria-controls="collapseTwentyFive">
                                                    Attorney Responsible
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentyFive" class="collapse"
                                            aria-labelledby="headingTwentyFive" data-parent="#accordion3" style="">
                                            <div class="card-body">
                                                <div class="btnprt mb-2">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">JD</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwentySix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwentySix" aria-expanded="true"
                                                    aria-controls="collapseTwentySix">
                                                    Matter Balances
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix"
                                            data-parent="#accordion3" style="">
                                            <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Trust</span>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div class="input-group currency-input balance-value"><input
                                                                    type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Operating</span>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div class="input-group currency-input balance-value"><input
                                                                    type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Credit</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn mr-2">FINALISE & PAY (0)</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Matter</th>
                                                <th>Debtor(s)</th>
                                                <th>Amount Due</th>
                                                <th>Credit Balance</th>
                                                <th>Credit Payments</th>
                                                <th>Trust Balance</th>
                                                <th>Trust Payments</th>
                                                <th>Operating Balance</th>
                                                <th>Operating Payments</th>
                                                <th>Auto Allocate</th>
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
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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

                    <div class="tab-pane fade" id="bulk" role="tabpanel" aria-labelledby="bulk-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="finalhdrty">
                                    <h5>TRUST ACCOUNT</h5>
                                    <form class="forms-sample">
                                        <div class="form-group matter">
                                            <select class="form-control">
                                                <option>Trust Account</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div id="accordion4">
                                    <div class="card">
                                        <div class="card-header" id="headingThirtyOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThirtyOne" aria-expanded="false"
                                                    aria-controls="collapseThirtyOne">
                                                    Issue Date
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtyOne" class="collapse" aria-labelledby="headingThirtyOne"
                                            data-parent="#accordion4">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="pb-2"><a href="#">All</a></li>
                                                    <li class="pb-2"><a href="#">This Month</a></li>
                                                    <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">Before </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="date" class="form-control currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">From </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">To </span>
                                                        <div class="inline-block">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirtyTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThirtyTwo" aria-expanded="false"
                                                    aria-controls="collapseThirtyTwo">
                                                    Billing Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtyTwo" class="collapse" aria-labelledby="headingThirtyTwo"
                                            data-parent="#accordion4">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Time Based</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Fixed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Contingency</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirtyThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseThirtyThree" aria-expanded="true"
                                                    aria-controls="collapseThirtyThree">
                                                    Matter Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtyThree" class="collapse"
                                            aria-labelledby="headingThirtyThree" data-parent="#accordion4" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            Select / De-select All
                                                            <i class="input-helper"></i><i
                                                                class="input-helper"></i></label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirtyFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseThirtyFour" aria-expanded="true"
                                                    aria-controls="collapseThirtyFour">
                                                    Matter Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtyFour" class="collapse"
                                            aria-labelledby="headingThirtyFour" data-parent="#accordion4" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Open</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Pending</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Closed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirtyFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseThirtyFive" aria-expanded="true"
                                                    aria-controls="collapseThirtyFive">
                                                    Attorney Responsible
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtyFive" class="collapse"
                                            aria-labelledby="headingThirtyFive" data-parent="#accordion4" style="">
                                            <div class="card-body">
                                                <div class="btnprt mb-2">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">JD</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThirtySix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseThirtySix" aria-expanded="true"
                                                    aria-controls="collapseThirtySix">
                                                    Matter Balances
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThirtySix" class="collapse" aria-labelledby="headingThirtySix"
                                            data-parent="#accordion4" style="">
                                            <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> in Trust</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn mr-2">PAY (0)</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Matter</th>
                                                <th>Debtor(s)</th>
                                                <th>Issued Date</th>
                                                <th>Due Date</th>
                                                <th>Amount Due</th>
                                                <th>Trust Balance</th>
                                                <th>Trust Transfer</th>
                                                <th>Auto Allocate</th>
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
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
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

                    <div class="tab-pane fade" id="reminders" role="tabpanel" aria-labelledby="reminders-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div id="accordion5">
                                    <div class="card">
                                        <div class="card-header" id="headingFourtyOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFourtyOne" aria-expanded="false"
                                                    aria-controls="collapseFourtyOne">
                                                    Filter
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourtyOne" class="collapse" aria-labelledby="headingFourtyOne"
                                            data-parent="#accordion5">
                                            <div class="card-body">
                                                <ul class="side-menu-list">
                                                    <li><a href="#">Hide matters for debtors that have:</a></li>
                                                </ul>
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            A reminder in the last 14 Day(s)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            A reminder in the last 7 Day(s)
                                                        </label>
                                                    </div>
                                                </form>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                                <div class="debtor-balances">
                                                    <div class="balance-type">
                                                        <span class="balance-type-label">At least $ </span>
                                                        <div class="inline-block">
                                                            <div
                                                                class="input-group currency-input balance-value inline-block">
                                                                <input type="number" step="0.01"
                                                                    class="form-control currency" value="">
                                                            </div>
                                                        </div>
                                                        <span class="balance-type-label"> Overdue</span>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Only show invoices that have been reminded before
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFourtyTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFourtyTwo" aria-expanded="true"
                                                    aria-controls="collapseFourtyTwo">
                                                    Matter Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourtyTwo" class="collapse" aria-labelledby="headingFourtyTwo"
                                            data-parent="#accordion5" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Show All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Open</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Pending</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">Closed</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFourtyThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFourtyThree" aria-expanded="true"
                                                    aria-controls="collapseFourtyThree">
                                                    Matter Type
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourtyThree" class="collapse"
                                            aria-labelledby="headingThirtyThree" data-parent="#accordion5" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            Select / De-select All</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                            General</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFourtyFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFourtyFour" aria-expanded="true"
                                                    aria-controls="collapseFourtyFour">
                                                    Overdue By
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourtyFour" class="collapse"
                                            aria-labelledby="headingFourtyFour" data-parent="#accordion5" style="">
                                            <div class="card-body">
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">All</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">1-30 Days</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">31-60 Days</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">61-90 Days</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="listingprt">
                                                    <li>
                                                        <div class="my-2">
                                                            <a href="#">91+ Days</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="my-2">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFourtyFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseFourtyFive" aria-expanded="true"
                                                    aria-controls="collapseFourtyFive">
                                                    Attorney Responsible
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFourtyFive" class="collapse"
                                            aria-labelledby="headingFourtyFive" data-parent="#accordion5" style="">
                                            <div class="card-body">
                                                <div class="btnprt mb-2">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">JD</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                    <a href="#" class="mr-3">Select All</a>
                                                    <a href="#">Clear All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="btnmtrs">
                                    <button type="button" class="cmnbtn mr-2">PAY (0)</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-white">
                                        <thead>
                                            <tr>
                                                <th>Matter</th>
                                                <th>Debtor(s)</th>
                                                <th>Issued Date</th>
                                                <th>Due Date</th>
                                                <th>Amount Due</th>
                                                <th>Trust Balance</th>
                                                <th>Trust Transfer</th>
                                                <th>Auto Allocate</th>
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
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
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


    <x-clientDashboardFooter />