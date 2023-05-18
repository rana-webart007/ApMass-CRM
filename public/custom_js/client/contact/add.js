/**
 * search address 
*/

function search(){
    let search_for = document.getElementById('search_address').value;

if(search_for.length > 0){
    $.ajax({
        url: 'search/address/'+search_for,
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
 * select address
*/

function select_address(){
         let selected_area = document.getElementById('address_found').value;
         
         if(selected_area != "0"){
                $.ajax({
                    url: 'search/address/by-id/'+selected_area,
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