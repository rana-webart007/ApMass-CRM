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
    if(type == "latter-head-1"){
        document.getElementById('latter_head_1').style.border  = "2px solid blue";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-2"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "2px solid blue";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-3"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "2px solid blue";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-4"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "2px solid blue";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-5"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "2px solid blue";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-6"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "2px solid blue";
        document.getElementById('latter_head_7').style.border  = "";
    }

    if(type == "latter-head-7"){
        document.getElementById('latter_head_1').style.border  = "";
        document.getElementById('latter_head_2').style.border  = "";
        document.getElementById('latter_head_3').style.border  = "";
        document.getElementById('latter_head_4').style.border  = "";
        document.getElementById('latter_head_5').style.border  = "";
        document.getElementById('latter_head_6').style.border  = "";
        document.getElementById('latter_head_7').style.border  = "2px solid blue";
    }

    document.getElementById('letter_head_selected').value = type;
}

/**
 * trying to add logo in pdf
*/

function addLogoInPdf(){
    let slected_files = document.getElementById('logo');
    let files = slected_files.files[0];

    if(files){
        console.log(files);
    }
    else{
        custom_warning("Plese Select A Logo First");
    }
}