
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

var style = $.urlParam('style');
  
alert(style);

if (style="print")
  {
    alert(style);
  }
else
  {
    alert('nothing');
  }