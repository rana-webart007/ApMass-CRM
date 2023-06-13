<x-firmHeader />

@extends('commons.session-toaster-msg')

<div class="main-panel matterinside">
    <div class="content-wrapper">
            
           <div class="row m-2">
                <div class="col-md-12 m-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link mr-1" id="home-tab" onclick="showInvoices()" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Invoices &nbsp; &nbsp;</button>
                        </li>
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link mr-1" id="home-tab" onclick="showInvoicesReminders()" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Invoice Reminders &nbsp; &nbsp;
                            </button>
                        </li>
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link mr-1" id="home-tab" onclick="showEvergreenRetainers()" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Evergreen Retainers &nbsp; &nbsp;
                            </button>
                        </li>
                        <li class="nav-item buttonCS" role="presentation">
                            <button class="nav-link mr-1" id="home-tab" onclick="showDepositRequest()" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Deposit Request &nbsp; &nbsp;
                            </button>
                        </li>
                    </ul>
                </div>     
            </div>

            <!-- Invoices -->

            <form action="#" id="invoices" style="display: block;">
            <div class="row m-2" >
                <div class="col-md-12 m-2">
                      <label for="">Email Subject</label>
                      <input type="text" name="email_subject" id="email_subject" class="form-control" placeholder="Email Subject">
                </div>

                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="subject_placeholder" id="subject_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>

                <div class="col-md-12 m-2">
                      <label for="">Email Body</label>
                      <textarea name="inv_email_body" id="inv_email_body" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                </div>


                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="email_body_placeholder" id="email_body_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>


                <!-- checkboxes -->
                <div class="col-md-12 mt-2 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            <input type="checkbox" name="send_copy_of_email_to_user">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <p>Send a Copy of the Email to the User</p>
                    </div>
                </div>
    
                <div class="col-md-12 mt-2 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            <input type="checkbox" name="attach_invoice_to_email">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <p>Attach the invoice to the email as a PDF document</p>
                    </div>
                </div>

                <div class="col-md-12 mt-2 d-flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
           </form>

           <!-- invoice reminders -->
           <form action="#" id="invoice-remainders" style="display: none;">
                  <div class="row m-2">
                        <div class="col-md-5 m-2">
                            <div class="col-md-12 m-2">
                                 <label for="">Email Subject</label>
                                 <input type="text" name="email_subject" id="email_subject" class="form-control">
                            </div>

                            <div class="col-md-12 m-2">
                                 <label for="">Placeholder</label>
                                 <select name="email_subject_placeholder" id="email_subject_placeholder" class="form-control">
                                    <option value="debator_name">Debator Name</option>
                                    <option value="debator_amount_due">Amount Due( Debator )</option>
                                    <option value="invoice_amount_due">Amount Due( Invoice )</option>
                                    <option value="matter_amount_due">Amount Due ( Matter )</option>
                                    <option value="amount_past_due">Amount Past Due</option>
                                    <option value="invoice_due_date">Invoice Due Date</option>
                                    <option value="total_hours_invoice">Total Hours Invoice</option>
                                 </select>
                            </div>

                            <div class="col-md-2 m-2">
                                <a href="#">Insert</a>
                            </div>

                            <div class="col-md-12 m-2">
                                <label for="">Email Body</label>
                                <textarea name="invoice_email_body" id="invoice_email_body" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                          </div>
          
          
                          <div class="col-md-12 m-2">
                              <label for="">Placeholder</label>
                              <select name="email_body_placeholder" id="email_body_placeholder" class="form-control">
                                      <option value="debator_name">Debator Name</option>
                                      <option value="debator_amount_due">Amount Due( Debator )</option>
                                      <option value="invoice_amount_due">Amount Due( Invoice )</option>
                                      <option value="matter_amount_due">Amount Due ( Matter )</option>
                                      <option value="amount_past_due">Amount Past Due</option>
                                      <option value="invoice_due_date">Invoice Due Date</option>
                                      <option value="total_hours_invoice">Total Hours Invoice</option>
                              </select>
                          </div>

                          <div class="col-md-2 m-2">
                            <a href="#">Insert</a>
                        </div>

                        <div class="col-md-12 m-2">
                            <label for="">Notes</label>
                            <textarea name="notes" id="notes" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                        </div>

                        <!-- checkboxes -->
                        <div class="col-md-12 mt-2 d-flex">
                            <div class="col-md-1">
                                <label class="switch">
                                    <input type="checkbox" name="send_copy_of_email_to_user">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-md-9">
                                <p>&nbsp; &nbsp; Show an account summary on the invoice</p>
                            </div>
                        </div>
            
                        <div class="col-md-12 mt-2 d-flex">
                            <div class="col-md-1">
                                <label class="switch">
                                    <input type="checkbox" name="attach_invoice_to_email">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-md-9">
                                <p>&nbsp; &nbsp; Send a Copy of the Email to the User</p>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2 d-flex">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>

                        <div class="col-md-6 m-1">
                           <div class="col-md-12" style="height: 350px;"></div>
                           <div class="col-md-12">
                            <embed src="{{ asset('documents/sample_pdf.pdf') }}" type="application/pdf" width="100%" height="600px" />
                           </div>
                        </div>
                  </div>
           </form>


           <!-- evergreen retainers -->
           <form action="#" id="evergreen_retainer" style="display: none;">
            <div class="row m-2" >
                <div class="col-md-12 m-2">
                      <label for="">Email Subject</label>
                      <input type="text" name="email_subject" id="email_subject" class="form-control" placeholder="Email Subject">
                </div>

                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="subject_placeholder" id="subject_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>

                <div class="col-md-12 m-2">
                      <label for="">Email Body</label>
                      <textarea name="ever_green_email_body" id="ever_green_email_body" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                </div>


                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="email_body_placeholder" id="email_body_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>


                <!-- checkboxes -->
                <div class="col-md-12 mt-2 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            <input type="checkbox" name="send_copy_of_email_to_user">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <p>Send a copy of the email to the user</p>
                    </div>
                </div>

                <div class="col-md-12 mt-2 d-flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
           </form>


           <!-- evergreen retainers -->
           <form action="#" id="deposit_request" style="display: none;">
            <div class="row m-2" >
                <div class="col-md-12 m-2">
                      <label for="">Email Subject</label>
                      <input type="text" name="email_subject" id="email_subject" class="form-control" placeholder="Email Subject">
                </div>

                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="subject_placeholder" id="subject_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>

                <div class="col-md-12 m-2">
                      <label for="">Email Body</label>
                      <textarea name="deposit_email_body" id="deposit_email_body" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                </div>


                <div class="col-md-8 m-2">
                    <label for="">Placeholder</label>
                    <select name="email_body_placeholder" id="email_body_placeholder" class="form-control">
                            <option value="debator_name">Debator Name</option>
                            <option value="debator_amount_due">Amount Due( Debator )</option>
                            <option value="invoice_amount_due">Amount Due( Invoice )</option>
                            <option value="matter_amount_due">Amount Due ( Matter )</option>
                            <option value="amount_past_due">Amount Past Due</option>
                            <option value="invoice_due_date">Invoice Due Date</option>
                            <option value="total_hours_invoice">Total Hours Invoice</option>
                    </select>
                </div>

                <div class="col-md-3 mt-4 p-3">
                    <a href="#" class="btn btn-primary">Insert</a>
                </div>


                <!-- checkboxes -->
                <div class="col-md-12 mt-2 d-flex">
                    <div class="col-md-1">
                        <label class="switch">
                            <input type="checkbox" name="send_copy_of_email_to_user">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <p>Send a copy of the email to the user</p>
                    </div>
                </div>

                <div class="col-md-12 mt-2 d-flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
           </form>

    </div>
</div>

<script>
    window.onload = function() {
        CKEDITOR.replace('inv_email_body');
    };
</script>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/email_template.js') }}"></script>
<x-firmFooter />