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
}