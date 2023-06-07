/**
 * open custom time field
*/

function time_entry(){
    let data = document.getElementById('time_entries').value;

    if(data != "Select"){
         if(data != "custom"){
             document.getElementById('custom_time_div').style.display = "none";
         }else{
            document.getElementById('custom_time_div').style.display = "block";
         }

         document.getElementById('billing_unit_btn').disabled = false;
         document.getElementById('billing_unit_btn').style.cursor = 'default';
    }else{
        document.getElementById('custom_time_div').style.display = "none";
        document.getElementById('billing_unit_btn').disabled = true;
        document.getElementById('billing_unit_btn').style.cursor = 'no-drop';
        warning_alert();
    }
}

/**
 * check custom field empty or not 
*/

function check_custom_field(){
    let data = document.getElementById('time_entries').value;

    if(data == "custom"){
        let time = document.getElementById('custom_time').value;
        
        if(time != ""){
             return true;
        }else{
            custom_warning("Please Enter a Time First");
        }
    }
    else{
           return true;
    }
}

/**
 * custom code table
*/

function custom_code(){
    document.getElementById('former-user-table').style.display = "block";
    document.getElementById('utmbs_billing').style.display = "none";
}

/**
 * Billing
*/

function utbms_billing(){
    document.getElementById('former-user-table').style.display = "none";
    document.getElementById('utmbs_billing').style.display = "block";
}

/**
 * check billing
*/

function check_billing(){
    let data = document.getElementById('billing_enable');
    
    if(data.checked == true){
        document.getElementById('ledes_firm_id').disabled = false;
        document.getElementById('ledes_firm_id').style.cursor = 'text';

        //
        document.getElementById('aba_litigation').disabled = false;
        document.getElementById('aba_litigation').style.cursor = 'default';

        //
        document.getElementById('aba_bankruptcy').disabled = false;
        document.getElementById('aba_bankruptcy').style.cursor = 'default';

        //
        document.getElementById('aba_project').disabled = false;
        document.getElementById('aba_project').style.cursor = 'default';

        //
        document.getElementById('aba_counseling').disabled = false;
        document.getElementById('aba_counseling').style.cursor = 'default';

        //
        document.getElementById('third_party_codes').disabled = false;
        document.getElementById('third_party_codes').style.cursor = 'default';
    }
    
    else{
        document.getElementById('ledes_firm_id').disabled = true;
        document.getElementById('ledes_firm_id').style.cursor = 'no-drop';

        //
        document.getElementById('aba_litigation').disabled = true;
        document.getElementById('aba_litigation').style.cursor = 'no-drop';

        //
        document.getElementById('aba_bankruptcy').disabled = true;
        document.getElementById('aba_bankruptcy').style.cursor = 'no-drop';

        //
        document.getElementById('aba_project').disabled = true;
        document.getElementById('aba_project').style.cursor = 'no-drop';

        //
        document.getElementById('aba_counseling').disabled = true;
        document.getElementById('aba_counseling').style.cursor = 'no-drop';

        //
        document.getElementById('third_party_codes').disabled = true;
        document.getElementById('third_party_codes').style.cursor = 'no-drop';

    }
}