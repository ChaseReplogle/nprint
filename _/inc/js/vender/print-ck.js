var vars=[],hash,q=document.URL.split("?")[1];if(q!==undefined){q=q.split("&");for(var i=0;i<q.length;i++){hash=q[i].split("=");vars.push(hash[1]);vars[hash[0]]=hash[1]}}if(["style"]>"print"){alert("This is a print style.");$('link[title="main"]').prop("disabled",!0)}else $('link[title="print"]').prop("disabled",!0);