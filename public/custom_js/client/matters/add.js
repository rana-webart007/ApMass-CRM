function change(type){
    /**
     * get matters type by area
    */

  if(type == "area"){
    let area = document.getElementById('area_of_law').value;

    $.ajax({
            url: 'matter/get-by-area/'+area,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#matters_type').empty();

                if (data.length > 0) {
                    var input = document.getElementById("matters_type");
                    input.removeAttribute("disabled");

                    $('#matters_type').html("<option value='Select A Matter Type'>Select A Matter Type</option>");
                    $.each(data, function(key, value) {
                        $('#matters_type').append('<option value="' + value.matters_type + '">' + value.matters_type + '</option>');
                    });
                } else {
                    document.getElementById("matters_type").setAttribute("disabled", true);
                    $('#matters_type').append('<option value="" style="font-weight:bold;">No Matters Found</option>');
                }
            }
        });
    }

    /**
     *  get client's role by matters type & area
    */

    if(type == "role"){
        let area = document.getElementById('area_of_law').value;
        let matter = document.getElementById('matters_type').value;
        
        $.ajax({
                url: 'matter/get-client-role',
                type: 'GET',
                data:{
                    area: area,
                    matter: matter,
                },
                dataType: 'json',
                success: function(data) {
    
                    $('#client_role').empty();
    
                    if (data.length > 0) {
                        var input = document.getElementById("client_role");
                        input.removeAttribute("disabled");
    
                        $('#client_role').html("<option value='Select A Matter Type'>Select A Matter Type</option>");
                        $.each(data, function(key, value) {
                            $('#client_role').append('<option value="' + value.client_role + '">' + value.client_role + '</option>');
                        });
                    } else {
                        document.getElementById("client_role").setAttribute("disabled", true);
                        $('#client_role').append('<option value="" style="font-weight:bold;">No Matters Found</option>');
                    }
                }
            });
    }

    /**
     * Billing Units change
    */

    if(type == "billing_units"){
        let bill_units = document.getElementById('billing_units').value;

        if(bill_units == "Custom"){
              document.getElementById('custom_billing_units_div').style.display = "block";
        }else{
              document.getElementById('custom_billing_units_div').style.display = "none";
        }
    }

    /**
     * Hourly Rates
    */

    if(type == "override_rate_1"){
        document.getElementById('custom_override_rate_div').style.display = "none";
        document.getElementById('custom_override_default_rate_div').style.display = "none";
    }

    if(type == "override_rate_2"){
        document.getElementById('custom_override_rate_div').style.display = "block";
        document.getElementById('custom_override_default_rate_div').style.display = "none";
    }

    if(type == "override_rate_3"){
        document.getElementById('custom_override_rate_div').style.display = "none";
        document.getElementById('custom_override_default_rate_div').style.display = "block";
    }

    /**
     * Grace Period
    */

    if(type == "grace_not_applicable"){
        document.getElementById('grace_period_div_1').style.display = "none";
        document.getElementById('grace_period_div_2').style.display = "none";
    }

    if(type == "grace_applicable"){
        document.getElementById('grace_period_div_1').style.display = "block";
        document.getElementById('grace_period_div_2').style.display = "none";
    }

    if(type == "custom_grace_period"){
        let grace_period = document.getElementById('grace_period').value;
        
        if(grace_period == "None"){
            document.getElementById('grace_period_div_1').style.display = "none";
            document.getElementById('grace_period_div_2').style.display = "none";
        }
        if(grace_period == "Select"){
            document.getElementById('grace_period_div_1').style.display = "block";
            document.getElementById('grace_period_div_2').style.display = "none";
        }
        if(grace_period == "Custom"){
            document.getElementById('grace_period_div_1').style.display = "block";
            document.getElementById('grace_period_div_2').style.display = "block";
        }
    }

    /**
     * Invoice Title
    */

    if(type == "invoive_title_none"){
        document.getElementById('custom_invoice_title_field_div').style.display = "none";
    }
    if(type == "invoive_title_matter"){
        document.getElementById('custom_invoice_title_field_div').style.display = "none";
    }
    if(type == "invoive_title_matter_desc"){
        document.getElementById('custom_invoice_title_field_div').style.display = "none";
    }
    if(type == "invoive_title_custom"){
        document.getElementById('custom_invoice_title_field_div').style.display = "block";
    }

    /**
     * Invoice sub Title
    */

    if(type == "invoive_sub_title_none"){
        document.getElementById('custom_invoice_sub_title_field_div').style.display = "none";
    }
    if(type == "invoive_sub_title_matter"){
        document.getElementById('custom_invoice_sub_title_field_div').style.display = "none";
    }
    if(type == "invoive_sub_title_matter_title"){
        document.getElementById('custom_invoice_sub_title_field_div').style.display = "none";
    }
    if(type == "invoive_sub_title_custom"){
        document.getElementById('custom_invoice_sub_title_field_div').style.display = "block";
    }

    /**
     * surcharge
     */

    if(type == "surcharge_check"){
        document.getElementById('surcharge_type_div').style.display = "block";
    }

    if(type == "surcharge_type"){
         let stype = document.getElementById('surcharge_type').value;
         if(stype != "Select" && stype != "None"){
             document.getElementById('surcharge_type_details_div').style.display = "block";
         }else{
             document.getElementById('surcharge_type_details_div').style.display = "none";
         }
    }
}


/**
 * Billing Types Js
*/

function billtypes(){
    let bill_types = document.getElementById('billing_types').value;
    
    if(bill_types != "Select" && bill_types != "Contingency(%)"){
           document.getElementById('fee_estimate_billing_div').style.display = "block";
           document.getElementById('contingency_percent_div').style.display = "none";

           // remove disablility the field
           document.getElementById('fee_estimate_billing').removeAttribute("disabled", true);
    }
    if(bill_types == "Contingency(%)"){
        document.getElementById('fee_estimate_billing_div').style.display = "none";
        document.getElementById('contingency_percent_div').style.display = "block";
    }
    if(bill_types == "Select"){
        document.getElementById('fee_estimate_billing_div').style.display = "none";
        document.getElementById('contingency_percent_div').style.display = "none";
    }
    if(bill_types == "Not Billable"){
        document.getElementById('fee_estimate_billing_div').style.display = "block";
        document.getElementById('contingency_percent_div').style.display = "none";

        // disable the field
        document.getElementById('fee_estimate_billing').setAttribute("disabled", true);
    }
}