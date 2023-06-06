/**
 * Check Mail Address
*/

function mail_address_check(){
    let check_box = document.getElementById('mail_check');
    let address_div = document.getElementById('diff_from_steet_address');

    if(check_box.checked == true){
        address_div.style.display = "block";
    }else{
        address_div.style.display = "none";
    }
}

/**
 * search address 
*/

function search(id){

/**
 * for street address
*/

if(id == 0){
    let search_for = document.getElementById('search_address').value;

if(search_for.length > 0){
    $.ajax({
        url: '../contacts/search/address/'+search_for,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.length > 0) {
                document.getElementById('address_found_div').style.display = "block";

                $('#address_found').html("<option value='0'>Select..</option>");
                    $.each(data, function(key, value) {
                        $('#address_found').append('<option value="' + value.id + '">' + value.location + '</option>');
                    });
            } else {
                document.getElementById('address_found_div').style.display = "block";
                $('#address_found').html("<option value='No Address Found'>No Address Found</option>");
            }
        }
    });
  }else{
        document.getElementById('address_found_div').style.display = "none";
  }

}

/**
 * for mailing address
*/

if(id == 1){
    let search_for = document.getElementById('mail_search_address').value;

if(search_for.length > 0){
    $.ajax({
        url: '../contacts/search/address/'+search_for,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.length > 0) {
                document.getElementById('mail_address_found_div').style.display = "block";

                $('#mail_address_found').html("<option value='0'>Select..</option>");
                    $.each(data, function(key, value) {
                        $('#mail_address_found').append('<option value="' + value.id + '">' + value.location + '</option>');
                    });
            } else {
                document.getElementById('mail_address_found_div').style.display = "block";
                $('#mail_address_found').html("<option value='No Address Found'>No Address Found</option>");
            }
        }
    });
  }else{
        document.getElementById('mail_address_found_div').style.display = "none";
  }

}

}


/**
 * select address
*/

function select_address(id){

    /**
     * for street address
     */

    if(id == 0){
         let selected_area = document.getElementById('address_found').value;
         
         if(selected_area != "0"){
                $.ajax({
                    url: '../contacts/search/address/by-id/'+selected_area,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        document.getElementById("address_line_1").value = data.address_line_1;
                        document.getElementById("address_line_2").value = data.address_line_2;
                        document.getElementById("state").value = data.state;
                        document.getElementById("city").value = data.city;
                        document.getElementById("zip").value = data.zip;
                    }
                });
         }else{
            document.getElementById("address_line_1").value = "";
            document.getElementById("address_line_2").value = "";
            document.getElementById("state").value = "";
            document.getElementById("city").value = "";
            document.getElementById("zip").value = "";

            warning_alert();
         }
    
    }

    /**
     * for mail address
    */

    if(id == 1){
        let selected_area = document.getElementById('mail_address_found').value;
        
        if(selected_area != "0"){
               $.ajax({
                   url: '../contacts/search/address/by-id/'+selected_area,
                   type: 'GET',
                   dataType: 'json',
                   success: function(data) {
                       document.getElementById("mail_address_line_1").value = data.address_line_1;
                       document.getElementById("mail_address_line_2").value = data.address_line_2;
                       document.getElementById("mail_state").value = data.state;
                       document.getElementById("mail_city").value = data.city;
                       document.getElementById("mail_zip").value = data.zip;
                   }
               });
        }else{
           document.getElementById("mail_address_line_1").value = "";
           document.getElementById("mail_address_line_2").value = "";
           document.getElementById("mail_state").value = "";
           document.getElementById("mail_city").value = "";
           document.getElementById("mail_zip").value = "";

           warning_alert();
        }
   
   }
}