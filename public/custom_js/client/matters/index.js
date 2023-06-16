/**
 * Trying for multiple open tabs
 */

function openNewTabs(id){
    window.location.href = "./"+id;
}

/**
 * close tab
*/

function closeTab(id, type){
    window.location.href = "../../../../delete/tab/"+id+"/"+type;
}

/**
 * for recently view
 */

function matter_filter(type){
    if(type == "recently-view"){
        window.location.href = "./filter/"+type;
    }
    if(type == "recently-view-new"){
        window.location.href = "../filter/"+'recently-view';
    }
    if(type == "all-matters-new"){
        window.location.href = "../filter/"+'all-matters';
    }
    if(type == "all-matters"){
        window.location.href = "./filter/"+type;
    }
    if(type == "open-matters-new"){
        window.location.href = "../filter/"+'open-matters';
    }
    if(type == "open-matters"){
        window.location.href = "./filter/"+type;
    }
    if(type == "pending-matters-new"){
        window.location.href = "../filter/"+'pending-matters';
    }
    if(type == "pending-matters"){
        window.location.href = "./filter/"+type;
    }
    if(type == "close-matters-new"){
        window.location.href = "../filter/"+'close-matters';
    }
    if(type == "close-matters"){
        window.location.href = "./filter/"+type;
    }
    if(type == "delete-matters-new"){
        window.location.href = "../filter/"+'delete-matters';
    }
    if(type == "delete-matters"){
        window.location.href = "./filter/"+type;
    }
}