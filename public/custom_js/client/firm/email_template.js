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