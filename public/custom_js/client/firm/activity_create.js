function show_fee_activity(){
    document.getElementById('fee-activity').style.display = "block";
    document.getElementById('time-activity').style.display = "none";
    document.getElementById('expense-activity').style.display = "none";
}

function show_time_activity(){
    document.getElementById('fee-activity').style.display = "none";
    document.getElementById('time-activity').style.display = "block";
    document.getElementById('expense-activity').style.display = "none";
}

function show_expense_activity(){
    document.getElementById('fee-activity').style.display = "none";
    document.getElementById('time-activity').style.display = "none";
    document.getElementById('expense-activity').style.display = "block";
}