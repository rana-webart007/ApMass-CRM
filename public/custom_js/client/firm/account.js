/**
 * display tabs
*/

function show(type){
  if(type == "trust-account"){
    document.getElementById('trust_account_setting').style.display = "block";
    document.getElementById('trust_operating_check').style.display = "none";
    document.getElementById('ever_green_retainer').style.display = "none";
    document.getElementById('trust_transaction_number').style.display = "none";
    document.getElementById('finalize_payment').style.display = "none";
  }
  if(type == 'operating-check'){
    document.getElementById('trust_account_setting').style.display = "none";
    document.getElementById('trust_operating_check').style.display = "block";
    document.getElementById('ever_green_retainer').style.display = "none";
    document.getElementById('trust_transaction_number').style.display = "none";
    document.getElementById('finalize_payment').style.display = "none";
  }
  if(type == "evergreen-retainer"){
    document.getElementById('trust_account_setting').style.display = "none";
    document.getElementById('trust_operating_check').style.display = "none";
    document.getElementById('ever_green_retainer').style.display = "block";
    document.getElementById('trust_transaction_number').style.display = "none";
    document.getElementById('finalize_payment').style.display = "none";
  }
  if(type == "trust-transaction-number"){
    document.getElementById('trust_account_setting').style.display = "none";
    document.getElementById('trust_operating_check').style.display = "none";
    document.getElementById('ever_green_retainer').style.display = "none";
    document.getElementById('trust_transaction_number').style.display = "block";
    document.getElementById('finalize_payment').style.display = "none";
  }
  if(type == "finalize-with-pay"){
    document.getElementById('trust_account_setting').style.display = "none";
    document.getElementById('trust_operating_check').style.display = "none";
    document.getElementById('ever_green_retainer').style.display = "none";
    document.getElementById('trust_transaction_number').style.display = "none";
    document.getElementById('finalize_payment').style.display = "block";
  }
}

/**
 * display trust account form
*/

function add_trust_account(){
    document.getElementById('trust_account_table').style.display = "none";
    document.getElementById('closed_account_table').style.display = "none";
    document.getElementById('default_payment').style.display = "none";
    document.getElementById('trust-account-form').style.display = "block";
}

/**
 * cancel trust account form 
*/

function cancel_account(){
    document.getElementById('trust_account_table').style.display = "block";
    document.getElementById('closed_account_table').style.display = "none";
    document.getElementById('default_payment').style.display = "block";
    document.getElementById('trust-account-form').style.display = "none";
}

/**
 * display closed account
*/

function show_closed_account(){
    let data = document.getElementById('is_closed_account');

    if(data.checked == true){
        document.getElementById('trust_account_table').style.display = "none";
        document.getElementById('closed_account_table').style.display = "block";
        document.getElementById('trust-account-form').style.display = "none";
        document.getElementById('default_payment').style.display = "none";
    }
    else{
        document.getElementById('trust_account_table').style.display = "block";
        document.getElementById('closed_account_table').style.display = "none";
        document.getElementById('trust-account-form').style.display = "none";
        document.getElementById('default_payment').style.display = "block";
    }
}

/**
 * Activate Trust check  
*/

function activate_trust_check(){
    let data = document.getElementById('trust_check_print');

    if(data.checked == true){
        document.getElementById('trust_check_style').disabled = false;
        document.getElementById('trust_check_style').style.cursor = "default";
        document.getElementById('trust_printing_method').disabled = false;
        document.getElementById('trust_printing_method').style.cursor = "default";
    }else{
        document.getElementById('trust_check_style').disabled = true;
        document.getElementById('trust_check_style').style.cursor = "no-drop";
        document.getElementById('trust_printing_method').disabled = true;
        document.getElementById('trust_printing_method').style.cursor = "no-drop";
    }
}

/**
 *  activate operating check
*/

function activate_operating_check(){
    let data = document.getElementById('operating_check_print');

    if(data.checked == true){
        document.getElementById('vendor_address_on_check').disabled = false;
        document.getElementById('vendor_address_on_check').style.cursor = "default";
        document.getElementById('operating_check_style').disabled = false;
        document.getElementById('operating_check_style').style.cursor = "default";
        document.getElementById('operating_printing_method').disabled = false;
        document.getElementById('operating_printing_method').style.cursor = "default";
    }else{
        document.getElementById('vendor_address_on_check').disabled = true;
        document.getElementById('vendor_address_on_check').style.cursor = "no-drop";
        document.getElementById('operating_check_style').disabled = true;
        document.getElementById('operating_check_style').style.cursor = "no-drop";
        document.getElementById('operating_printing_method').disabled = true;
        document.getElementById('operating_printing_method').style.cursor = "no-drop";
    }
}

/**
 * activate ever green retainer
*/

function ever_green_retainer(){
    let data = document.getElementById('activate_ever_green_retainer');

    if(data.checked == true){
        document.getElementById('minimum_threshold').disabled = false;
        document.getElementById('minimum_threshold').style.cursor = "default";
        document.getElementById('replenish_upto').disabled = false;
        document.getElementById('replenish_upto').style.cursor = "default";
    }else{
        document.getElementById('minimum_threshold').disabled = true;
        document.getElementById('minimum_threshold').style.cursor = "no-drop";
        document.getElementById('replenish_upto').disabled = true;
        document.getElementById('replenish_upto').style.cursor = "no-drop";
    }
}

/**
 *  For preference
*/

function third_pref(){
    let pref = document.getElementById('second_preference').value;
    
    if(pref == "Operating"){
           document.getElementById('third_preference').value = "Trust";
    }
    else{
           document.getElementById('third_preference').value = "Operating";
    } 
}