
$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}

// example.com?param1=name&amp;param2=&amp;id=6
$.urlParam('style'); // name

console.log(decodeURIComponent($.urlParam('style')));  
//output: Gold Coast