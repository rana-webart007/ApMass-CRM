/**
 * Sweet Alert for Delete
*/

function sw_alert1(id, type) {
        
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this for forever!",
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

            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}