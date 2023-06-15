/**
 * show basic & pdf-invoice form
*/

function showForms(type){
    if(type == "basic"){
          document.getElementById('basic').style.display = "block";
          document.getElementById('pdf-invoice').style.display = "none";
    }
    if(type == "pdf-invoices"){
        document.getElementById('basic').style.display = "none";
        document.getElementById('pdf-invoice').style.display = "block";
    }
}

/**
 * custom template
*/

function customTemplate(){
    let template_name = document.getElementById('template_name').value;
    
    if(template_name == "Firm Default"){
        document.getElementById('template_add').style.display = "none";
    }
    else{
        document.getElementById('template_add').style.display = "block";
    }
}

/**
 * Show Custom Invoice Title
*/

function customInvoiceTitleShow(type){
    if(type == "custom"){
            document.getElementById('incoice_custom_title_div').style.display = "block";
    }
    else{
            document.getElementById('incoice_custom_title_div').style.display = "none";
    }
}

/**
 * Show Custom Invoice Sub Title
*/

function customInvoiceSubTitleShow(type){
    if(type == "custom"){
            document.getElementById('invoice_custom_sub_title_div').style.display = "block";
    }
    else{
            document.getElementById('invoice_custom_sub_title_div').style.display = "none";
    }
}

/**
 * Display Time Summary
*/

function displayTimeSingleLineSummary(type){
     if(type == "summary"){
        document.getElementById('time_single_line_summary_div').style.display = "block";
     }
     else{
        document.getElementById('time_single_line_summary_div').style.display = "none";
     }
}

/**
 * Due Date single line summary
*/

function displayExpensesSingleLineSummary(type){
     if(type == "expenses"){
        document.getElementById('expenses_single_line_summary_div').style.display = "block";
     }
     else{
        document.getElementById('expenses_single_line_summary_div').style.display = "none";
     }
}

/**
 * Interest Custom Text
*/

function showInterestCustomText(type){
      if(type == "custom"){
        document.getElementById('interest_custom_text_div').style.display = "block";
      }
      else{
        document.getElementById('interest_custom_text_div').style.display = "none";
      }
}

/**
 *  surcharge
*/

function showSurcharge(){
       let surcharge_type = document.getElementById('surcharge_type').value;

       if(surcharge_type == "None"){
             document.getElementById('surcharge_custom').style.display = "none";
       }
       else{
             document.getElementById('surcharge_custom').style.display = "block";
       }
}

/**
 *  Letter head show
*/

function showLetterHead(type){
    document.getElementById('letter_head_selected').value = type;
}