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

/**
 * Add More Contacts 
*/

function add_more_contacts(){
    var container = document.getElementById('more_contacts');
    var row = document.createElement('div');
    row.classList.add('row');
    row.innerHTML = `
    <div class="row border border-dark p-2 rounded m-2" id="more_contacts">
    
        <h5>Contact Details</h5>
        <i class="fa fa-trash" style="position:relative; left: 77%;" onclick="removeField(this)"></i>
    
    <div class="row ml-1">
        <div class="col-md-4">
            <div class="form-group">
                <label
                    class="col-form-label">Title</label>
                <select class="form-control"
                    name="more_title[]">
                    <option value="Select A Title">
                        Select A
                        Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                    <option value="Mx">Mx</option>
                    <option value="Dr">Dr</option>
                    <option value="Master">Master
                    </option>
                    <option value="Honorable">Honorable
                    </option>
                    <option value="Professor">Professor
                    </option>
                    <option value="Reverend">Reverend
                    </option>
                    <option value="Magistrate">
                        Magistrate
                    </option>
                    <option value="Judge">Judge</option>
                    <option value="Father">Father
                    </option>
                    <option value="Attorney">Attorney
                    </option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="frist-name"
                    class="col-form-label">Frist
                    Name:</label>
                <input type="text" class="form-control"
                    name="more_first_name[]" id="Frist-name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last-name"
                    class="col-form-label">Last
                    Name:</label>
                <input type="text" class="form-control"
                    name="more_last_name[]" id="Last-name">
            </div>
        </div>
    </div>
    
        <div class="col-md-12">
            <div class="form-group">
                <label for="Email"
                    class="col-form-label">Email:</label>
                <input type="text" class="form-control"
                    name="more_email[]" id="Email">
            </div>
        </div>
   
    <div class="row contact-home ml-1">
        <div class="col-md-6">
            <label for="Email"
                class="col-form-label">HOME:</label>
            <div class="form-group">
                <input type="text" name="more_home_1[]"
                    class="form-control">
                
            </div>
            <div class="form-group">
                <input type="text" name="more_home_2[]"
                    class="form-control">
                
            </div>
        </div>
        <div class="col-md-6">
            <label for="Email"
                class="col-form-label">CELL:</label>
            <div class="form-group">
                <input type="text" name="more_cell_1[]"
                    class="form-control">
                
            </div>
            <div class="form-group">
                <input type="text" name="more_cell_2[]"
                    class="form-control">     
            </div>
        </div>
    </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="Email"
                    class="col-form-label">Business
                    Role:</label>
                <input type="text" class="form-control"
                    id="Email" name="more_business_role[]">
            </div>
        </div>
    
</div>
    `;
    container.appendChild(row);
}

/**
 * Remove Field
*/

function removeField(button) {
    var row = button.parentNode;
    var container = row.parentNode;
    container.removeChild(row);
}