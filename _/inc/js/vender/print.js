var vars = [], hash;
    var q = document.URL.split('?')[1];
    if(q !== undefined){
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            vars.push(hash[1]);
            vars[hash[0]] = hash[1];
        }
}

// Will alert the value of parameter a
if(['style'] > 'print') {
  alert('This is a print style.');
  $("#main-css").remove();
}
else {
  $("#print-css").remove();
}