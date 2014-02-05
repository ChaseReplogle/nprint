
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
    jQuery('script[type="calc-js"]').remove();
  }
else
  {
    jQuery('#print-css').remove();
  }