/**
 * Sweet Alert for Delete
*/

function sw_alert1(id, type) {
        
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this!",
        icon: 'warning',
        padding: '1em',
        showCancelButton: true,
        // showCloseButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            if(type == "law"){
              window.location.href = "matters/law-area-delete/"+id;
            }
            if(type == "matter"){
              window.location.href = "matters/type-delete/"+id;
            }
            if(type == "client_role"){
                window.location.href = "matters/client/role-delete/"+id;
            }
            if(type == "admin_contact_address_del"){
                window.location.href = "address/delete/"+id
            }
            if(type == "client-person-contact"){
                window.location.href = "person/delete/"+id
            }
            if(type == "client-person-contact-new"){
                window.location.href = "../../person/delete/"+id
            }
            if(type == "client-business-contact"){
                window.location.href = "business/delete/"+id
            }
            if(type == "client-business-contact-new"){
                window.location.href = "../../business/delete/"+id
            }
            if(type == "client-matter"){
                window.location.href = "./delete/"+id
            }
            if(type == "staff"){
                window.location.href = "../staff/delete/"+id
            }

            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}

/**
 * sweet alert for warning
 */

function warning_alert(){
    Swal.fire({
        title: 'Warning',
        text: "Please Select a Valid Option",
        icon: 'warning',
        padding: '1em',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Okay'
      })
}