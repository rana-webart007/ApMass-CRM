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