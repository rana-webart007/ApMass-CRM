<x-firmHeader />
<style>
   .latter_head{
    height: 150px; 
    width: 125px;
   }
</style>

<div class="main-panel matterinside">
    <div class="content-wrapper">

        @extends('commons.session-toaster-msg')
          
        <!-- einvoice settings -->
        <form action="{{ route('client.firm.invoice.setting') }}" method="post">
            @csrf

          <div class="row mt-3 ml-2">
               <div class="col-md-12">
                     <h3><b> eInvoice Settings </b></h3>
               </div>
               <div class="col-md-12 mt-2 d-flex">
                <div class="col-md-1">
                    <label class="switch">
                        @if($invoice == null)
                          <input type="checkbox" name="enable_invoice" checked>
                        @else
                        @if($invoice->einvoice_settings == "activate")
                          <input type="checkbox" name="enable_invoice" checked>
                        @else
                          <input type="checkbox" name="enable_invoice">
                        @endif
                        @endif
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
               <div class="col-md-12 mt-2 d-flex p-2 ml-3">
                    <input type="radio" name="einvoice_items" id="" class="form-selector" value="Group by Staff" checked> &nbsp; Group by Staff &nbsp;
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
                <form action="{{ route('client.firm.invoice.template.setting') }}" method="post">
                    @csrf

                         <div class="col-md-12">
                              <h4>Template Settings</h4>
                         </div>
                         <div class="col-md-12">
                            <p>Any changes made now will not affect any existing invoices.</p>
                         </div>

                         <div class="col-md-12">
                             <select name="template_name" onchange="customTemplate()" id="template_name"  class="form-control">
                                  <option value="Firm Default">Firm Default</option>
                                  <option value="Template Name">Template Name</option>
                             </select>
                         

                        <div id="template_add" style="display: none;">
                            <div class="col-md-12 mt-2">
                                <input type="text" name="add_template_name" id="add_template_name" class="form-control">
                            </div>

                            @if ($errors->has('add_template_name'))
                                <span
                                    class="text-danger">{{ $errors->first('add_template_name') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12 m-2">
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                 </div>


                    <!-- Tabs -->
                    <div class="row mt-3">
                    <div class="col-md-12 m-2">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item buttonCS" role="presentation">
                                <button class="nav-link mr-1" id="home-tab" active onclick="showForms('basic')" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Basic &nbsp; &nbsp;</button>
                            </li>
                            <li class="nav-item buttonCS" role="presentation">
                                <button class="nav-link mr-1" id="home-tab" onclick="showForms('pdf-invoices')" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">PDF Invoices &nbsp; &nbsp;
                                </button>
                            </li>
                        </ul>
                    </div>     
                    </div>
                   <!-- -->

                   <!-- basic tabs --->
                   <div class="row mr-3" id="basic" style="display: block;">
                    <form action="{{ route('client.firm.invoice.basic.pdf.settings') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12 m-1">
                            <label for="">Your Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">

                            @if ($errors->has('logo'))
                                <span
                                    class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12 m-1">
                            <a href="#" class="btn btn-primary btn-sm mt-1">Replace</a>
                            <a href="#" class="btn btn-dark btn-sm mt-1">Delete</a>
                            <label for="">PNG, JPEG and GIF format(s) supported, up to 3MB and dimensions over 300 * 300.</label>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Firm Name font</label>
                            <select name="firm_name_font" id="firm_name_font" class="form-control">
                                    <option value="Arvo">Arvo</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Merriweather">Merriweather</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Salbo">Salbo</option>
                            </select>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Firm Name font size</label>
                            <select name="firm_name_font_size" id="firm_name_font_size" class="form-control">
                                    <option value="8pt">8pt</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Merriweather">Merriweather</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Salbo">Salbo</option>
                            </select>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Heading Font</label>
                            <select name="heading_font" id="heading_font" class="form-control">
                                    <option value="8pt">8pt</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Merriweather">Merriweather</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Salbo">Salbo</option>
                            </select>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Body Font</label>
                            <select name="body_font" id="body_font" class="form-control">
                                    <option value="8pt">8pt</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Merriweather">Merriweather</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Salbo">Salbo</option>
                            </select>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Firm Details</label>
                            @if($invoice == null)
                            <textarea name="firm_details" id="firm_details" cols="30" rows="10" class="form-control ck_editor_txt"></textarea>
                            @else
                            <textarea name="firm_details" id="firm_details" cols="30" rows="10" class="form-control ck_editor_txt">{!! $invoice->firm_details !!}</textarea>
                            @endif
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Letterhead layout</label>
                        </div>

                        <div class="col-md-3 mt-1 ml-1 d-flex">
                            @if($invoice == null)
                            <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1"></a>
                            <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2"></a>
                            <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3"></a>
                            <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4"></a>
                            @else
                              @if($invoice->letterhead_layout == "latter-head-1")
                              <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1" style="border: 2px solid blue;"></a>
                              <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2"></a>
                              <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3"></a>
                              <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4"></a>
                              @elseif($invoice->letterhead_layout == "latter-head-2")
                              <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1"></a>
                              <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2" style="border: 2px solid blue;"></a>
                              <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3"></a>
                              <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4"></a>
                              @elseif($invoice->letterhead_layout == "latter-head-3")
                              <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1"></a>
                              <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2"></a>
                              <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3" style="border: 2px solid blue;"></a>
                              <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4"></a>
                              @elseif($invoice->letterhead_layout == "latter-head-4")
                              <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1"></a>
                              <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2"></a>
                              <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3"></a>
                              <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4" style="border: 2px solid blue;"></a>
                              @else
                                <a onclick="showLetterHead('latter-head-1')"><img src="{{ asset('documents/layout-1.svg') }}" class="latter_head" id="latter_head_1"></a>
                                <a onclick="showLetterHead('latter-head-2')"><img src="{{ asset('documents/layout-2.svg') }}" class="latter_head" id="latter_head_2"></a>
                                <a onclick="showLetterHead('latter-head-3')"><img src="{{ asset('documents/layout-3.svg') }}" class="latter_head" id="latter_head_3"></a>
                                <a onclick="showLetterHead('latter-head-4')"><img src="{{ asset('documents/layout-4.svg') }}" class="latter_head" id="latter_head_4"></a>
                            @endif
                            @endif
                        </div>

                        <div class="col-md-3 mt-1 ml-1 d-flex">
                            @if($invoice == null)
                            <a onclick="showLetterHead('latter-head-5')"><img src="{{ asset('documents/layout-5.svg') }}" class="latter_head" id="latter_head_5"></a>
                            <a onclick="showLetterHead('latter-head-6')"><img src="{{ asset('documents/layout-6.svg') }}" class="latter_head" id="latter_head_6"></a>
                            <a onclick="showLetterHead('latter-head-7')"><img src="{{ asset('documents/layout-7.svg') }}" class="latter_head" id="latter_head_7"></a>
                            @else
                            @if($invoice->letterhead_layout == "latter-head-5")
                            <a onclick="showLetterHead('latter-head-5')"><img src="{{ asset('documents/layout-5.svg') }}" class="latter_head" id="latter_head_5" style="border: 2px solid blue;"></a>
                            <a onclick="showLetterHead('latter-head-6')"><img src="{{ asset('documents/layout-6.svg') }}" class="latter_head" id="latter_head_6"></a>
                            <a onclick="showLetterHead('latter-head-7')"><img src="{{ asset('documents/layout-7.svg') }}" class="latter_head" id="latter_head_7"></a>
                            @elseif($invoice->letterhead_layout == "latter-head-6")
                            <a onclick="showLetterHead('latter-head-5')"><img src="{{ asset('documents/layout-5.svg') }}" class="latter_head" id="latter_head_5"></a>
                            <a onclick="showLetterHead('latter-head-6')"><img src="{{ asset('documents/layout-6.svg') }}" class="latter_head" id="latter_head_6" style="border: 2px solid blue;"></a>
                            <a onclick="showLetterHead('latter-head-7')"><img src="{{ asset('documents/layout-7.svg') }}" class="latter_head" id="latter_head_7"></a>
                            @elseif($invoice->letterhead_layout == "latter-head-7")
                            <a onclick="showLetterHead('latter-head-5')"><img src="{{ asset('documents/layout-5.svg') }}" class="latter_head" id="latter_head_5"></a>
                            <a onclick="showLetterHead('latter-head-6')"><img src="{{ asset('documents/layout-6.svg') }}" class="latter_head" id="latter_head_6"></a>
                            <a onclick="showLetterHead('latter-head-7')"><img src="{{ asset('documents/layout-7.svg') }}" class="latter_head" id="latter_head_7" style="border: 2px solid blue;"></a>
                            @else
                            <a onclick="showLetterHead('latter-head-5')"><img src="{{ asset('documents/layout-5.svg') }}" class="latter_head" id="latter_head_5"></a>
                            <a onclick="showLetterHead('latter-head-6')"><img src="{{ asset('documents/layout-6.svg') }}" class="latter_head" id="latter_head_6"></a>
                            <a onclick="showLetterHead('latter-head-7')"><img src="{{ asset('documents/layout-7.svg') }}" class="latter_head" id="latter_head_7"></a>
                            @endif
                            @endif
                        </div>

                        <div class="col-md-12 mt-2 ml-1 d-flex">
                            @if($invoice == null)
                            <input type="text" name="letter_head_selected" id="letter_head_selected" style="display: none;" class="form-control">
                            @else
                            <input type="text" name="letter_head_selected" id="letter_head_selected" value="{{ $invoice->letterhead_layout }}" style="display: none;" class="form-control">
                            @endif
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                              <label for="">Page margin</label>
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                              <label for="">Top (in inch)</label>
                              @if($invoice == null)
                              <input type="number" name="top_margin" id="top_margin" value="1" class="form-control">
                              @else
                              <input type="number" name="top_margin" id="top_margin" value="{{ $invoice->page_top_margin }}" class="form-control">
                              @endif
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Bottom (in inch)</label>
                            @if($invoice == null)
                            <input type="number" name="bottom_margin" id="bottom_margin" value="1" class="form-control">
                            @else
                            <input type="number" name="bottom_margin" id="bottom_margin" value="{{ $invoice->page_bottom_margin }}" class="form-control">
                            @endif
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Left (in inch)</label>
                            @if($invoice == null)
                            <input type="number" name="left_margin" id="left_margin" value="1" class="form-control">
                            @else
                            <input type="number" name="left_margin" id="left_margin" value="{{ $invoice->page_left_margin }}" class="form-control">
                            @endif
                        </div>

                        <div class="col-md-12 ml-1 mt-2">
                            <label for="">Right (in inch)</label>
                            @if($invoice == null)
                            <input type="number" name="right_margin" id="right_margin" value="1" class="form-control">
                            @else
                            <input type="number" name="right_margin" id="right_margin" value="{{ $invoice->page_right_margin }}" class="form-control">
                            @endif
                        </div>

                        <div class="col-md-12 mt-2 d-flex">
                            <h4>Grid styles</h4>
                       </div>
                       <div class="col-md-12 mt-2 d-flex p-2 ml-3">
                        @if($invoice == null)
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Modern"> &nbsp; Modern &nbsp;
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Classic"> &nbsp; Classic &nbsp;
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Stripes"> &nbsp; Stripes
                        @else
                          @if($invoice->grid_style == "Modern")
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Modern" checked> &nbsp; Modern &nbsp;
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Classic"> &nbsp; Classic &nbsp;
                            <input type="radio" name="grid_style" id="" class="form-selector" value="Stripes"> &nbsp; Stripes
                          @elseif($invoice->grid_style == "Classic")
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Modern"> &nbsp; Modern &nbsp;
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Classic" checked> &nbsp; Classic &nbsp;
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Stripes"> &nbsp; Stripes
                          @else
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Modern"> &nbsp; Modern &nbsp;
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Classic"> &nbsp; Classic &nbsp;
                          <input type="radio" name="grid_style" id="" class="form-selector" value="Stripes" checked> &nbsp; Stripes
                          @endif
                        @endif
                       </div>
        
                       <div class="col-md-12 mt-3 ml-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                        
                    </form>
                   </div>

                   <!-- pdf invoice div -->
                   <div class="row mr-3" id="pdf-invoice" style="display: none;">
                        <form action="{{ route('client.firm.pdf.invoice') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12 m-2">
                                <label for="">Payments</label>
                            </div>

                            <div class="col-md-12 m-2">
                                <label>Payments due</label>
                                @if($invoice == null)
                                <input type="number" name="payment_due" id="payment_due" value="1" class="form-control"> 
                                @else
                                <input type="number" name="payment_due" id="payment_due" value="{{ $invoice->payment_due }}" class="form-control">     
                                @endif
                                <label>days after invoice date</label>
                            </div>

                            <div class="col-md-12 mt-2 d-flex">
                                <h4>Invoice Title</h4>
                           </div>
                           <div class="col-md-12 mt-2 d-flex p-2 ml-3">
                            @if($invoice == null)
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="None" checked> &nbsp; None &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('custom')" id="custom_invoice_title" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                            @else
                            @if($invoice->invoice_title == "None")
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="None" checked> &nbsp; None &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('custom')" id="custom_invoice_title" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                            @elseif($invoice->invoice_title == "Matter Title")
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Title" checked> &nbsp; Matter Title &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('custom')" id="custom_invoice_title" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                            @elseif($invoice->invoice_title == "Matter Description")
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Description" checked> &nbsp; Matter Description &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('custom')" id="custom_invoice_title" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                            @elseif($invoice->invoice_title == "Custom")
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                <input type="radio" name="invoice_title" onclick="customInvoiceTitleShow('custom')" id="custom_invoice_title" class="form-selector" value="Custom" checked> &nbsp; Custom &nbsp;
                            @endif
                            @endif
                           </div>

                           <!-- custom title -->
                           <div class="col-md-12 m-2" id="incoice_custom_title_div" style="display: none;">
                                <input type="text" name="incoice_custom_title" id="incoice_custom_title" class="form-control">
                           </div>

                           <div class="col-md-12 mt-2 d-flex">
                            <h4>Invoice Sub Title</h4>
                            </div>
                            <div class="col-md-12 mt-2 d-flex p-2 ml-3">
                                @if($invoice == null)
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="None" checked> &nbsp; None &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('custom')" id="" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                                @else
                                @if($invoice->invoice_sub_title == "None")
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="None" checked> &nbsp; None &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('custom')" id="" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                                @elseif($invoice->invoice_sub_title == "Matter Title")
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Title" checked> &nbsp; Matter Title &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('custom')" id="" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                                @elseif($invoice->invoice_sub_title == "Matter Description")
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Description" checked> &nbsp; Matter Description &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('custom')" id="" class="form-selector" value="Custom"> &nbsp; Custom &nbsp;
                                @elseif($invoice->invoice_sub_title == "Custom")
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="None"> &nbsp; None &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Title"> &nbsp; Matter Title &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('none')" id="" class="form-selector" value="Matter Description"> &nbsp; Matter Description &nbsp;
                                    <input type="radio" name="invoice_sub_title" onclick="customInvoiceSubTitleShow('custom')" id="" class="form-selector" value="Custom" checked> &nbsp; Custom &nbsp;
                                @endif
                                @endif
                            </div>

                            <!-- custom sub title -->
                           <div class="col-md-12 m-2" id="invoice_custom_sub_title_div" style="display: none;">
                            <input type="text" name="incoice_custom_sub_title" id="incoice_custom_sub_title" class="form-control">
                           </div>

                           <div class="col-md-12 mt-2 d-flex">
                            <h4>Time & Fees</h4>
                           </div>

                           <div class="col-md-12 m-2">
                               <input type="radio" name="time_and_fees" onclick="displayTimeSingleLineSummary('null');" id="" class="form-selector" value="List all entries on invoice" checked> &nbsp; List all entries on invoice &nbsp;
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="radio" name="time_and_fees" id="" onclick="displayTimeSingleLineSummary('summary');" class="form-selector" value="Use a single line summary" > &nbsp; Use a single line summary &nbsp;
                           </div>

                           <!-- single line summary -->
                           <div id="time_single_line_summary_div" style="display: none;">
                           <div class="col-md-12 m-2" >
                                    <label for="">Description for the summary line</label>
                                    <textarea name="time_single_line_description" id="time_single_line_description" class="form-control" cols="30" rows="10"></textarea>
                           </div>
                           <div class="col-md-12 m-2">
                                    <input type="checkbox" name="time_append_list_of_time" id="time_append_list_of_time" value="Append a list of time & fee entries to the invoice"> &nbsp; Append a list of time & fee entries to the invoice
                           </div>
                           </div>
                           <hr>
                           <!-- -->

                           <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_staff_initials" id="show_staff_initials" value="Show staff initials on time & fee entries"> &nbsp; Show staff initials on time & fee entries
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_rates" id="show_rates" value="Show Rate"> &nbsp; Show Rate
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_hours" id="show_hours" value="Show Hours"> &nbsp; Show Hours
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_hours_summary" id="show_hours_summary" value="Show Hours Summary"> &nbsp; Show Hours Summary
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_fee_total" id="show_fee_total" value="Show Fee Total"> &nbsp; Show Fee Total
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_fee_total_summary" id="show_fee_total_summary" value="Show Fee Total Summary"> &nbsp; Show Fee Total Summary
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_evergreen_retainer" id="show_evergreen_retainer" value="Show Evergreen Retainer Request"> &nbsp; Show Evergreen Retainer Request
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="checkbox" name="show_due_date" id="show_due_date" value="Show Due Date"> &nbsp; Show Due Date
                           </div>

                           <!-- ecpenses -->
                           <div class="col-md-12 mt-2 d-flex">
                            <h4>Expenses</h4>
                           </div>

                           <div class="col-md-12 m-2">
                               <input type="radio" name="expenses" id="" onclick="displayExpensesSingleLineSummary('null')" class="form-selector" value="List all entries on invoice" checked> &nbsp; List all entries on invoice &nbsp;
                           </div>

                           <div class="col-md-12 m-2">
                            <input type="radio" name="expenses" id="" onclick="displayExpensesSingleLineSummary('expenses')" class="form-selector" value="Use a single line summary" > &nbsp; Use a single line summary &nbsp;
                           </div>


                            <!-- single line summary -->
                            <div id="expenses_single_line_summary_div" style="display: none;">
                            <div class="col-md-12 m-2" >
                                    <label for="">Description for the summary line</label>
                                    <textarea name="expenses_single_line_description" id="expenses_single_line_description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-md-12 m-2">
                                    <input type="checkbox" name="expenses_append_list_of_time" id="expenses_append_list_of_time" value="Append a list of time & fee entries to the invoice"> &nbsp; Append a list of time & fee entries to the invoice
                            </div>
                            </div>
                            <hr>

                            <!-- interest -->
                            <div class="col-md-12 m-2">
                                 <label for="">Interest</label>
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="radio" name="interest" id="interest" onclick="showInterestCustomText('none')" class="form-selector" value="None" checked> &nbsp; None &nbsp;
                                <input type="radio" name="interest" id="interest" onclick="showInterestCustomText('custom')" class="form-selector" value="Custom Text" > &nbsp; Custom Text &nbsp;
                            </div>
 
                            <!-- interest custom text -->
                            <div class="col-md-12 m-2" id="interest_custom_text_div" style="display: none;">
                                   <input type="text" name="interest_custom_text" id="interest_custom_text" class="form-control"> 
                            </div>

                            <!-- surcharge -->
                            <div class="col-md-12 m-2">
                                  <label for="">Surcharge</label>
                            </div>

                            <div class="col-md-12 m-2">
                                  <select name="surcharge_type" id="surcharge_type" onchange="showSurcharge();" class="form-control">
                                         <option value="None">None</option>
                                         <option value="In %">In %</option>
                                         <option value="In $">In $</option>
                                  </select>
                            </div>

                            <!-- surcharge custom -->
                            <div id="surcharge_custom" style="display: none;">
                            <div class="col-md-12 m-2">
                                  <label for="">Apply To</label>
                                  <select name="surcharge_apply_to" id="surcharge_apply_to" class="form-control">
                                          <option value="Time & Fees Only">Time & Fees Only</option>
                                          <option value="Time & Fees and Expenses">Time & Fees and Expenses</option>
                                  </select>
                            </div>
                            <div class="col-md-12 m-2">
                                <label for="">Label on invoice</label>
                                <input type="text" name="surcharge_label_invoice" id="surcharge_label_invoice" class="form-control">
                            </div>
                            </div>

                            <!-- -->
                            <div id="single_line_summary_div">
                                <div class="col-md-12 m-2" >
                                        <label for="">Non-billables</label>
                                </div>
                                <div class="col-md-12 m-2">
                                        <input type="checkbox" name="non_billable_items" id="non_billable_items" value="Include non-billable items on invoice"> &nbsp; Include non-billable items on invoice
                                </div>
                                </div>
                            <hr>

                            <div class="col-md-12 m-2">
                                 <label for="">Notes</label>
                                 <textarea name="notes" id="notes" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <!-- Signature Image -->
                            <div class="col-md-12 m-1">
                                <label for="">Signature Image</label>
                                <input type="file" name="sig_img" id="sig_img" class="form-control">
                            </div>
    
                            <div class="col-md-12 m-1">
                                <a href="#" class="btn btn-primary btn-sm mt-1">Upload</a>
                                <a href="#" class="btn btn-dark btn-sm mt-1">Delete</a>
                                <label for="">PNG and JPEG format(s) supported, up to 3MB.</label>
                            </div>

                            <!-- signature name -->
                            <div class="col-md-12 m-2">
                                  <label for="">Signature Name</label>
                                  <input type="text" name="signature_name" id="signature_name" class="form-control">
                            </div>

                            <!-- Display Options -->
                            <div class="col-md-12 m-2">
                                  <label for="">Display Options</label>
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_prior_balance" id="show_prior_balance"> &nbsp; Show Prior Balances
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_payment_summary" id="show_payment_summary"> &nbsp; Show Payment Summary
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_invoice_summary" id="show_invoice_summary"> &nbsp; Show Invoice Summary
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_personal_fee_summary" id="show_personal_fee_summary"> &nbsp; Show Professional Fee Summary
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_account_summary" id="show_account_summary"> &nbsp; Show Account Summary
                            </div>

                            <div class="col-md-12 m-2">
                                <input type="checkbox" name="show_description_entries" id="show_description_entries"> &nbsp; Show description for entries
                            </div>
    
                            <div class="col-md-12 mt-5 ml-2">
                                  <input type="submit" value="Save" class="btn btn-primary">
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

<script>
    window.onload = function() {
        CKEDITOR.replace('firm_details');
    };
</script>

<!-- dropdown dependency -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('custom_js/client/firm/invoice.js') }}"></script>
<x-firmFooter />