
$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
};

$.urlParam('style');

  

if($.urlParam('style') = 'print') {
  alert("I need a print style sheet.");
}
else {
  alert("I'm fine. Leave me alone'.");
}