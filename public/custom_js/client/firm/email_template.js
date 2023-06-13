let inv = document.getElementById('invoices');
let in_remainders = document.getElementById('invoice-remainders');
let evergreen_retainer = document.getElementById('evergreen_retainer');
let dep_req = document.getElementById('deposit_request');

function showInvoices(){
    inv.style.display = 'block';
    in_remainders.style.display = 'none'; 
    evergreen_retainer.style.display = 'none';
    dep_req.style.display = 'none';
}

function showInvoicesReminders(){
    inv.style.display = 'none';
    in_remainders.style.display = 'block'; 
    evergreen_retainer.style.display = 'none';
    dep_req.style.display = 'none';
    CKEDITOR.replace('invoice_email_body');
    CKEDITOR.replace('notes');
}

function showEvergreenRetainers(){
    inv.style.display = 'none';
    in_remainders.style.display = 'none'; 
    evergreen_retainer.style.display = 'block';
    dep_req.style.display = 'none';
    CKEDITOR.replace('ever_green_email_body');
}

function showDepositRequest(){
    inv.style.display = 'none';
    in_remainders.style.display = 'none'; 
    evergreen_retainer.style.display = 'none';
    dep_req.style.display = 'block';
    CKEDITOR.replace('deposit_email_body');
}

/**
 * Add Invoices
*/

function addInvoices(){
    let email_subject = document.getElementById('email_subject').value;
    let subject_placeholder = document.getElementById('subject_placeholder').value;

    if(email_subject == ""){
        document.getElementById('email_subject').value = ''.concat(subject_placeholder).toUpperCase();
    }
    else{
        document.getElementById('email_subject').value = email_subject.concat(', ', subject_placeholder).toUpperCase();
    }
}

/**
 * Add Invoices Remainders
*/

function addInvoicesRemainders(){
    let email_subject = document.getElementById('inv_rem_email_subject').value;
    let subject_placeholder = document.getElementById('inv_rem_email_subject_placeholder').value;

    if(email_subject == ""){
        document.getElementById('inv_rem_email_subject').value = ''.concat(subject_placeholder).toUpperCase();
    }
    else{
        document.getElementById('inv_rem_email_subject').value = email_subject.concat(', ', subject_placeholder).toUpperCase();
    }
}

/**
 * Add Evergreen Retainers
*/

function addEvergreenRetainers(){
    let email_subject = document.getElementById('evergreen_email_subject').value;
    let subject_placeholder = document.getElementById('evergreen_subject_placeholder').value;

    if(email_subject == ""){
        document.getElementById('evergreen_email_subject').value = ''.concat(subject_placeholder).toUpperCase();
    }
    else{
        document.getElementById('evergreen_email_subject').value = email_subject.concat(', ', subject_placeholder).toUpperCase();
    }
}

/**
 * Add Deposit Request
*/

function addDepositRequest(){
    let email_subject = document.getElementById('deposit_email_subject').value;
    let subject_placeholder = document.getElementById('deposit_subject_placeholder').value;

    if(email_subject == ""){
        document.getElementById('deposit_email_subject').value = ''.concat(subject_placeholder).toUpperCase();
    }
    else{
        document.getElementById('deposit_email_subject').value = email_subject.concat(', ', subject_placeholder).toUpperCase();
    }
}