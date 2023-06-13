<x-firmHeader />
<div class="main-panel matterinside">
    <div class="content-wrapper">
          
        <!-- einvoice settings -->
        <form action="#">
          <div class="row mt-3 ml-2">
               <div class="col-md-12">
                     <h3><b> eInvoice Settings </b></h3>
               </div>
               <div class="col-md-12 mt-2 d-flex">
                <div class="col-md-1">
                    <label class="switch">
                        <input type="checkbox" name="attach_invoice_to_email" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-md-6">
                    <p>Enable eInvoices</p>
                </div>
               </div>

               <div class="col-md-12 mt-2 d-flex">
                    <h4>eInvoice Line Items</h4>
               </div>
               <div class="col-md-12 mt-2 d-flex">
                    <input type="radio" name="einvoice_items" id="" class="form-selector" value="Group by Staff"> &nbsp; Group by Staff &nbsp;
                    <input type="radio" name="einvoice_items" id="" class="form-selector" value="Display as List"> &nbsp; Display as List
               </div>

               <div class="col-md-12 mt-3 ml-2">
                    <button type="submit" class="btn btn-primary">Save</button>
               </div>

          </div>
        </form>

        <!-- template setting -->

        <div style="margin-top: 35px;">
              <div class="row m-2">
                <div class="col-md-6">
                <form action="#">
                         <div class="col-md-12">
                              <h4>Template Settings</h4>
                         </div>
                         <div class="col-md-12">
                            <p>Any changes made now will not affect any existing invoices.</p>
                         </div>

                         <div class="col-md-12">
                             <select name="template_name" id="template_name" class="form-control">
                                  <option value="Firm Default">Firm Default</option>
                                  <option value="Template Name">Template Name</option>
                             </select>
                    </form>
                 </div>


                    <!-- Tabs -->
                    <div class="row mt-3">
                    <div class="col-md-12 m-2">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item buttonCS" role="presentation">
                                <button class="nav-link mr-1" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Basic &nbsp; &nbsp;</button>
                            </li>
                            <li class="nav-item buttonCS" role="presentation">
                                <button class="nav-link mr-1" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">PDF Invoices &nbsp; &nbsp;
                                </button>
                            </li>
                        </ul>
                    </div>     
                    </div>
                   <!-- -->

                   <!-- basic tabs --->
                   <div class="row mr-3" id="basic">
                    <form action="#">
                        <div class="col-md-12 m-1">
                            <label for="">Your Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                            <label for="">PNG, JPEG and GIF format(s) supported, up to 3MB and dimensions over 300 * 300.</label>
                        </div>
                    </form>
                   </div>

                    </div>
                    <div class="col-md-6">
                        <embed src="{{ asset('documents/sample_pdf.pdf') }}" type="application/pdf" width="100%" height="600px" />
                    </div>
              </div>
            </div>

    </div>
</div>
<x-firmFooter />