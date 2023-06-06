function add_new_user(){
     document.getElementById('staff-add-form').style.display = "block";
     document.getElementById('staff-table').style.display = "none";
     document.getElementById('former-user-table').style.display = "none";
}

function cancel_user_add(){
     document.getElementById('staff-add-form').style.display = "none";
     document.getElementById('staff-table').style.display = "block";
     document.getElementById('former-user-table').style.display = "none";
}

function show_former_staff(){
    let data = document.getElementById('is_former_member');

    if(data.checked == true){
        document.getElementById('staff-add-form').style.display = "none";
        document.getElementById('staff-table').style.display = "none";
        document.getElementById('former-user-table').style.display = "block";
    }else{
        document.getElementById('staff-add-form').style.display = "none";
        document.getElementById('staff-table').style.display = "block";
        document.getElementById('former-user-table').style.display = "none";
    }
}