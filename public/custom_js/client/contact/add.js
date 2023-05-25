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
                    name="more_title[]" id="more_title">
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
                    name="more_first_name[]" id="more_first_name" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last-name"
                    class="col-form-label">Last
                    Name:</label>
                <input type="text" class="form-control"
                    name="more_last_name[]" id="more_last_name" required>
            </div>
        </div>
    </div>
    
        <div class="col-md-12">
            <div class="form-group">
                <label for="Email"
                    class="col-form-label">Email:</label>
                <input type="text" class="form-control"
                    name="more_email[]" id="more_email" required>
            </div>
        </div>
   
    <div class="row contact-home ml-1">
        <div class="col-md-6">
            <label for="Email"
                class="col-form-label">HOME:</label>
            <div class="form-group">
                <input type="number" id="more_home_1" name="more_home_1[]"
                    class="form-control" required>
                
            </div>
            <div class="form-group">
                <input type="number" name="more_home_2[]"
                    class="form-control" id="more_home_2" required>
                
            </div>
        </div>
        <div class="col-md-6">
            <label for="Email"
                class="col-form-label">CELL:</label>
            <div class="form-group">
                <input type="number" id="more_cell_1" name="more_cell_1[]"
                    class="form-control" required>
                
            </div>
            <div class="form-group">
                <input type="number" id="more_cell_2" name="more_cell_2[]"
                    class="form-control" required>     
            </div>
        </div>
    </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="Email"
                    class="col-form-label">Business
                    Role:</label>
                <input type="text" class="form-control"
                    id="more_business_role" name="more_business_role[]">
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

/**
 * Save & New
*/

function save_and_new(type){

    /**
     * save & new person contacts 
    */

    if(type == "person"){
       let title = document.getElementById('title').value;
       let first_name = document.getElementById('first_name').value;
       let last_name = document.getElementById('last_name').value;
       let email = document.getElementById('Email').value;
       let home_1 = document.getElementById('home_1').value;
       let home_2 = document.getElementById('home_2').value;
       let cell_1 = document.getElementById('cell_1').value;
       let cell_2 = document.getElementById('cell_2').value;
       let address_line_1 = document.getElementById('address_line_1').value;
       let address_line_2 = document.getElementById('address_line_2').value;
       let city = document.getElementById('city').value;
       let state = document.getElementById('state').value;
       let zip = document.getElementById('zip').value;
       let add_to_existing_org1 = document.getElementById('add_to_existing_org1').value;

       // csrf
       let csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

       // 
       let req = "ajax";

       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken
        }
       });

        $.ajax({
                url: 'person/add/action',
                type: 'POST',
                data:{
                    title: title,
                    first_name: first_name,
                    last_name: last_name,
                    email: email,
                    home_1: home_1,
                    home_2: home_2,
                    cell_1: cell_1,
                    cell_2: cell_2,
                    address_line_1: address_line_1,
                    address_line_2: address_line_2,
                    city: city,
                    state: state,
                    zip: zip,
                    add_to_existing_org1: add_to_existing_org1,
                    req:req,
                },
                dataType: 'json',
                success: function(data) {

                    // Reset the form
                    $('#person_contact_form')[0].reset();

                    // open the modal
                    $('#exampleModal-2').modal('show');
                },
                error: function(xhr, status, error) {
                    // Reset the form
                    $('#person_contact_form')[0].reset();

                    // open the modal
                    $('#exampleModal-2').modal('show');
                }
        });
    }


    /**
     * save & new business contacts (trying..)
    */

    if(type == "business"){
        let name = document.getElementById('name').value;
        let company_type = document.getElementById('company_type').value;
        let email = document.getElementById('Email').value;
        let phone_1 = document.getElementById('phone_1').value;
        let phone_2 = document.getElementById('phone_2').value;
        let fax_1 = document.getElementById('fax_1').value;
        let fax_2 = document.getElementById('fax_2').value;
        let address_line_1 = document.getElementById('address_line_1').value;
        let address_line_2 = document.getElementById('address_line_2').value;
        let city = document.getElementById('city').value;
        let state = document.getElementById('state').value;
        let zip = document.getElementById('zip').value;


        let more_title = document.getElementsByName('more_title[]');
        let more_first_name = document.getElementsByName('more_first_name[]');
        let more_last_name = document.getElementsByName('more_last_name[]');
        let more_email = document.getElementsByName('more_email[]');
        let more_home_1 = document.getElementsByName('more_home_1[]');
        let more_home_2 = document.getElementsByName('more_home_2[]');
        let more_cell_1 = document.getElementsByName('more_cell_1[]');
        let more_cell_2 = document.getElementsByName('more_cell_2[]');
        let more_business_role = document.getElementsByName('more_business_role[]');

        for(var i=0; i<more_email.length; i++){
            more_email = more_email[i];
        }

        for(var i=0; i<more_title.length; i++){
            more_title = more_title[i];
        }

        for(var i=0; i<more_first_name.length; i++){
            more_first_name = more_first_name[i];
        }

        for(var i=0; i<more_last_name.length; i++){
            more_last_name = more_last_name[i];
        }

        for(var i=0; i<more_home_1.length; i++){
            more_home_1 = more_home_1[i];
        }

        for(var i=0; i<more_home_2.length; i++){
            more_home_2 = more_home_2[i];
        }

        for(var i=0; i<more_cell_1.length; i++){
            more_cell_1 = more_cell_1[i];
        }

        for(var i=0; i<more_cell_2.length; i++){
            more_cell_2 = more_cell_2[i];
        }

        for(var i=0; i<more_business_role.length; i++){
            more_business_role = more_business_role[i];
        }

        /**
         * https://www.geeksforgeeks.org/how-to-get-values-from-html-input-array-using-javascript/
        */
 
        // csrf
        let csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
 
        // 
        let req = "ajax";

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': csrfToken
            }
           });

           $.ajax({
            url: 'business/add/action',
            type: 'POST',
            data:{
                name: name,
                company_type: company_type,
                email: email,
                phone_1: phone_1,
                phone_2: phone_2,
                fax_1: fax_1,
                fax_2: fax_2,
                address_line_1: address_line_1,
                address_line_2: address_line_2,
                city: city,
                state: state,
                zip: zip,

                more_title: more_title,
                more_first_name: more_first_name,
                more_last_name: more_last_name,
                more_email: more_email,
                more_home_1: more_home_1,
                more_home_2: more_home_2,
                more_cell_1: more_cell_1,
                more_cell_2: more_cell_2,
                more_business_role: more_business_role,
                req:req,
            },
            dataType: 'json',
            success: function(data) {
                console.log("success");
                // Reset the form
                $('#person_contact_form')[0].reset();

                // open the modal
                $('#exampleModal-2').modal('show');
            },
            error: function(xhr, status, error) {
                // Reset the form
                $('#person_contact_form')[0].reset();

                // open the modal
                $('#exampleModal-2').modal('show');
            }
    });

    }
}

/**
 * select2
 */

$(document).ready(function() {
    $('#add_to_existing_org').select2();
});