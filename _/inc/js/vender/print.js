
$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results===null){
       return null;
    }
    else{
       return results[1] || 0;
    }
};

$.urlParam('style');

var style = $.urlParam('style');
  

if (style==="print")
  {
    jQuery('#main-css').remove();
  }
else
  {
    jQuery('#print-css').remove();
  }

if (style==="print")
  { jQuery('#calc-js').remove(); }
